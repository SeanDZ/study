<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo e(asset('resources/views/admin/style/css/ch-ui.admin.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('resources/views/admin/style/font/css/font-awesome.min.css')); ?>">
</head>
<body style="background:#cccc99;">
	<div class="login_box">
		<h1>Mofcake</h1>
		<h2>莫夫内容管理平台</h2>
		<div class="form">
			<?php if(session('msg')): ?>
			<p style="color:red"><?php echo e(session('msg')); ?></p>
			<?php endif; ?>
			<form action="" method="post">
				<?php echo e(csrf_field()); ?>

				<ul>
					<li>
					<input type="text" name="user_name" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="user_pass" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa  fa-check-square"></i></span>
						<img src="<?php echo e(url('admin/code')); ?>" alt="" onclick="this.src='<?php echo e(url('admin/code')); ?>?'+Math.random()">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">匠人之心</a> &copy; 2017 Powered by <a href="http://www.mofcake.com" target="_blank">http://www.mofcake.com</a></p>
		</div>
	</div>
</body>
</html>