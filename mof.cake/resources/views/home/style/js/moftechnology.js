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
         var m=index+1;
         $(this).css({"color":"#aab54d"});
         $(this).siblings().css({"color":"#3f291b"});
         $('.con').eq(0).css({"display":"none"});
         $('.con').eq(m).css({"display":"block"});
         $('.con').eq(m).siblings().css({"display":"none"});
      })
   });
   
   
   //   点击头部nav 切换图片
   $('.con_ululli').each(function(index,dom){
      $(dom).click(function(){
         $(this).addClass('active');
         $(this).siblings().removeClass('active');
         $('.con_ulliimg').eq(index).siblings().css({"display":"none"});
         $('.con_ulliimg').eq(index).css({"display":"block"});

      })
      
   })
   
   
   
   
   
   
   
   
   
   
})
