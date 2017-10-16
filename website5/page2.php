<?php 
    # 想改变cookie里面的值 需重新设置cookie (重新赋值)
    setcookie('username','Franch',time()+86400);

    # 删除cookie
    setcookie('username','sssa',time()-3600);

    if (count($_COOKIE)>0) {
    	echo "一共有".count($_COOKIE)."个"."COOKIE";
    }else{
    	echo "没有设置任何COOKIE";
    }

    // $_COOKIE['username'] 赋值给cookie
    if (isset($_COOKIE['username'])) {
    	echo "你的用户名是：".$_COOKIE['username'];
    }else{
    	echo "用户名不存在！";
    }

 ?>