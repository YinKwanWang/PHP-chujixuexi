<div class="container">
	<?php 
        // echo $_GET["sbqname"];
	    //先判断是否存在 检查sbqname是否能获取到 为了拿到input里面的值
	    /*if(isset($_GET["sbqname"]) && isset($_GET["sbqemail"])){
	    	// echo $_GET["sbqname"];
	    	$name = $_GET["sbqname"];
	    	$email = $_GET["sbqemail"];
	    	echo $name." : ".$email;
	    }
        
	    if(isset($_POST["sbqname"]) && isset($_POST["sbqemail"])){
	    	// echo $_POST["sbqname"];
	    	$name = $_POST["sbqname"];
	    	$email = $_POST["sbqemail"];
	    	// echo $name." : ".$email;
	    	// 在下面判断为空的时候不提交：
	    	if (!empty($name) && !empty($email)) {
	    		echo $name." : ".$email;
	    	}
	    	print_r($_POST);
	    }
	    */
        # $_REQUEST 方法改为GET也可以
        if(isset($_REQUEST["sbqname"]) && isset($_REQUEST["sbqemail"])){
	    	// echo $_REQUEST["sbqname"];
	    	$name = $_REQUEST["sbqname"];
	    	$email = $_REQUEST["sbqemail"];
	    	// echo $name." : ".$email;
	    	// 在下面判断为空的时候不提交： empty()检查一个变量是否为空
	    	if (!empty($name) && !empty($email)) {
	    		echo $name." : ".$email;
	    	}
	    	print_r($_REQUEST);
	    }
        
        # 查询url地址后面的参数
        // echo $_SERVER['QUERY_STRING'];
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- GET&POST 的区别都以？get以拼接的形式传到后台去  post不是以拼接的形式 传的大小也不一样-->
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<!-- 提交到get_post.php  method不写的话默认是GET方法 里面可以小写可以大写 -->
		<form action="get_post.php" method="GET">
			<br>
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="sbqname">
			</div>
            <br>
			<div class="form-group">
				<label for="">Email</label>
				<!-- 会验证是不是email -->
				<input type="email" class="form-control" name="sbqemail">
			</div>
			<br>
			<!-- btn-primary 样式7种中的一种  btn-block 撑满整行样式-->
			<!-- submit 事件是系统写好的提交  如果写的话就是重写事件 -->
            <input type="submit" value="提交" class="btn btn-primary btn-block">
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=王彦昆"; ?>" class = "btn btn-success btn-block">王彦昆</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=本尊"; ?>" class = "btn btn-info btn-block">本尊</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET["name"])): ?>
			     <?php  echo $_GET["name"]; ?>
		         <?php endif; ?>
		</h1>
	</div>
</body>
</html>