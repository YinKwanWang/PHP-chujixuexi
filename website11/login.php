<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册 & 登录系统</title>
	<link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header>
			<h2 class="text-muted text-center">登录</h2>
		</header>
		<form method="POST" action="login.php">
			<?php include("errors.php"); ?>
			<div class="form-group">
				<label for="">账号</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="">密码</label>
				<input type="password" class="form-control" name="password1">
			</div>
            <input type="submit" value="登录" name="login_user" class="btn btn-success">
            <a href="register.php" class="btn btn-info pull-right">没有账号,请注册</a>
		</form>
	</div>
</body>
</html>