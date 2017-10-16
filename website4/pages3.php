<?php 
    session_start();
    # 改变SESSION存储的值
    # $_SESSION['name'] = "Hemiah";#赋值改变后台数据
    # 获取 SESSION改变的值
    $name = isset($_SESSION['name'])?$_SESSION['name']:'name属性不存在';
    $email = isset($_SESSION['email'])?$_SESSION['email']:'email属性不存在';
    // print_r($_SESSION);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Pages 3</title>
 </head>
 <body>
 	<h2><?php echo $name; ?></h2>
 	<h2><?php echo $email; ?></h2>
 </body>
 </html>