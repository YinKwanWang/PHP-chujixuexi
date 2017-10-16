# php课程代码 分支 lesson-10

###  PHP 中cookie的用法

###  setcookie('username',$username,time()+3600);# 当时运行时的时间函数 60*60
###  3600秒 一小时

###    想改变cookie里面的值 需重新设置cookie (重新赋值)
###    setcookie('username','Franch',time()+86400);

###    删除cookie 减代表过去的时间
###    setcookie('username','sssa',time()-3600);

###    $users = serialize($users); 将数组转换为字节流

###    setcookie("users",$users,time()+86400);

###    $users =  unserialize($_COOKIE['users']);# 反解析