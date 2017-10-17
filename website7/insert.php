<?php 

    /*操作数据库
    * 1. 连接数据库
    * 2.执行sql语句
    * 3.获取数据并使用
    * 4.断开连接

    */
    
    function insertDate($sql){
	    # 连接数据库
	    $mysqli = new mysqli("localhost","root","","people");
	    # 测试是否连接成功 只要不是0 连接失败
	    # 这个是检查PHP是否连接上MYSQL，就是一个判断函数
	    if($mysqli->connect_errno){
	       die($mysqli->connect_error);
	    }
	   
	    # 设置utf8
	    $mysqli->query("set names utf8");

	    # 执行sql 语句
	    $result = $mysqli->query($sql);
	    
	    if($result){
	    	echo "插入成功";
	    }else{
	    	echo "插入失败";
	    }

	    # 断开连接
	    $mysqli->close();

    } 
    # 准备sql语句
	$sql = "INSERT INTO customers(name,email,address,city,state) VALUES('xinxin','xx@gmail.com','定泗路','北京','昌平区')";
	insertDate($sql);
	    
 ?>