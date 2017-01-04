
//点击+出现二级菜单 点击x消失
$('.con-left ul li:even').toggle(function(){
   $(this).find('.con-leftjia').css({"display":"none"});
   $(this).find('.con-leftx').css({"display":"block"});
   $(this).next().slideDown();
   $(this).css({"color":"#aab54d"});
   $(this).css({"border-bottom":"none"});
},function(){
   $(this).find('.con-leftjia').css({"display":"block"});
   $(this).find('.con-leftx').css({"display":"none"});
   $(this).next().slideUp(); 
   $(this).css({"color":"#3f291b"});
   $(this).css({"border-bottom":"1.5px solid #e5e5e5"});
})


//悬浮图片放大
window.onload=function(){
   var img=document.getElementsByClassName('conimg')[0];
   var imgw=img.offsetWidth;
   var imgh=img.offsetHeight;
   $('.con-right>ul>li').height(imgh);
   $('.con-right>ul>li').width(imgw);
   $('.con-right>ul>li').css({"overflow":"hidden"});
   
   $('.conimg').each(function(index,n){
      $(n).hover(function(){
         $(n).animate({"width":imgw+10+"px","height":imgh+10+"px","margin-left":"-5px","margin-top":"-5px"},300);
                  },function(){
         $(n).animate({"width":imgw+"px","height":imgh+"px","margin-left":"0px","margin-top":"0px"},300);
         })
      })
}

//点击节日换内容
$(function(){
   $('.con-left ul li p').each(function(index,n){
      $(n).click(function(){
         $('.con-rightul').css({"display":"none"});
         $('.con-rightul').eq(index).css({"display":"block"});
      })
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








