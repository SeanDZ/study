//返回顶部
window.onscroll = function() {

    if (document.body.scrollTop != 0) {

        $("#toTop img").slideDown();
    } else {
        $("#toTop img").slideUp();
    }
}
$('#toTop').click(function(){
    $('body').animate({
        'scrollTop':0
    },300)
})


// 轮播
$(document).ready(function() {

    $(".prev,.next").hover(function() {
        $(this).stop(true, false).fadeTo("show", 0.9);
    }, function() {
        $(this).stop(true, false).fadeTo("show", 0.4);
    });

    $(".banner-box").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        effect: "fold",
      
        interTime: 3500,
        delayTime: 500,
        autoPlay: true,
        autoPage: true,
        trigger: "click"
    });

});



$(function(){
    //   鼠标移入轮播左右按钮出现 移除消失
    $('.banner-box').hover(function() {
        $('.banner-btn a').css({ "display": "block" });
    }, function() {
        $('.banner-btn a').css({ "display": "none" });
    })

    var n=$('.m-width>img').height()*0.5;
//    console.log($('.m-width>img').height());
//    $('.banner-box').height($('.m-width>img').height());
//    $('.banner-box .bd').height($('.m-width>img').height());
//    $('.banner-box .bd ul').height($('.m-width>img').height());
//    $('.banner-box .bd ul .m-width').height($('.m-width>img').height());
//    $('.banner-box .bd ul .m-width img').height($('.m-width>img').height());
    $('.banner-box .hd').css({"top":n+"px"})

})