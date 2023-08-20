var fs = require('fs')

var colorGroups = [
    {
        meta: {
            name: 'love-romantic',
            title: '棉花糖',
            desc: '仿佛棉花糖般五彩缤纷，青春靓丽的色彩搭配，利用明亮的粉、蓝、黄等颜色相互搭配，可以给人留下温柔、甜美的印象。',
        },
        colors: [
            '#ff0000',
            '#00ff00',
            '#0000ff',
            '#ffff00',
            '#00ffff',
            '#ff00ff',
            '#ff6600',
            '#00ff66',
            '#6600ff',
        ],
        double: [
            [1, 2],
            [0, 5],
            [4, 2],
            [7, 3],
            [4, 5],
            [2, 6],
        ],
        trible: [
            [0, 1, 2],
            [3, 4, 5],
            [3, 1, 6],
            [7, 3, 4],
            [5, 6, 2],
            [4, 7, 1],
        ],
        quadruple: [
            [0, 1, 2, 3],
            [3, 2, 5, 1],
            [6, 4, 2, 1],
            [4, 5, 3, 1],
            [7, 1, 2, 3],
            [1, 5, 6, 4],
        ]
    },
    {
        meta: {
            name: 'ercigonglue',
            title: '二次攻略',
            desc: '被炸的痛感降到最低依旧很痛，这反派实惨，被女主从头吊到尾，最后黑化了还被我这个外来者炸成灰灰。',
        },
        colors: [
            '#ff0000',
            '#00ff00',
            '#0000ff',
            '#ffff00',
            '#00ffff',
            '#ff00ff',
            '#ff6600',
            '#00ff66',
            '#6600ff',
        ],
        double: [
            [1, 2],
            [0, 5],
            [4, 2],
            [7, 3],
            [4, 5],
            [2, 6],
        ],
        trible: [
            [0, 1, 2],
            [3, 4, 5],
            [3, 1, 6],
            [7, 3, 4],
            [5, 6, 2],
            [4, 7, 1],
        ],
        quadruple: [
            [0, 1, 2, 3],
            [3, 2, 5, 1],
            [6, 4, 2, 1],
            [4, 5, 3, 1],
            [7, 1, 2, 3],
            [1, 5, 6, 4],
        ]
    },
    {
        meta: {
            name: 'weddingbee',
            title: '新婚夜',
            desc: '我是月照国的女祭司，我的夫君却以为我是个女婢',
        },
        colors: [
            '#ff0000',
            '#00ff00',
            '#0000ff',
            '#ffff00',
            '#00ffff',
            '#ff00ff',
            '#ff6600',
            '#00ff66',
            '#6600ff',
        ],
        double: [
            [1, 2],
            [0, 5],
            [4, 2],
            [7, 3],
            [4, 5],
            [2, 6],
        ],
        trible: [
            [0, 1, 2],
            [3, 4, 5],
            [3, 1, 6],
            [7, 3, 4],
            [5, 6, 2],
            [4, 7, 1],
        ],
        quadruple: [
            [0, 1, 2, 3],
            [3, 2, 5, 1],
            [6, 4, 2, 1],
            [4, 5, 3, 1],
            [7, 1, 2, 3],
            [1, 5, 6, 4],
        ]
    }
]

var s_all = getAll();
var output = '';

for(key in colorGroups) {
    output = '';
    colors = colorGroups[key]['colors'];
    double = colorGroups[key]['double'];
    trible = colorGroups[key]['trible'];
    quadruple = colorGroups[key]['quadruple'];
    meta = colorGroups[key]['meta'];

    var s_single = getSingle(colors);

    var s_double = getDouble(colors, double);

    var s_triple = getTriple(colors, trible);

    var s_quadruple = getQuadruple(colors, quadruple);

    output +=s_all + s_single + s_double + s_triple + s_quadruple;

    output += `.header-desc h1:before{content: '${meta.title}'}`;
    output += `.header-desc p:before{content: '${meta.desc}'}`;

    fs.writeFile('../dist/css/' + meta.name + '.css', output, { flag: 'w+' }, err => {});

    var html = getHtml(meta);

    fs.writeFile('../dist/' + meta.name + '.html', html, { flag: 'w+' }, err => {});
}

