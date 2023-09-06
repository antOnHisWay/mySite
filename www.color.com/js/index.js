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