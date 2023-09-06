var fs = require('fs')
var util = require('util')
var path = require('path')
var template = require('art-template');

var categorys = [
    {
        id: '0001',
        name: 'lovely-romantic',
        title: '轻盈可爱',
        desc: '在设计方面，"可爱"是客户需求最多的一个词语。以"可爱"为主题，以温柔、淡雅的颜色为中心，介绍色彩搭配',
    },
    {
        id: '0002',
        name: 'business',
        title: '商务',
        desc: '商务配色多以体现"信赖"、"诚实"等专业、积极的印象为主。从多个角度出发，推荐符合商务气息的配色方案。'
    },
    {
        id: '0003',
        name: 'luxury-elegant',
        title: '成熟优雅',
        desc: '同时体现出"成年人的从容不迫"和"女性化"等特征的需求。此处的配色既能体现成熟女性高雅华丽的一面，又能体现其沉着冷静的一面。'
    },
    {
        id: '0004',
        name: 'miracle-fantasy',
        title: '神话传说',
        desc: '想要表达出虚幻世界的色彩，例如电影、漫画和游戏中描述的奇幻世界。此处的配色以奇幻的世界最具代表的6个主题为切入点进行配色设计。'
    },    {
        id: '0005',
        name: 'healthy-relaxation',
        title: '健康 & 放松',
        desc: '设计作品不仅要给人安全感，还要根据客户需求做到返璞归真。此处主要以自然为题，同时展现流行、高级、朴素等不同的质感。'
    },    {
        id: '0006',
        name: 'allover-the-world',
        title: '世界各地',
        desc: '受自身文化以及历史的影响，世界各地都演变出具有当地特色的配色方案。此处为大家推荐的就是哪些具有地域特色，同时又具有流行元素的色彩搭配。'
    },
    {
        id: '0007',
        name: 'emotion',
        title: '情感',
        desc: '情感是一种十分抽象的事物。虽然人类情感通常被概括成喜怒哀乐四种，但是有些情感是无法用语言表达的。此处涉及多个主题，通过色彩搭配的方式，将情感具象化'
    },
    {
        id: '0008',
        name: 'four-seasons',
        title: '节日庆典&季节',
        desc: '每个季节都具有相应的节日和庆典。每到这些时候，到处都是琳琅满目的装饰品、时装和小商品。此处推荐在各个季节锦上添花的配色方案。'
    },
    {
        id: '0009',
        name: 'cheerful-happiness',
        title: '幸福欢愉',
        desc: '此处以购物、派对等使用概率较高的广告或商品为主题，多采用引人注目的鲜艳颜色及其补色，使观者兴奋、情绪高涨。'
    }
]

