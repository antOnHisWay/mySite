var fs = require('fs')
var util = require('util')
var path = require('path')
var template = require('art-template');


data = {
    meta: {
        title: 'abc',
        desc: 'abc'
    },
    title: '图片分析'
}

html = template('/var/www/sites/mySite/www.color.com/node/source/html/form.art', data);

fs.writeFile('../../form.html', html, { flag: 'w+' }, err => {})
