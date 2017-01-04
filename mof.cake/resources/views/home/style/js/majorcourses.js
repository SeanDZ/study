//返回顶部
window.onscroll=function(){

   if(document.body.scrollTop!=0){

      $("#toTop img").slideDown();
   }else{
      $("#toTop img").slideUp();
   }
}
$("#toTop").click(function(){
   $('body').animate({
      'scrollTop':0
   },200)
})


//console.log($('.imglist li img').width());
//console.log($('.imglist li img').height());
var w = $('.imglist li img').width();
var h = $('.imglist li img').height()*0.5;
var hh= $('.imglist li img').height()*0.95;
var hhh= $('.imglist li img').height();
var ww = $('.imglist li img').width()*4;
$('.imglist li').width(w);
$('.imglist').width(ww);
$('#box').height(hhh);
$('.lbtn').css({"top":h+"px"});
$('.rbtn').css({"top":h+"px"});
$('.xbiao').css({"top":hh+"px"});

//基础轮播
var index = 0;

function xiaoguo(n) {
   $(".imglist").stop().animate({
      "margin-left": -n * w + 'px'
   },500)
}


//左右按钮
$(".lbtn").click(function(){
   huan(-1);
});
$(".rbtn").click(function(){
   huan(+1);
 });

function huan(n) {
   index += n;

   if (index == 4) {
      index = 3;
   }
   if (index < 0) {
      index = 0;
   }
   xiaoguo(index);
   xbiao(index);
}


//小图标
function xbiao(n) {
   if (n < 0) {
      $(".xbiao>li").eq(0).css({
         "backgroundColor": "#3f291b"
      }).siblings().css({
         "backgroundColor": "gainsboro"
      })
   } else {
      $(".xbiao>li").eq(n).css({
         "backgroundColor": "#3f291b"
      }).siblings().css({
         "backgroundColor": "gainsboro"
      })


   }
}
//点击小图标定位图片
function ding(m) {
   index = m;
   $(".imglist").animate({
      "margin-left": -m * w + 'px'
   }, 300)
   xbiao(index);
}




//不动轮播 点击小标签跳到相应图片
$('.ul>li').eq(0).addClass('active');
function change(n){
   $('.ul>li').siblings().removeClass('active');
   $('.ul>li').eq(n).addClass('active');
   $('.myul').css({"margin-left":-n*800+"px"});
}




$(document).ready(function(){ 
   $('#featured-area ul').roundabout({
      easing: 'easeOutInCirc',
      duration: 600
   });
});