var colorGroups = [
    {
        meta: {
            categoryId: '0001',
            name: 'love-romantic',
            title: '棉花糖',
            desc: '仿佛棉花糖般五彩缤纷，青春靓丽的色彩搭配，利用明亮的粉、蓝、黄等颜色相互搭配，可以给人留下温柔、甜美的印象。',
        },
        colors: [
            '#e3b3ce',
            '#b0d8f5',
            '#fcf09a',
            '#aeaed5',
            '#f1d6a3',
            '#bfdcda',
            '#ccde9a',
            '#dd9cb0',
            '#ffffff',
        ],
        double: [
            [3, 1],
            [9, 2],
            [8, 5],
            [4, 6],
            [1, 9],
            [3, 7],
        ],
        trible: [
            [3, 1, 2],
            [9, 2, 1],
            [8, 5, 6],
            [4, 6, 9],
            [1, 9, 4],
            [3, 7, 1],
        ],
        quadruple: [
            [3, 1, 2, 4],
            [9, 2, 1, 3],
            [8, 5, 6, 4],
            [4, 6, 9, 3],
            [1, 9, 4, 2],
            [3, 7, 1, 2],
        ]
    },
    {
        meta: {
            categoryId: '0001',
            name: 'baby',
            title: '婴儿',
            desc: '这是一组像初生婴儿般纯洁的配色，通过将男女都很适用的淡雪酪色与白色结合而表现出来',
        },
        colors: [
            '#FAF1EA',
            '#f4e1e8',
            '#eed1d6',
            '#e2f0f5',
            '#fffcd2',
            '#e4f0eb',
            '#dbd8eb',
            '#f4f4f4',
            '#ffffff',
        ],
        double: [
            [9, 2],
            [4, 9],
            [7, 5],
            [3, 1],
            [5, 6],
            [7, 4],
        ],
        trible: [
            [9, 2, 4],
            [4, 9, 6],
            [7, 5, 3],
            [3, 1, 9],
            [5, 6, 2],
            [7, 4, 8],
        ],
        quadruple: [
            [9, 2, 4, 7],
            [4, 9, 6, 3],
            [7, 5, 3, 2],
            [3, 1, 9, 4],
            [5, 6, 2, 9],
            [7, 4, 8, 9],
        ]
    },
    {
        meta: {
            categoryId: '0001',
            name: 'latte',
            title: '拿铁',
            desc: '拿铁给人一种浓醇温暖的感觉，这组配色就像拿铁一样。米黄色和棕色搭配在一起，给人高雅、冷静的印象。用粉色和黄绿色作点缀色，可以增加草莓、抹茶等的甜美印象',
        },
        colors: [
            '#d8b38c',
            '#c5a387',
            '#b2947b',
            '#e6cbb9',
            '#f9ede4',
            '#fdf8ea',
            '#dbbeab',
            '#d0d6b4',
            '#f1d9dc',
        ],
        double: [
            [5, 1],
            [6, 2],
            [3, 5],
            [5, 4],
            [6, 8],
            [2, 9],
        ],
        trible: [
            [5, 1, 3],
            [6, 2, 7],
            [3, 5, 1],
            [5, 4, 3],
            [6, 8, 1],
            [2, 9, 6],
        ],
        quadruple: [
            [5, 1, 3, 4],
            [6, 2, 7, 9],
            [3, 5, 1, 7],
            [5, 4, 3, 2],
            [6, 8, 1, 2],
            [2, 9, 6, 4],
        ]
    },


    {
        meta: {
            categoryId: '0002',
            name: 'global',
            title: '全球化',
            desc: '这是一组让人联想到业务全球化的配色。以蓝色为基调，不仅可以给人一种宏大的感觉，还给人留下朝气蓬勃、诚实、冷静的感觉。',
        },
        colors: [
            '#0074be',
            '#4897b6',
            '#364385',
            '#ffffff',
            '#002f5f',
            '#78b6e0',
            '#c3cbd1',
            '#7b8d9b',
            '#9dacc7',
        ],
        double: [
            [4, 5],
            [3, 4],
            [5, 6],
            [4, 9],
            [6, 2],
            [2, 8],
        ],
        trible: [
            [4, 5, 1],
            [3, 4, 8],
            [5, 6, 7],
            [4, 9, 3],
            [6, 2, 4],
            [2, 8, 5],
        ],
        quadruple: [
            [4, 5, 1, 7],
            [3, 4, 8, 1],
            [5, 6, 7, 1],
            [4, 9, 3, 1],
            [6, 2, 4, 3],
            [2, 8, 5, 7],
        ]
    },
    {
        meta: {
            categoryId: '0002',
            name: 'environment',
            title: '环境',
            desc: '这是一组可以灵活运用在都市规划、农业改革等与自然能源和IT相关领域的配色。以大自然的联想色--绿色为基调，搭配白色和灰色，给人以理性、高级的印象',
        },
        colors: [
            '#8dac5d',
            '#5f9c84',
            '#005c41',
            '#c8d970',
            '#9bb797',
            '#344f71',
            '#ffffff',
            '#dee1de',
            '#bac1c7',
        ],
        double: [
            [3, 5],
            [1, 3],
            [5, 6],
            [2, 7],
            [4, 5],
            [5, 8],
        ],
        trible: [
            [3, 5, 8],
            [1, 3, 8],
            [5, 6, 2],
            [2, 7, 9],
            [4, 5, 6],
            [5, 8, 2],
        ],
        quadruple: [
            [3, 5, 8, 6],
            [1, 3, 8, 4],
            [5, 6, 2, 1],
            [2, 7, 9, 4],
            [4, 5, 6, 2],
            [5, 8, 2, 3],
        ]
    },
    {
        meta: {
            categoryId: '0002',
            name: 'executive',
            title: '高层',
            desc: '将金、银、茶、黑等质感的颜色搭配在一起，可以给人留下商业圈大人物般的稳重、有格调的印象',
        },
        colors: [
            '#4b4541',
            '#503625',
            '#746652',
            '#9f8c4a',
            '#989a88',
            '#b8bbb8',
            '#000000',
            '#002f51',
            '#ffffff',
        ],
        double: [41,25,24,73,85,92],
        trible: [416,253,247,731,856,923],
        quadruple: [4163,2536,2478,7314,8569,9235]
    },

    {
        meta: {
            categoryId: '0003',
            name: 'adult-feminine',
            title: '成熟女性',
            desc: '这是一组为干练的女性而设计的配色。以深沉的暗红色、粉色、褐色为基础色调，用豪华的金色和青色做配色，可以刻画出脚踏实地的成熟女性形象',
        },
        colors: ['#92464d', '#d699a4', '#b56880', '#e8d0cf', '#825a49', '#9f8c90', '#c7b383', '#717c92', '#efe5dd'],
        double: [46, 71, 84, 25, 19, 23],
        trible: [461, 716, 843, 256, 197, 238],
        quadruple: [4612, 7169, 8432, 2563, 1972, 2386]
    },
    {
        meta: {
            categoryId: '0003',
            name: 'romantic-classical',
            title: '古典浪漫',
            desc: '此主题的配色灵感来自古典华丽的洛可可风格。以玫瑰红、粉、绿色为基础，降低彩度，变成Dusty-pastel色，便呈现出一种古典装饰似的感觉',
        },
        colors: ['#e6cdd2', '#dabbc1', '#f2e6ec', '#d7e0d5', '#e3d4bf', '#f6f3e9', '#c0c9bf', '#d6c4c0', '#d8cfde'],
        double: [61, 23, 39, 56, 84, 73],
        trible: [614, 235, 392, 568, 846, 732],
        quadruple: [6142, 2354, 3926, 5689, 8461, 7326]
    },
    {
        meta: {
            categoryId: '0003',
            name: 'sexy',
            title: '性感',
            desc: '这里的性感指的是，在男性眼里魅力十足的女性。将妖艳的紫色和黑丝，还有充满活力的粉色和红色搭配在一起，可以将成熟女性的风情万种表现出来',
        },
        colors: ['#a589ba', '#746bab', '#b8b2d6', '#b75094', '#7b2c3a', '#d4accc', '#000000', '#575254', '#c1ad6c'],
        double: [72, 95, 26, 47, 51, 64],
        trible: [723, 954, 265, 472, 518, 647],
        quadruple: [7235, 9542, 2658, 4721, 5182, 6472]
    },


    {
        meta: {
            categoryId: '0003',
            name: 'petit-rich',
            title: '小资',
            desc: '这是一组让人感觉有些奢侈的配色。就像女性犒劳自己的礼物。将豪华的金色与象征女性一样温柔的粉色搭配在一起，一个伸着懒腰的女人仿佛就出现在了眼前。',
        },
        colors: ['#fcf2ba', '#dcc796', '#cab590', '#f2dbe1', '#e3b1b4', '#ffffff', '#f1d9d0', '#d3baaa', '#bca19c'],
        double: [21, 63, 24, 96, 75, 89],
        trible: [214, 631, 246, 963, 752, 891],
        quadruple: [2148, 6312, 2461, 9637, 7521, 8916]
    },
    {
        meta: {
            categoryId: '0003',
            name: 'chic',
            title: '别致',
            desc: '这里的别致指的是优雅简单。在单调的黑、白、灰色调上追加粉色，素雅却不失格调',
        },
        colors: ['#ffffff', '#eeefef', '#bebebf', '#878788', '#000000', '#838698', '#f5e5ea', '#e0b9be', '#c4a5af'],
        double: [31, 84, 56, 47, 35, 29],
        trible: [315, 843, 562, 473, 359, 296],
        quadruple: [3159, 8437, 5621, 4739, 3597, 2964]
    },
    {
        meta: {
            categoryId: '0004',
            name: 'demon',
            title: '魔王',
            desc: '魔王是邪恶的象征。用黑色代表阴暗，用红色代表血液和火焰，在用紫色渲染魔力和鬼怪的气氛，从而突出魔王给人们带来的不可抗拒的恐怖感。',
        },
        colors: ['#000000', '#191c49', '#464746', '#972429', '#622922', '#b1342a', '#4e4173', '#393b54', '#843747'],
        double: [51, 65, 41, 74, 48, 92],
        trible: [513, 652, 415, 748, 481, 926],
        quadruple: [5134, 6527, 4159, 7482, 4815, 9263]
    },


    {
        meta: {
            categoryId: '0004',
            name: 'fairyland',
            title: '童话王国',
            desc: '童话王国，顾名思义就是童话里出现的那种不可思议的魔幻世界。使用容易让人联想到森林和花海的绿色和粉色，并降低彩度，就可以创造出一个带有田园色彩的虚幻世界',
        },
        colors: ['#725444', '#928162', '#c1ae85', '#556d44', '#8fa978', '#b1c664', '#d0827d', '#e0a488', '#f1d36f'],
        double: [51, 64, 45, 76, 81, 96],
        trible: [516, 647, 459, 762, 813, 964],
        quadruple: [5168, 6479, 4592, 7623, 8137, 9648]
    },
    {
        meta: {
            categoryId: '0004',
            name: 'castle',
            title: '城堡',
            desc: '城堡是皇族的象征。奢华高贵的金色配上象征国王的红色，可以给人留下豪华绚烂的印象。此外，还可以点缀青色或灰色，象征守护国王的英勇战士。',
        },
        colors: ['#e7c435', '#b59a45', '#a57d2b', '#c50030', '#972429', '#682e31', '#a6a9a8', '#42548b', '#ffffff'],
        double: [31, 14, 92, 75, 81, 63],
        trible: [314, 146, 928, 752, 815, 634],
        quadruple: [3142, 1463, 7523, 8153, 6342]
    },
    {
        meta: {
            categoryId: '0004',
            name: 'brave',
            title: '勇士',
            desc: '勇士，是与邪恶抗争的英雄。深蓝色象征和平，金色象征剑和勇气，将二者结合在一起，表现出勇士的诚实与强大',
        },
        colors: ['#16367e', '#4060a9', '#212d52', '#b08829', '#eec732', '#91988a', '#c15b42', '#ffffff', '#78bbbb'],
        double: [41, 63, 24, 72, 18, 92],
        trible: [415, 632, 245, 725, 184, 923],
        quadruple: [4159, 6325, 2458, 7251, 1843, 9234]
    },


    {
        meta: {
            categoryId: '0004',
            name: 'sailing',
            title: '航海',
            desc: '扬帆远航，去寻找新大陆和未知的宝藏，航海主题的配色就是要留下这种印象。用清爽的蓝色象征天空和大海，用褐色和红色象征船只和船员的装束，以此展现令人心潮澎湃的冒险精神。',
        },
        colors: ['#3881b4', '#6ab1bc', '#192d41', '#eaddcf', '#6e512b', '#b58237', '#000000', '#c6291f', '#ffffff'],
        double: [21, 34, 56, 85, 19, 92],
        trible: [215, 348, 567, 854, 194, 921],
        quadruple: [2156, 3489, 5671, 8547, 1942, 9216]
    },
    {
        meta: {
            categoryId: '0004',
            name: 'treasure',
            title: '宝藏',
            desc: '设计关于宝藏的配色，想象这前方有发光的金山在等着我们！黄色系象征闪闪发光的金币，褐色象征宝箱和钥匙，再用红宝石色或者祖母绿色加以点缀，此次冒险的终点便呈现眼前。',
        },
        colors: ['#e3bb34', '#ac7a29', '#d3b774', '#b29129', '#633d24', '#000000', '#d16c15', '#b80746', '#488b5d'],
        double: [45, 91, 52, 85, 26, 73],
        trible: [451, 914, 526, 854, 261, 735],
        quadruple: [4516, 9143, 5267, 8543, 2613, 7351]
    },
    {
        meta: {
            categoryId: '0005',
            name: 'ecology',
            title: '环保',
            desc: '环保，就是保护生态环境，使所有生命共同生存。用青色的绿色象征大自然，搭配粉色与橙色，可以给人留下明亮、积极的印象。',
        },
        colors: ['#b4ce5c', '#6fb285', '#96bfe8', '#599bca', '#eeeb6e', '#ffffff', '#db9022', '#b08e5e', '#d3799d'],
        double: [21, 43, 52, 86, 35, 91],
        trible: [217, 435, 529, 861, 352, 914],
        quadruple: [2176, 4351, 5293, 8617, 3528, 9142]
    },


    {
        meta: {
            categoryId: '0005',
            name: 'organic',
            title: '有机的',
            desc: '不使用农药等化学药剂的栽培方式称作有机的。用稍微有些青涩的绿色或褐色打底，可以使设计看起来更高级。用象征果实的橙色和黄色做点缀，可以给人留下健康的印象。',
        },
        colors: ['#ead3ac', '#a57f5e', '#865f49', '#b5c86e', '#83a253', '#5e825d', '#f4f2f1', '#dd984c', '#eec962'],
        double: [31, 42, 16, 83, 92, 27],
        trible: [315, 421, 162, 837, 926, 275],
        quadruple: [3152, 4219, 1628, 8374, 9261, 2753]
    },
    {
        meta: {
            categoryId: '0005',
            name: 'natural',
            title: '天然的',
            desc: '天然的感觉，就是自然天成、不加修饰的感觉。将浅灰色等各种自然的颜色结合在一起并统一色调，就可以营造出质朴、怀旧、平和的感觉',
        },
        colors: ['#f7ecd3', '#cba98e', '#a28d7e', '#b0bca6', '#899b86', '#e8d9ca', '#fcf7f2', '#eddca6', '#d7a58d'],
        double: [41, 32, 83, 96, 14, 57],
        trible: [412, 325, 834, 964, 145, 573],
        quadruple: [4123, 3256, 8341, 9647, 1458, 5732]
    },
    {
        meta: {
            categoryId: '0005',
            name: 'resort',
            title: '度假',
            desc: '想象一下成年女性在度假的样子，这就是本小节的配色主题。用蓝色系的颜色做基调，代表南方清澈的大海，再用沙滩的奶油色，晚霞的紫色、粉色搭配在一起，就会有一种成熟又可爱的风格。',
        },
        colors: ['#8ec6db', '#84bfbc', '#bddbd4', '#7c9ac2', '#f2dad9', '#fffde5', '#d3b887', '#e0a6b2', '#aca5ce'],
        double: [51, 32, 76, 93, 84, 61],
        trible: [519, 328, 762, 935, 843, 617],
        quadruple: [5198, 3286, 7625, 9357, 8432, 6173]
    },

    {
        meta: {
            categoryId: '0005',
            name: 'adult-earth-color',
            title: '成熟的大地色',
            desc: '这组配色让人联想到对健康要求比较高的女性。以自然与有机为主的颜色可以传达出高级感、自然主义、心胸宽广等信息，并战士自律的生活方式。',
        },
        colors: ['#eddecc', '#b2947b', '#978b74', '#cda798', '#c9ced1', '#b9b0b1', '#e8e5e2', '#7b8a9c', '#a86f78'],
        double: [12, 73, 41, 76, 85, 94],
        trible: [123, 735, 418, 769, 856, 942],
        quadruple: [1239, 7354, 4186, 7693, 8564, 9421]
    },
    {
        meta: {
            categoryId: '0006',
            name: 'japan',
            title: '日本',
            desc: '这是一组表达高尚的、优雅的日本风格的配色。通过降低整体色彩饱和度的方式，给人冷静、怀旧的印象',
        },
        colors: ['#bdbc77', '#efe8e1', '#cc9aaa', '#a0719f', '#e2cf67', '#403d3c', '#6d9bd4', '#703641', '#a62f25'],
        double: [12, 54, 36, 27, 81, 92],
        trible: [123, 546, 365, 271, 815, 924],
        quadruple: [1235, 5468, 3654, 2714, 8154, 9247]
    },
    {
        meta: {
            categoryId: '0006',
            name: 'west-coast',
            title: '西海岸',
            desc: '这里的西海岸是指美国西海岸。以象征天空和海洋的蓝色系为基调，搭配天然的米黄色或褐色，给人留下清爽的印象。',
        },
        colors: ['#8cc5e2', '#295391', '#ffffff', '#e6deb1', '#6fafbb', '#7a613d', '#577b52', '#e0effb', '#bd3a49'],
        double: [32, 68, 13, 74, 58, 92],
        trible: [321, 684, 135, 741, 586, 923],
        quadruple: [3219, 6845, 1354, 7418, 5863, 9234]
    },

    {
        meta: {
            categoryId: '0006',
            name: 'scandinavia',
            title: '北欧',
            desc: '说到北欧会让人想到色彩绚烂的装修风格和个性十足的各种物品。用低彩色温和的色调展现一个好玩又丰富多彩的世界。',
        },
        colors: ['#69a1af', '#e3d75e', '#3e568b', '#cf8e47', '#b2bbc2', '#cb7f76', '#ffffff', '#cb7f9d', '#ff7062'],
        double: [12, 51, 26, 97, 18, 34],
        trible: [123, 514, 265, 972, 187, 342],
        quadruple: [1234, 5147, 2653, 9728, 1873, 3425]
    },
    {
        meta: {
            categoryId: '0006',
            name: 'parisienne',
            title: '巴黎风格',
            desc: '这是一组满足了女性所有幻想的女性化配色，既展现了浪漫可爱的少女心，又体现了成熟女人的高贵优雅。用金黄色做点缀，还可以提升奢华感。',
        },
        colors: ['#c37d94', '#e2ccce', '#9bc5db', '#aba4c2', '#cb8b89', '#b8cae0', '#f6f7ed', '#e6c9dd', '#b2a25c'],
        double: [21, 46, 75, 32, 97, 84],
        trible: [213, 461, 752, 329, 974, 846],
        quadruple: [2137, 4612, 7526, 3295, 9748, 8462]
    },
    {
        meta: {
            categoryId: '0006',
            name: 'london-girl',
            title: '伦敦女孩',
            desc: '方格裙、菱形袜......参照伦敦女性的时尚搭配方式，打造的一组美丽却不妖娆的中性配色方案',
        },
        colors: ['#ab1c23', '#000000', '#223652', '#d8c8ac', '#705442', '#ffffff', '#c19723', '#3c513e', '#838287'],
        double: [13, 24, 56, 21, 78, 39],
        trible: [136, 241, 563, 219, 784, 398],
        quadruple: [1367, 2415, 5637, 2195, 7843, 3982]
    },
]

