const { createApp, ref } = Vue

createApp({
    setup() {
        return {
            message: 'abcdef',
            iconlist:[
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                },
                {
                    name: 'abc',
                    href: 'abce',
                    img: './images/iconfont.jpeg',
                    desc: 'abc'
                }
            ],
            list0: [
                {
                    header: 'ABC',
                    items: [
                        {
                            src: './images/iconfont.jpeg',
                            name: 'ABC',
                            desc: 'ABCDEF'
                        },
                        {
                            src: './images/iconfont.jpeg',
                            name: 'ABC',
                            desc: 'ABCDEF'
                        },
                        {
                            src: './images/iconfont.jpeg',
                            name: 'ABC',
                            desc: 'ABCDEF'
                        },
                        {
                            src: './images/iconfont.jpeg',
                            name: 'ABC',
                            desc: 'ABCDEF'
                        },
                        {
                            src: './images/iconfont.jpeg',
                            name: 'ABC',
                            desc: 'ABCDEF'
                        },
                        {
                            src: './images/iconfont.jpeg',
                            name: 'ABC',
                            desc: 'ABCDEF'
                        }
                    ]
                },
            ]
        }
    }
}).mount('#app')

$('#main-list .item').hover(function () {
    $(this).addClass('hover')
}, function () {
    $(this).removeClass('hover')
});

$('li').hover(function (){
    $('.listss').hide();
    var id = $(this).attr('data-index');
    $('#index-' + $(this).attr('data-index')).show();
})

$('#main').hover(function(){}, function(){
    $('.listss').hide();
})