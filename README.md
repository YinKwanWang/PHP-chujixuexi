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