var s_all = getAll();
var output = '';

for(key in colorGroups) {
    output = '';
    colors = colorGroups[key]['colors'];
    double = string_to_array(colorGroups[key]['double']);
    trible = string_to_array(colorGroups[key]['trible']);
    quadruple = string_to_array(colorGroups[key]['quadruple']);
    meta = colorGroups[key]['meta'];

    var s_single = getSingle(colors);

    var s_double = getDouble(colors, double);

    var s_triple = getTriple(colors, trible);

    var s_quadruple = getQuadruple(colors, quadruple);

    output +=s_all + s_single + s_double + s_triple + s_quadruple;

    output += `.header-desc h1:before{content: '${meta.title}'}`;
    output += `.header-desc p:before{content: '${meta.desc}'}`;
    colorGroups[key]['meta']['css'] = './css/'  + meta.name + '.css';

    fs.writeFile('../../css/' + meta.name + '.css', output, { flag: 'w+' }, err => {});

    let html = template('/var/www/sites/mySite/www.color.com/node/source/html/peise-detail.art', colorGroups[key]);

    fs.writeFile('../../' + meta.name + '.html', html, { flag: 'w+' }, err => {});

}

function getSingle(colors) {
    var output = '';

    for(key in colors) {
        output +=`
#single div:nth-child(${2*key + 1})>div:nth-child(1) {
    background: ${colors[key]};
}
#single div:nth-child(${2*key + 2})>h1:before {
    content: '${1*key + 1}';
}
#single div:nth-child(${2*key + 2})>p:before {
    content: '${colors[key]}';
}`;
}

    return output;
}

