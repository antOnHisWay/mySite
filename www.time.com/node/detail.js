var fs = require('fs')
var template = require('art-template');

let content = fs.readFileSync('./timezone.json');

content = JSON.parse(content.toString());

function getSameLatitude(content1) {
    let content2 = content1;
    let data = [];
    for(let key in content2) {
        if(key<=20) {
            data.push(content2[key].name.replace('\n', '').replace('\n时间', '').replace('时间', '').replace(' ', '').replace('.', ''));
        }
    }

    return data;
}

function getSameLongitude(content1) {
    let content2 = content1;
    let data = [];
    for(let key in content2) {
        if(key>20 && key<=40) {
            data.push(content2[key].name.replace('\n', '').replace('\n时间', '').replace('时间', '').replace(' ', '').replace('.', ''));
        }
    }

    return data;
}

for(key in content) {
    let item = {};
    let sameLatitude = getSameLatitude(content);
    let sameLongitude = getSameLongitude(content);

    item = content[key];
    item.name = item.name.replace('\n', '').replace('\n时间', '').replace(' ', '').replace('时间', '').replace('.', '');
    item.sameLatitude = sameLatitude
    item.sameLongitude = sameLongitude
    item.desc = '';
    for(let i=0; i<item.items.length; i++) {
        item.desc += item.items[i].title + ':' + item.items[i].desc + ';';
    }

    html = template('/var/www/sites/MySite/www.time.com/node/detail.art', item);
    console.log(item);

    fs.writeFile('../public/' + item['name'] +'.html', html, { flag: 'w+' }, err => {})
}
