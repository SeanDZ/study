//轮播左右show hidden
$('.fullwidthbanner-container').hover(function(){
   $('.tp-leftarrow').css({"display":"block"});
   $('.tp-rightarrow').css({"display":"block"})
},function(){
   $('.tp-leftarrow').css({"display":"none"});
   $('.tp-rightarrow').css({"display":"none"})
})


//新作品展示左右移动
$('.plist li a img').each(function(index,n){
   $(n).hover(function(){
      $(n).animate({"margin-left":"-3px"},500);
   },function(){
      $(n).animate({"margin-left":"0"},500);
   })
})


$(function(){
   var n=$('.plist li a img').width()*0.42;
   $('.plist li a img').height(n);
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
