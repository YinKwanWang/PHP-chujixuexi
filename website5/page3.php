<?php 

   $users = ["name"=>"Henry","email"=>"Henry@gmail.com","age"=>30];

   $users = serialize($users);# 将数组转换为字节流

   setcookie("users",$users,time()+86400);

   $users =  unserialize($_COOKIE['users']);# 反解析
   print_r($users);

 ?>