function getDouble(colors, double) {
    var output = '';

    for(key in double) {
        output +=`
#double>div:nth-child(${1*key + 1})>div:nth-child(1)>div {
    background: linear-gradient(154deg, ${colors[double[key][0] - 1]} 50%, ${colors[double[key][1]- 1]} 0);
}
#double>div:nth-child(${1*key + 1})>div:nth-child(2)>div {
    background: ${colors[double[key][1]- 1]};
    color: ${colors[double[key][0]- 1]};
    line-height: 60px;
    font-size: 18px;
    text-align: center;
}
#double>div:nth-child(${1*key + 1})>div:nth-child(3)>div {
    background: linear-gradient(90deg, ${colors[double[key][0] - 1]} 50%, ${colors[double[key][1] - 1]} 0);
    background-size: 20% 100px;
}
#double>div:nth-child(${1*key + 1})>div:nth-child(4)>div {
    background: linear-gradient(154deg, ${colors[double[key][0] - 1]} 50%, ${colors[double[key][1] - 1]} 0);
}`;
    }

    return output;
}

function getTriple(colors, triple) {
    var output = '';

    for(key in triple) {
        output +=`
#triple>div:nth-child(${1*key + 1})>div:nth-child(1)>div {
    background: linear-gradient(45deg, ${colors[triple[key][0] - 1]} 35%, ${colors[triple[key][1] - 1]} 35% 70%, ${colors[triple[key][2] - 1]} 70%);
    background-size: 100% 100%;
}

#triple>div:nth-child(${1*key + 1})>div:nth-child(2)>div {
    background: linear-gradient(180deg, ${colors[triple[key][0] - 1]} 80%, ${colors[triple[key][1] - 1]} 0);
    color: ${colors[triple[key][2] - 1]};
    line-height: 60px;
    font-size: 18px;
    text-align: center;
}

#triple>div:nth-child(${1*key + 1})>div:nth-child(3)>div {
    background: linear-gradient(90deg, ${colors[triple[key][0] - 1]} 26%, ${colors[triple[key][1] - 1]} 26% 74%, ${colors[triple[key][2] - 1]} 74%);
    background-size: 35% 500px;
}

#triple>div:nth-child(${1*key + 1})>div:nth-child(4)>div {
    background: linear-gradient(154deg, #f55 50%, #55f 0);
}`;
    }

    return output;
}

