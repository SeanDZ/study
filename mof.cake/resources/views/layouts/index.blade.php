@extends('layouts.admin')
@section('content')
		<!--头部 开始-->
<div class="top_box">
	<div class="top_left">
		<div class="logo">莫夫后台管理</div>
	</div>
	<div class="top_right">
		<ul>
			<li>管理员：admin</li>
			<li><a href="{{url('admin/pass')}}" target="main">修改密码</a></li>
			<li><a href="{{url('admin/quit')}}">退出</a></li>
		</ul>
	</div>
</div>
<!--头部 结束-->
		<!--左侧导航 开始-->
		<div class="menu_box">
			<ul>
				<li>
					<h3><i class="fa fa-fw fa-bank"></i>莫夫首页</h3>
					<ul class="sub_menu">
						<li><a href="lst.html" target="main"><i class="fa fa-fw fa-user"></i>会员中心</a></li>
						<li><a href="{{url('admin/middle')}}" target="main"><i class="fa fa-fw fa-photo"></i>首页轮播</a></li>
						<li><a href="{{url('admin/footer')}}" target="main"><i class="fa fa-fw fa-photo"></i>首页图标</a></li>
					</ul>
				</li>
				<!--<li>-->
				<!--<h3><i class="fa fa-fw fa-clipboard"></i>莫夫</h3>-->
				<!--<ul class="sub_menu">-->
				<!--<li><a href="add.html" target="main"><i class="fa fa-fw fa-plus-square"></i>莫夫作品</a></li>-->
				<!--<li><a href="list.html" target="main"><i class="fa fa-fw fa-list-ul"></i>莫夫设计</a></li>-->
				<!--<li><a href="tab.html" target="main"><i class="fa fa-fw fa-list-alt"></i>莫夫技术</a></li>-->
				<!--<li><a href="img.html" target="main"><i class="fa fa-fw fa-image"></i>莫夫合作</a></li>-->
				<!--<li><a href="img.html" target="main"><i class="fa fa-fw fa-image"></i>莫夫书籍</a></li>-->
				<!--</ul>-->
				<!--</li>-->
				<li>
					<h3><i class="fa fa-fw fa-cog"></i>莫夫━━莫夫首页</h3>
					<ul class="sub_menu">
						<li><a href="{{url('admin/mof/image')}}" target="main"><i class="fa fa-fw fa-photo"></i>莫夫首页轮播</a></li>
						<li><a href="{{url('admin/mof/twelve')}}" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫首页图片</a></li>
						<li><a href="{{url('admin/mof/technology')}}" target="main"><i class="fa fa-fw fa-wrench"></i>莫夫首页技术</a></li>
					</ul>
				</li>
				<li>
					<h3><i class="fa fa-fw fa-cog"></i>烘焙学堂</h3>
					<ul class="sub_menu">
						<li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>烘焙1</a></li>
						<li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>烘焙2</a></li>
					</ul>
				</li>
				<li>
					<h3><i class="fa fa-fw fa-cog"></i>料单</h3>
					<ul class="sub_menu">
						<li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>料单1</a></li>
						<li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>料单2</a></li>
					</ul>
				</li>
				<li>
					<h3><i class="fa fa-fw fa-cog"></i>莫夫教室</h3>
					<ul class="sub_menu">
						<li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>教室</a></li>
						<li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>文章</a></li>
					</ul>
				</li>
				<li>
					<h3><i class="fa fa-fw fa-cog"></i>商城</h3>
					<ul class="sub_menu">
						<li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>微店链接</a></li>
						<li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>淘宝链接</a></li>
					</ul>
				</li>
				<li>
					<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
					<ul class="sub_menu">
						<li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
						<li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
						<li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
						<li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--左侧导航 结束-->

<!--主体部分 开始-->
<div class="main_box">
	<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
</div>
<!--主体部分 结束-->

<!--底部 开始-->
<div class="bottom_box">
	CopyRight © 2017. Powered By <a href="http://www.mofcake.com">http://www.mofcake.com</a>.
</div>
<!--底部 结束-->

@endsection


