var fs = require('fs')
var util = require('util')
var path = require('path')
var template = require('art-template');

var author = {
    name: '葛饰北斋',
    desc: '葛饰北斋（ 日语：葛飾 北斎／かつしか ほくさい Katsushika Hokusai 1760年10月31日－1849年5月10日），本名时太郎 / ときたろう Tokitarou、铁藏 / てつぞう Tetsuzou，日本江户城人（今日本东京），江户时代末期浮世绘大师，化政文化代表人物。葛饰北斋多才多艺，作品涉猎版画、水墨、染画、图书插画等，其中以浮世绘《富岳三十六景》以及出版幅度达六十四年的《北斋漫画》为其最具代表性的作品。'
}

var fuji = [
    {
        author: author,
        meta: {
            desc: '《富岳三十六景》，浮世绘画师葛饰北斋晚年的作品之一，属于浮世绘中的“名所绘”，为描绘由日本关东各地远眺富士山时的景色。初版只绘制36景，因为大受好评，所以葛饰北斋仍以《富岳三十六景》为题再追加10景，最终此系列共有46景。一般俗称初版的36景为“表富士”，追加的10景为“里富士”。初版于天保2年（1831年）发行，出版商为西村屋与八。《富岳三十六景》不仅是葛饰北斋的代表作，同时也是众多描绘富士山作品中之翘楚，享有浮世绘版画最高杰作的美誉。',
            title: '神奈川冲浪里'
        },
        id: '0001',
        name: 'juanjiangshanzhong',
        title: '远江山中',
        src: '/images/fuji/juanjiangshanzhong.jpeg',
        item: {
            size: '200px * 500px',
            author: 'WEnihwol'
        }
    },
    {
        author: author,
        meta: {
            desc: '《富岳三十六景》，浮世绘画师葛饰北斋晚年的作品之一，属于浮世绘中的“名所绘”，为描绘由日本关东各地远眺富士山时的景色。初版只绘制36景，因为大受好评，所以葛饰北斋仍以《富岳三十六景》为题再追加10景，最终此系列共有46景。一般俗称初版的36景为“表富士”，追加的10景为“里富士”。初版于天保2年（1831年）发行，出版商为西村屋与八。《富岳三十六景》不仅是葛饰北斋的代表作，同时也是众多描绘富士山作品中之翘楚，享有浮世绘版画最高杰作的美誉。',
            title: '神奈川冲浪里'
        },
        id: '0002',
        name: 'yintianshuiche',
        title: '隐田水车',
        src: '/images/fuji/yintianshuiche.jpeg',
        item: {
            size: '200px * 500px',
            author: 'WEnihwol'
        }
    },{
        author: author,
        meta: {
            desc: '《富岳三十六景》，浮世绘画师葛饰北斋晚年的作品之一，属于浮世绘中的“名所绘”，为描绘由日本关东各地远眺富士山时的景色。初版只绘制36景，因为大受好评，所以葛饰北斋仍以《富岳三十六景》为题再追加10景，最终此系列共有46景。一般俗称初版的36景为“表富士”，追加的10景为“里富士”。初版于天保2年（1831年）发行，出版商为西村屋与八。《富岳三十六景》不仅是葛饰北斋的代表作，同时也是众多描绘富士山作品中之翘楚，享有浮世绘版画最高杰作的美誉。',
            title: '神奈川冲浪里'
        },
        id: '0003',
        name: 'xinzhouxunfanghu',
        title: '信州诹访湖',
        src: '/images/fuji/xinzhouxunfanghu.jpeg',
        item: {
            size: '200px * 500px',
            author: 'WEnihwol'
        }
    }
]

for(key in fuji) {
    html = template('/var/www/sites/mySite/www.color.com/node/source/html/fuji.art', fuji[key]);

    fs.writeFile('../../' + fuji[key]['name'] +'.html', html, { flag: 'w+' }, err => {})
}