function getQuadruple(colors, quadruple) {
    var output = '';

    for(key in quadruple) {
        output += `
#quadruple>div:nth-child(${1*key + 1})>div>div {
    padding-bottom: 200%;
    height: 0;
    background: linear-gradient(30deg, ${colors[quadruple[key][0] - 1]} 26%, ${colors[quadruple[key][1] - 1]} 26% 50%, ${colors[quadruple[key][2] - 1]} 50% 74%, ${colors[quadruple[key][3] - 1]} 74%);
}`;
    }

    return output;
}

function getAll() {
    return `
* {
    box-sizing: border-box;
}

.container {
    max-width: 1200px;
}

.container #main, .container #sidebar {
    margin-top: 150px;
}

#sidebar {
    display: inline-block;
    background: rgba(0,0,0,0.3);
    text-align: center;
}


#sidebar ul li {
    text-decoration: none;
    text-align: center;
    list-style: none;
    padding: 25px 0;
    color: #FFFFFF;
    border-bottom: 1px solid #0a0a0a;
}

#sidebar ul li:hover {
    background: red;
}

#sidebar a {
    text-underline: none;
    text-decoration: none;
    color: #ff00ff;
    font-size: 22px;
}

.color-header {
    border-bottom: 1px solid;
    width: 300px;
    padding-top: 30px;
    margin-top: 50px;
    font-size: 30px;
    color: #4e4e4e;
}

#main {
    width: 80%;
    display: inline-block;
    float: right;
}

#single div {
    height: 100px;
}
#double>div>div {
    width: 100%;
}

#double>div>div>div {
    padding-bottom: 50%;
    height: 0;
}

#double>div>div:nth-child(2)>div:after {
    content: 'Shopping';
}

#triple>div>div {
    width: 100%;
}

#triple>div>div>div {
    padding-bottom: 50%;
    height: 0;
}

#quadruple>div>div {
    width: 100%;
}`;
}

function string_to_array(data) {
    for(let k in data) {
        if(!Array.isArray(data[k])) {
            data[k] = Array.from(data[k].toString())
        }
    }

    return data;
}

function create_peise_list(categorys, colorGroups) {
    data = {
        categorys: categorys,
        colorGroups: colorGroups,
        meta: {
            title: '经典配色列表页',
            desc: '经典配色列表页'
        }
    }

    html = template('/var/www/sites/mySite/www.color.com/node/source/html/peise-list.art', data);

    fs.writeFile('../../list.html', html, { flag: 'w+' }, err => {})
}

create_peise_list(categorys, colorGroups);