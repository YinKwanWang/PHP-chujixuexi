<?php 

    function deleteDate($sql){
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
	    	echo "删除成功";
	    }else{
	    	echo "删除失败";
	    }
	    # 断开连接
	    $mysqli->close();
    } 
    $sql = "DELETE FROM customers WHERE id = 7";
	deleteDate($sql); 

 ?>