<?php 

    # 监听用户是否触发了submit方法
    if(isset($_POST['submit'])){
    	$username = $_POST['username'];

    	setcookie('username',$username,time()+3600);# 当时运行时的时间函数 60*60

    	header("Location: page2.php");
    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="username" placeholder="enter ur name!">
		<input type="submit" value="Submit" name="submit">
	</form>	
</body>
</html>