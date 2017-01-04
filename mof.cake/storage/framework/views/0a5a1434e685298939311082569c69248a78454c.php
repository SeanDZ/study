<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="/resources/views/home/style/img/logo.png" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!--引入css-->
    <link rel="stylesheet" type="text/css" href="/resources/views/home/style/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/resources/views/home/style/css/mofhost.css">
</head>
<body>

<!--header-->
<div id="header">
    <ul>
        <li><a href="../mof.html"><img src="/resources/views/home/style/img/logo.png" class="logo"></a></li>
        <li><a href="javascript:;">莫夫</a></li>
        <li><a href="">烘培学堂</a></li>
        <li><a href="../listfeed/listhost.html">料单</a></li>
        <li><a href="../mofclass/classhost.html">莫夫教室</a></li>
        <li><a href="../mall/mallhost.html">商城</a></li>
        <li><a href=""><img src="/resources/views/home/style/img/search.png" class="search"></a></li>
        <li><a href=""><img src="/resources/views/home/style/img/user.png" class="user"></a></li>
    </ul>
</div>

<!--nav-->
<div id="nav">
    <nav>
        <ul>
            <li><a href="http://mof.cake/home/mof/work"><img src="/resources/views/home/style/img/logo.png"><p>作品</p></a></li>
            <li><a href="http://mof.cake/home/mof/design"><img src="/resources/views/home/style/img/logo.png"><p>设计</p></a></li>
            <li><a href="moftechnology.html"><img src="/resources/views/home/style/img/logo.png"><p>技术</p></a></li>
            <li><a href=""><img src="/resources/views/home/style/img/logo.png"><p>合作</p></a></li>
            <li><a href=""><img src="/resources/views/home/style/img/logo.png"><p>书籍</p></a></li>
        </ul>
    </nav>
</div>
    <?php echo $__env->yieldContent('content'); ?>
<!--联系方式-->
<div id="footer">
    <ul class="footer-ul1">
        <li><a href=""><img src="/resources/views/home/style/img/qq.png"></a></li>
        <li><a href=""><img src="/resources/views/home/style/img/weixin.png"></a></li>
        <li><a href=""><img src="/resources/views/home/style/img/xinlang.png"></a></li>
        <li><a href=""><img src="/resources/views/home/style/img/tie.png"></a></li>
        <li><a href=""><img src="/resources/views/home/style/img/tengxun.png"></a></li>
    </ul>
    <hr>
    <ul class="footer-ul2">
        <li><a href="">关于匠人之心</a></li>
        <li><a href="">研发团队</a></li>
        <li><a href="">加入我们</a></li>
        <li><a href="">联系我们</a></li>
    </ul>
</div>

<!--返回顶部-->
<a href="javascript:;" id="toTop"><img src="/resources/views/home/style/img/toTop.png"></a>

<!--引入js-->
<script type="text/javascript" src="/resources/views/home/style/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/resources/views/home/style/js/jquery.banner.js"></script>
<script type="text/javascript" src="/resources/views/home/style/js/banner.js"></script>
<script type="text/javascript" src="/resources/views/home/style/js/mofhost.js"></script>
<script type="text/javascript" src="/resources/views/home/style/js/mofproduction.js"></script>
</body>
</html>