#!/usr/bin/python
# -*- coding: UTF-8 -*-

import scrapy


class ShijianSpider(scrapy.Spider):
    name = 'shijian'
    allowed_domains = ['shijian.cc']
    start_urls = [
        'http://www.shijian.cc/yazhou/',
        'http://www.shijian.cc/beimei/',
        'http://www.shijian.cc/nanmei/',
        'http://www.shijian.cc/ouzhou/',
        'http://www.shijian.cc/dayang/',
        'http://www.shijian.cc/feizhou/'
    ]

    def parse(self, response):
        for tag in response.css("tbody tr"):
#             yield {
#                 "text": tag.css("td:nth-child(2) a::attr(href)").get(),
#                 "country": tag.css("td:nth-child(2) a::text").get(),
#             }

            next_page = tag.css("td:nth-child(2) a::attr(href)").get()
            if next_page is not None:
                next_page = response.urljoin(next_page)
                yield scrapy.Request(next_page, callback=self.parse_1)
        pass

    def parse_1(self, response):
        for tag in response.css("tbody tr"):
#             yield {
#                 "text": tag.css("td:nth-child(3) a::attr(href)").get(),
#                 "country": tag.css("td:nth-child(3) a::text").get(),
#             }

            next_page = tag.css("td:nth-child(3) a::attr(href)").get()
            if next_page is not None:
                next_page = response.urljoin(next_page)
                yield scrapy.Request(next_page, callback=self.parse_2)
        pass

    def parse_2(self, response):
        list = {}
        list['name'] = response.css('div.dashboard-stat h1 span.hidden-xs::text').get()
        list['url'] =  response.request.url
        list['items'] = []
        for item in response.css("div.well>div>div"):
            list['items'].append({
                "title": item.css("span.label:nth-child(1)::text").get(),
                "desc": item.css("span.label:nth-child(2)::text").get(),
            })
        yield list
        pass

