import scrapy


class ChengyuSpider(scrapy.Spider):
    name = 'chengyu'
    allowed_domains = ['www.hydcd.com']
    start_urls = [
        'http://www.hydcd.com/baike/cymy.htm',
        'http://www.hydcd.com/baike/cymy2.htm',
        'http://www.hydcd.com/baike/cymy3.htm'
    ]

    def parse(self, response):
        for item in  response.css('body>table:nth-child(1)>tr:nth-child(3) table:nth-child(2) tr'):
            if item.css('td:nth-child(1) a::text').get():
                key = item.css('td:nth-child(1) a::text').get()
            else:
                key = item.css('td:nth-child(1)::text').get().replace('…… 打一成语', '')

            yield {
                "key": key,
                "val": item.css('td:nth-child(2) a::text').get(),
            }
        pass
