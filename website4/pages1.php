<?php  
    if(isset($_POST['submit'])){
    	// echo 123;
    	session_start();
    	$_SESSION['name'] = $_POST['name'];
    	$_SESSION['email'] = $_POST['email'];

    	header("Location: pages2.php");# 无缝对接
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pages1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="name" placeholder="enter name">
        <input type="text" name="email" placeholder="enter email">
        <input type="submit" value="提交" name="submit">
	</form>
</body>
</html>