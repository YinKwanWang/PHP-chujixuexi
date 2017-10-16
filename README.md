# php课程代码 分支 lesson-8

### 验证用户有没有触发submit按钮事件 / filter_has_var(INPUT_POST, 'submit')

### 验证用户输入的内容 是否为空 / !empty($name) && !empty($email) && !empty($message) 

### 验证邮箱是否合法 / filter_var($email,FILTER_VALIDATE_EMAIL)==false

### 判断邮件发送是否成功 / mail($toEmail,$subject,$body,$headers)

### 导航bootstrap 写法 / 
###     <!-- 导航 -->
###	  <nav class="navbar navbar-default">
###		<div class="container">
###			<div class="navbar-header">
###				<a href="index.php" class="navbar-brand">邮件发送</a>
###			</div>
###   </nav>