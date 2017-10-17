# php课程代码  分支 lesson-11

### 这节讲的是 ajax 请求是一种异步交互网页开发技术

###  1.实例化xhr 对象 var xhr = new XMLHttpRequest();
###  2.配置对象信息 xhr.open('GET','sample.txt',true);三个参数 type url/file asyn(是否异步)
###  3.执行处理数据的方法 两种方法 
###  在没有进入页面之前 对用户进行引导 xhr.onprogress = function(){}
###  xhr.onload = function(){if(this.status==200){}}
###  xhr.onreadystatechange = function(){if(this.status ==200&&this.readyState==4){}}
###   4.xhr.send()

###   for(var i in users) 遍历用法

###   output += `<ul><li></li></ul>`;ES6中的用法 替换了繁琐的字符创拼接

###   配置信息 中 url参数可以是网址 然后将this.reponseText 解析 

### display : flex; 自适应撑满整行 /*img 可以在里面设置宽高*/

###  // 阻止默认的方法
###		e.preventDefault();

###   重写submit方法 先监听

###   value值拼接到请求路径 process.php?name=

###        post请求里面需要 变量接收 字符串拼接 / var params = "name="+name;

###    POST 请求一定要设置请求头 / send 里面可以给两个参数 一个是null 什么也不传 一个是准备好的参数
###	     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

### 从数据库里拿数据用 GET
         