// console.log(output);


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
    background: linear-gradient(154deg, ${colors[double[key][0]]} 50%, ${colors[double[key][1]]} 0);
}
#double>div:nth-child(${1*key + 1})>div:nth-child(2)>div {
    background: ${colors[double[key][1]]};
    color: ${colors[double[key][0]]};
    line-height: 60px;
    font-size: 18px;
    text-align: center;
}
#double>div:nth-child(${1*key + 1})>div:nth-child(3)>div {
    background: linear-gradient(90deg, ${colors[double[key][0]]} 50%, ${colors[double[key][1]]} 0);
    background-size: 20% 100px;
}
#double>div:nth-child(${1*key + 1})>div:nth-child(4)>div {
    background: linear-gradient(154deg, ${colors[double[key][0]]} 50%, ${colors[double[key][1]]} 0);
}`;
    }

    return output;
}

function getTriple(colors, triple) {
    var output = '';

    for(key in triple) {
        output +=`
#triple>div:nth-child(${1*key + 1})>div:nth-child(1)>div {
    background: linear-gradient(45deg, ${colors[triple[key][0]]} 35%, ${colors[triple[key][1]]} 35% 70%, ${colors[triple[key][2]]} 70%);
    background-size: 100% 100%;
}

#triple>div:nth-child(${1*key + 1})>div:nth-child(2)>div {
    background: linear-gradient(180deg, ${colors[triple[key][0]]} 80%, ${colors[triple[key][1]]} 0);
    color: ${colors[triple[key][2]]};
    line-height: 60px;
    font-size: 18px;
    text-align: center;
}

#triple>div:nth-child(${1*key + 1})>div:nth-child(3)>div {
    background: linear-gradient(90deg, ${colors[triple[key][0]]} 26%, ${colors[triple[key][1]]} 26% 74%, ${colors[triple[key][2]]} 74%);
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
    background: linear-gradient(30deg, ${colors[quadruple[key][0]]} 26%, ${colors[quadruple[key][1]]} 26% 50%, ${colors[quadruple[key][2]]} 50% 74%, ${colors[quadruple[key][3]]} 74%);
}`;
    }

    return output;
}

function getAll() {
    return `
* {
    box-sizing: border-box;
}

#sidebar {
    width: 10%;
    margin-right: 10%;
    display: inline-block;
    background: rgba(0,0,0,0.3);
    height: 800px;
}

#sidebar ul {
    padding: 0;
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
    color: #0a0a0a;
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

function getHtml(meta) {
    return `
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>${meta.title}</title>
    <meta name="description" content="${meta.desc}">

    <link rel="stylesheet" href="./bootstrap-5.3.0/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/${meta.name + '.css'}">
</head>
<body>
    <div id="app" class="container">
        <div id="sidebar">
            <ul>
                <li data-index="0"><a href="#single-header">单色</a></li>
                <li data-index="1"><a href="#double-header">双色</a></li>
                <li data-index="2"><a href="#triple-header">三色</a></li>
                <li data-index="3"><a href="#quadruple-header">四色</a></li>
            </ul>
        </div>

        <div id="main">
            <div class="m-2 header-desc">
                <h1></h1>
                <p></p>
            </div>

            <div class="color-header m-2" id="single-header">单色</div>
            <div class="row m-2 gx-2" id="single">
                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>
                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>
                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>

                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>
                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>
                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>

                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>
                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>
                <div class="col-2 mt-2">
                    <div></div>
                </div>
                <div class="col-2 mt-2">
                    <h1></h1>
                    <p></p>
                </div>
            </div>

            <div class="color-header m-2" id="double-header">双色</div>
            <div class="row m-2 gx-2" id="double">
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>

                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>

                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>

                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>

                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>

                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>
            </div>

            <div class="color-header m-2" id="triple-header">三色</div>
            <div class="row m-2 gx-2" id="triple">
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                    <div class="mt-2"><div></div></div>
                </div>
            </div>

            <div class="color-header m-2" id="quadruple-header">四色</div>
            <div class="row m-2 gx-2" id="quadruple">
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                </div>
                <div class="col-2 mt-2">
                    <div class="mt-2"><div></div></div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="./index.js"></script>
</body>
</html>    
    `;
}


