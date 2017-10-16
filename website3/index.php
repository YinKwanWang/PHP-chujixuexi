<?php 
    $msg = "";
    $msgClass = "";
    # 验证用户有没有触发submit按钮事件
   if (filter_has_var(INPUT_POST, 'submit')) {
   	   // echo "123";
   	   # 拿到需要的内容
   	   $name = $_POST['name'];
   	   $email = $_POST['email'];
   	   $message = $_POST['message'];

   	   # 验证用户输入的内容 是否为空
   	   if(!empty($name) && !empty($email) && !empty($message)){
   	   	    #pass

   	   	    # 验证邮箱是否合法
   	   	    if (filter_var($email,FILTER_VALIDATE_EMAIL)==false) {
   	   	    	$msg = "请输入正确的邮箱";
                $msgClass = "alert-danger";
   	   	    }else{
               # 合法
   	   	       $toEmail = '549574268@qq.com';
   	   	       $subject = '本周五BJH170705外出拓展';
   	   	       $body = "<h2>BJH170705每个周五外出拓展</h2>".
            			"<h4>姓名: ".$name."</h4>
            			<h4>邮箱: ".$email."</h4>
            			<h4>信息: ".$message."</h4>";
   	   	        // 当发送 HTML 电子邮件时，请始终设置 content-type
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "发自：".$name."<".$email.">"."\r\n";
				# 判断邮件发送是否成功
				if(mail($toEmail,$subject,$body,$headers)){
					$msg = "邮件发送成功";
					$msgClass = "alert-success";
				}else{
					$msg = "邮件发送失败";
					$msgClass = "alert-danger";
				}
   	   	    }
   	   }else{
            $msg = "请输入对应的内容";
            $msgClass = "alert-danger";
   	   }
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Mail Sender</title>
	<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
	<!-- 导航 -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">邮件发送</a>
			</div>
		</div>
	</nav>
	<!-- form -->
	<div class="container">
        <!-- 友情提示 -->
        <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="form-group">
				<label for="">姓名</label>
				<input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : '' ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="">邮箱</label>
				<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="">信息</label>
				<textarea name="message" class="form-control" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
			</div>
			<button type="submit" name="submit" class="btn btn-info ">发送</button>
		</form>
	</div>
</body>
</html>