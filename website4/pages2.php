<?php 

    session_start();

    # 要想使用session 必须先使用session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Pages2</title>
 </head>
 <body>
 	<h2>你的名字是：<?php  echo $name; ?></h2>
 	<a href="pages3.php">Go to Page 3</a>
 </body>
 </html>