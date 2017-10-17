<?php 
   
   # echo "Hello World!";
   // if(isset($_GET['name'])){
   // 	    echo "你的名字是:".$_GET['name'];
   // }
    
    # 1.链接数据库 面向过程的方法 面向对象的方法
     # 四个值 主机名 用户名  服务器密码 数据库名字 
    $conn = mysqli_connect("localhost","root","","ajaxtest");
   
    if(isset($_POST['name'])){
   	   /* echo "你的名字是:".$_POST['name'];*/
   	   $name = $_POST['name'];
   	   # 插入数据库 用sq语句
   	   $query = "INSERT INTO users(name) VALUES('$name')";
   	   # 成功和失败两种结果
   	   $result = mysqli_query($conn,$query);# 返回的要么是1 要么是0
   	   // "set names utf8";
   	    
   	   if ($result) {
   	   	    echo "数据插入成功";
   	   }else{
   	   	    echo "数据插入失败".mysqli_error($conn);
   	   }
   }

 ?>