<?php 
    # 链接数据库
    $conn = mysqli_connect("localhost","root","","ajaxtest");

    # 查询 从哪个表里拿数据
    $query = "SELECT * FROM users";
    
    # 执行 数据
    $result = mysqli_query($conn, $query);

    mysql_query("set names 'utf8'");
    # 我们拿到的是个数组 以什么形式返回
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);# 代表关联  MYSQLI_NUM 代表number

    echo json_encode($users); # 数组转为json

 ?>