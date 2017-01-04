//点击换图片
$(function(){
   $('.con8_ul2 li').eq(0).addClass('active');     
   
   $('.con8_ul2 li').eq(0).click(function(){
      $('.con8_img').attr("src","../../img/mof/mofhostlink/hm.png");
      $('.con8_ul2 li').removeClass("active");
      $(this).addClass("active");

   })
   $('.con8_ul2 li').eq(1).click(function(){
      $('.con8_img').attr("src","../../img/mof/mofhostlink/hz.png");
      $('.con8_ul2 li').removeClass("active");
      $(this).addClass("active");
   })
   $('.con8_ul2 li').eq(2).click(function(){
      $('.con8_img').attr("src","../../img/mof/mofhostlink/bb.png");
      $('.con8_ul2 li').removeClass("active");
      $(this).addClass("active");
   })
    
})


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