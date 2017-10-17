<?php 

    function selectDate($sql){
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
        
	    # var_dump($result);
	    if($result->num_rows){
	    	$data = $result->fetch_all(MYSQLI_ASSOC);# 调用查找
	    	# print_r($data)
	    	echo json_encode($data);
	    }
	    # 断开连接
	    $mysqli->close();
    } 
    $sql = "SELECT * FROM customers";
	selectDate($sql);

 ?>