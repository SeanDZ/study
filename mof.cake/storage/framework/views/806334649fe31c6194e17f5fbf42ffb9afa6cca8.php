<?php $__env->startSection('content'); ?>
		<!--头部 开始-->
<div class="top_box">
	<div class="top_left">
		<div class="logo"><a href="<?php echo e('index'); ?>" style="cursor: pointer">莫夫后台管理</a></div>
	</div>
	<div class="top_right">
		<ul>
			<li>管理员：admin</li>
			<li><a href="<?php echo e(url('admin/pass')); ?>" target="main">修改密码</a></li>
			<li><a href="<?php echo e(url('admin/quit')); ?>">退出</a></li>
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
						<li><a href="<?php echo e(url('admin/middle')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>首页轮播</a></li>
						<li><a href="<?php echo e(url('admin/footer')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>首页图标</a></li>
					</ul>
				</li>

				<li>
					<h3><i class="fa fa-fw fa-cog"></i>莫夫</h3>
					<ul class="sub_menu">
						<li class="sub_ulli1 fa fa-fw fa-cog" style="line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';font-weight: bold;">莫夫首页</li>
						<ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
							<li><a href="<?php echo e(url('admin/mof/image')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>莫夫首页轮播</a></li>
							<li><a href="<?php echo e(url('admin/mof/twelve')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫首页图片</a></li>
							<li><a href="<?php echo e(url('admin/mof/technology')); ?>" target="main"><i class="fa fa-fw fa-wrench"></i>莫夫首页技术</a></li>
						</ol>
                        <li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">莫夫作品</li>
                        <ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
                            <li><a href="<?php echo e(url('admin/mof_work/work')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>莫夫作品</a></li>
                            <li><a href="<?php echo e(url('admin/mof_work/catename')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>分类名称</a></li>
                            <li><a href="<?php echo e(url('admin/mof_work/category')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>作品分类</a></li>
                        </ol>
                        <li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">莫夫技术</li>
                        <ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
                            <li><a href="<?php echo e(url('admin/mof_tech/tech')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫技术图片</a></li>
                        </ol>
						<li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">莫夫设计</li>
						<ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
							<li><a href="<?php echo e(url('admin/mof_design/design')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫设计图片</a></li>
							<li><a href="<?php echo e(url('admin/mof_design/des')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>相关产品图片</a></li>
						</ol>
                        <li class="sub_ulli1 fa fa-fw fa-cog" style="line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';font-weight: bold;">莫夫合作</li>
                        <ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
                            <li><a href="<?php echo e(url('admin/mof/image')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>莫夫首页轮播</a></li>
                            <li><a href="<?php echo e(url('admin/mof/twelve')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫首页图片</a></li>
                            <li><a href="<?php echo e(url('admin/mof/technology')); ?>" target="main"><i class="fa fa-fw fa-wrench"></i>莫夫首页技术</a></li>
                        </ol>
                        <li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">莫夫书籍</li>
                        <ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
                            <li><a href="<?php echo e(url('admin/mof/image')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>莫夫首页轮播</a></li>
                            <li><a href="<?php echo e(url('admin/mof/twelve')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫首页图片</a></li>
                            <li><a href="<?php echo e(url('admin/mof/technology')); ?>" target="main"><i class="fa fa-fw fa-wrench"></i>莫夫首页技术</a></li>
                        </ol>
					</ul>
				</li>
				<li>
					<h3><i class="fa fa-fw fa-cog"></i>烘焙学堂</h3>
					<ul class="sub_menu">
						<li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">烘焙首页</li>
						<ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
							<li><a href="<?php echo e(url('admin/bcake/course')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>首页轮播</a></li>
							<li><a href="<?php echo e(url('admin/bcake/school')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>课程师资</a></li>
						</ol>
						<li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">专业课程</li>
						<ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
							<li><a href="<?php echo e(url('admin/bcake_major/major')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>专业课程</a></li>
							<li><a href="<?php echo e(url('admin/bcake_major/pro')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>课程轮播</a></li>
							<li><a href="<?php echo e(url('admin/bcake_major/profession')); ?>" target="main"><i class="fa fa-fw fa-wrench"></i>课程介绍</a></li>
						</ol>
						<li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">师资力量</li>
						<ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
							<li><a href="<?php echo e(url('admin/mof/image')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>莫夫首页轮播</a></li>
							<li><a href="<?php echo e(url('admin/mof/twelve')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫首页图片</a></li>
							<li><a href="<?php echo e(url('admin/mof/technology')); ?>" target="main"><i class="fa fa-fw fa-wrench"></i>莫夫首页技术</a></li>
						</ol>
						<li class="sub_ulli1 fa fa-fw fa-cog" style="font-weight: bold;line-height:40px;cursor:pointer;width:100px;font-family: 'Microsoft Yahei';">学堂简介</li>
						<ol style="display:none;cursor:pointer;width:200px" class="sub_ulli2">
							<li><a href="<?php echo e(url('admin/mof/image')); ?>" target="main"><i class="fa fa-fw fa-photo"></i>莫夫首页轮播</a></li>
							<li><a href="<?php echo e(url('admin/mof/twelve')); ?>" target="main"><i class="fa fa-fw fa-th-large"></i>莫夫首页图片</a></li>
							<li><a href="<?php echo e(url('admin/mof/technology')); ?>" target="main"><i class="fa fa-fw fa-wrench"></i>莫夫首页技术</a></li>
						</ol>
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
						<li><a href="http://laravel.com" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--左侧导航 结束-->

<!--主体部分 开始-->
<div class="main_box">
	<iframe src="<?php echo e(url('admin/info')); ?>" frameborder="0" width="100%" height="100%" name="main"></iframe>
</div>
<!--主体部分 结束-->

<!--底部 开始-->
<div class="bottom_box">
	CopyRight © 2017. Powered By <a href="http://www.mofcake.com">http://www.mofcake.com</a>.
</div>
<!--底部 结束-->

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>