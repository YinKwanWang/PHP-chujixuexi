#  php课堂代码 分支 lesson-14

### PHP注册 & 登录系统

### $errors = [];空数组装错误信息

###  if (empty($username)) {
###    		array_push($errors, "用户名不能为空!");
###    	} 错误信息添加进数组


###  $username = mysqli_real_escape_string($db,$_POST['username']);
###    	 $password1 = mysqli_real_escape_string($db,$_POST['password1']
