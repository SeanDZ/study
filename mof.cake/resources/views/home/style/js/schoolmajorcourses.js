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




//点击导航换整个版面
$('.content ul:eq(1) li').eq(0).addClass('active');
$('.content ul:eq(1) li').each(function(index,n){
   $(n).click(function(){
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      $('.con').css({"display":"none"});
      $('.con').eq(index).css({"display":"block"});
   })
})

