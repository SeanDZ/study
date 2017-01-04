<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="/resources/views/home/style/img/logo.png" />
    <title>莫夫</title>

    <!--css-->
  <link rel="stylesheet" type="text/css" href="/resources/views/home/style/css/mofindex.css">
  <link rel="stylesheet" type="text/css" href="/resources/views/home/style/css/mofcake.css">
</head>
<body>

  <!--头部-->
  <div class="logo-header">
    <img src="/resources/views/home/style/img/logo.png">
    <img src="/resources/views/home/style/img/search.png">
    <img src="/resources/views/home/style/img/search1.png">
    <img src="/resources/views/home/style/img/user.png">
    <img src="/resources/views/home/style/img/user1.png">
  </div>

  <!--点击搜索出现的搜索框-->
  <div class="sear-hidden">
    <div class="shst">
      <img src="/resources/views/home/style/img/search.png" class="sear">
      <form action="" method="get" enctype="multipart/form-data">
          <input type="text" class="sear-text"  name="search" placeholder="搜索 mof.com" autofocus>
      </form>
      <img src="/resources/views/home/style/img/x.png" class="sear-x">
    </div>
    <div class="shpu">
      <p class="shpu-p">快速链接</p>
      <ul class="shpu-ul1">
        <li conid="0" class="active"><a href="">莫夫</a></li>
        <li conid="1"><a href="">烘培学堂</a></li>
        <li conid="2"><a href="">料单</a></li>
        <li conid="3"><a href="">商场</a></li>
        <li conid="4"><a href="">合作品牌</a></li>
        <li conid="5"><a href="">召集令</a></li>
      </ul>
      <ul class="shpu-ul2">
        <li class="active">
          <table class="shpu-ul2-table">
            <tr>
              <td><a href="">莫夫研发</a></td>
              <td><a href="">艺术蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">节日蛋糕</a></td>
              <td><a href="">面包</a></td>
            </tr>
            <tr>
              <td><a href="">口味蛋糕</a></td>
              <td><a href="">糕点</a></td>
            </tr>
            <tr>
              <td><a href="">造型蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">大型蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">中国风蛋糕</a></td>
            </tr>
          </table>
        </li>
        <li>
          <table class="shpu-ul2-table">
            <tr>
              <td><a href="">莫夫研发</a></td>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href="">节日蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">口味蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">大型蛋糕</a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
          </table>
        </li>
        <li>
          <table class="shpu-ul2-table">
            <tr>
              <td><a href="">莫夫研发</a></td>
            </tr>
            <tr>
              <td><a href="">节日蛋糕</a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
          </table>
        </li>
        <li>
          <table class="shpu-ul2-table">
            <tr>
              <td><a href="">莫夫研发</a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
          </table>
        </li>
        <li>
          <table class="shpu-ul2-table">
            <tr>
              <td><a href="">莫夫研发</a></td>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href="">节日蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">口味蛋糕</a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
          </table>
        </li>
        <li>
          <table class="shpu-ul2-table">
            <tr>
              <td><a href="">莫夫研发</a></td>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href="">节日蛋糕</a></td>
            </tr>
            <tr>
              <td><a href="">莫夫研发</a></td>
            </tr>
            <tr>
              <td><a href="">节日蛋糕</a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
            <tr>
              <td><a href=""></a></td>
            </tr>
          </table>
        </li>
      </ul>
    </div>
  </div>


<!-- 全屏轮播 -->
<div class="wrap" id="wrap">
<!--轮播图-->
	<div class="wrapper">
    <div class="product_list" id="product_list">
      @foreach($middle as $v)
      <div class="product_box">
        <div class="bg_box"><img src="/{{$v->middle_img}}"></div>
      </div>
      @endforeach
    </div> 
    </div>
    
    
<!--    小标-->
    <div class="product_btns" id="product_btns">
      <div class="content">
        <div class="btns_area">
          <div class="btns_box">
            <a href="http://mof.cake/home/mof/index">
                <img src="/resources/views/home/style/img/mof1.png" class="img1">
                <img src="/resources/views/home/style/img/mof.png" class="img2">
            </a>
            <a href="bakeschool/schoolhost.html">
                <img src="/resources/views/home/style/img/xuetang1.png" class="img1">
                <img src="/resources/views/home/style/img/xuetang.png" class="img2">
            </a>
            <a href="listfeed/listhost.html">
                <img src="/resources/views/home/style/img/liaodan1.png" class="img1">
                <img src="/resources/views/home/style/img/liaodan.png" class="img2">
            </a>
            <a href="mofclass/classhost.html">
                <img src="/resources/views/home/style/img/jiaoshi1.png" class="img1">
                <img src="/resources/views/home/style/img/jiaoshi.png" class="img2">
            </a>
            <a href="mall/mallhost.html">
                <img src="/resources/views/home/style/img/gouwu1.png" class="img1">
                <img src="/resources/views/home/style/img/gouwu.png" class="img2">
            </a>
            <div id="control_box">
              <a href="javascript:;"></a>
              <a href="javascript:;"></a>
              <a href="javascript:;"></a>
              <a href="javascript:;"></a>
              <a href="javascript:;"></a>
            </div>
            <span class="ic_line" id="ic_line"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="rpt_bg png" id="rpt_bg"></div>
  </div>

<!--引入的js-->
<script src="/resources/views/home/style/js/jquery-1.8.3.min.js"></script>
<script src="/resources/views/home/style/js/mofcake.js"></script>
</body>
</html>

