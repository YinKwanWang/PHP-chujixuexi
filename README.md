# php课程代码 分支 lesson-9

###     session的用法  把输入的内容提交到后台服务器

###     header("Location: pages2.php");# 无缝对接 / 页面跳转

###     <a href="pages3.php">Go to Page 3</a> a 标签跳转

###     session_start();
###   	$_SESSION['name'] = $_POST['name'];
###    	$_SESSION['email'] = $_POST['email']; / 
###     要想使用session   必须先使用session_start();

###     改变SESSION存储的值
###     $_SESSION['name'] = "Hemiah";#赋值改变后台数据
###     获取 SESSION改变的值  先用isset()判断存不存在
###     $name = isset($_SESSION['name'])?$_SESSION['name']:'name属性不存在';

###     unset($_SESSION['name']);# 把单个name值去掉

###     session_destroy();# 会把session里面的所有东西全部干掉 