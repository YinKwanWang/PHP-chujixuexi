<?php 
    # function: 函数 - 具有某一功能的代码块

    /*
       Camel Case - myFunction()小驼峰命名法
       Lower Case - my_function()
       Pascal Case - MyFunction()大驼峰命名法
    */

    // 定义函数 没调用之前在内存中是不存在的
       function SimpleFunction(){
       	   // echo "Hello World!";
       }
       # 调用函数 在php中大小写不敏感
       simpleFunction();

       #有参数无返回值
       function buy($money="20块钱"){
           echo $money."给了，但没给我买东西！拿着钱跑了！";
       }
       // buy("30块钱");
       // buy("10块钱");
       # 传参数比默认值优先级高

       # 多参数 有返回值
       function sumValue($num1,$num2=20){
       	    $sum = $num1 + $num2;
       	    return $sum;
       }
       $m = sumValue(10);
       // echo $m;

       # 无参数 有返回值
       function buyDrink(){
       	   return "饭后的饮料";
       }
       // echo buyDrink();

       # 函数传引用
       $myNum = 10;
       function addFive(&$num){//引用概念 引用后会影响作用域
       	// $myNum = 20;
       	  $num += 5;
       	// echo $num + 5;
       }
       addFive($myNum);//15
       echo $myNum;# 拿到了myNum的引用，改变了内存中的数值所以是15；
 ?>