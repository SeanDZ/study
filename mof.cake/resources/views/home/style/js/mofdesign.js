
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


$(function(){
   
//   点击技术切换下半个页面
   $('.content_ul:eq(2) li').each(function(index,n){
     $(n).click(function(){
        $(this).css({"color":"#aab54d"});
        $(this).siblings().css({"color":"#3f291b"});
        $('.con').eq(0).css({"display":"none"});
        $('.con').eq(index).css({"display":"block"});
        $('.con').eq(index).siblings().css({"display":"none"});
     })
   });
   
   
   
   
   //   点击头部nav 切换图片
   $('.con_ulul:eq(0) li').eq(1).addClass('active');
   $('.con_ulul:eq(0) li').each(function(index,n){
      $(n).click(function(){
         $(this).addClass('active');
         $(this).siblings().removeClass('active');
         $('.con_ulliimg:eq(0) li').eq(index).siblings().css({"display":"none"});
         $('.con_ulliimg:eq(0) li').eq(index).css({"display":"block"});

      })
   });


   $('.con_ulul:eq(1) li').eq(1).addClass('active');
   $('.con_ulul:eq(1) li').each(function(index,n){
      $(n).click(function(){
         $(this).addClass('active');
         $(this).siblings().removeClass('active');
         $('.con_ulliimg:eq(1) li').eq(index).siblings().css({"display":"none"});
         $('.con_ulliimg:eq(1) li').eq(index).css({"display":"block"});

      })
   });


   $('.con_ulul:eq(2) li').eq(1).addClass('active');
   $('.con_ulul:eq(2) li').each(function(index,n){
      $(n).click(function(){
         $(this).addClass('active');
         $(this).siblings().removeClass('active');
         $('.con_ulliimg:eq(2) li').eq(index).siblings().css({"display":"none"});
         $('.con_ulliimg:eq(2) li').eq(index).css({"display":"block"});

      })
   });
   
})