var fs = require('fs')
var template = require('art-template');

let content = fs.readFileSync('./timezone.json');

content = JSON.parse(content.toString());

function getCitys(content1) {
    let content2 = content1;
    let data = [];
    for(let key in content2) {
        let country = '';
        let city = '';
        let timezone = '';
        for(let j in content2[key]['items']) {
            if(content2[key]['items'][j].title == '国家') {
                country = content2[key]['items'][j].desc.replace('\n', '').replace(' ', '').replace('.', '').trim();
            }
            if(content2[key]['items'][j].title == '城市') {
                city = content2[key]['items'][j].desc.replace('\n', '').replace(' ', '').replace('.', '').trim()
            }
            if(content2[key]['items'][j].title == '世界时差') {
                timezone = content2[key]['items'][j].desc.replace('\n', '').replace(' ', '').replace('.', '').trim()
            }
        }

        data[country] = typeof data[country] !== 'undefined' ? data[country] : [];
        data[country] = typeof data[country] !== 'undefined' ? data[country] : [];
        data[country].push({
            name: city,
            timezone: timezone
        });
    }

    return data;
}

let citys = getCitys(content);
console.log(citys);


for(let kk in citys) {
    let item = {};

    item.country = kk;
    item.citys = citys[kk];
    item.desc = kk;

    html = template('/var/www/sites/MySite/www.time.com/node/list.art', item);
    console.log(item);

    fs.writeFile('../public/' + item.country +'.html', html, { flag: 'w+' }, err => {})
}
