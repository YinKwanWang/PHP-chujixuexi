<?php 
    // echo "Hello World!"; //相当于js 中的console.log()

    // 单行注释 快捷键：command+/
    #  单行注释 快捷键：shift +3
    
    /* 多行注释
       快捷键：alt + command + /
    */
    
    # variable 变量
       // $output = "Hello World!";
       /*
        变量定义规则：-前缀 $
                   - 以字母/数字/下划线组成
                   - 不能以数字开头
                   - 大小写敏感（大小写是不相同的）
                   - 驼峰命名法
       */
       // echo $output;
    # 数据类型(变量里能存储的东西)
       /*
        String integer(number) Float(浮点类型) Boolean Array Object Resource(函数)
       */
        $output = 22;
        $float = 22.22;
        $bool = true;
        // echo $output;
        // echo $float;
        // echo $bool;
    # 运算符
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2;
        // echo $sum;

    # 字符创拼接
        $string1 = "Hello";
        $string2 = "World";
        // 在php中+就是+ 没有拼接功能
        $greeting = $string1." ".$string2."!";

         # php 中引号的区别
         # 单引号中的内容是单纯的字符串
         # 双引号中的变量可以正常的解析
         // $greeting2 = '$string1 $string2';
         $greeting3 = "$string1 $string2";

    # 转义字符
         $string3 = 'They\'re here';
         $string4 = "They're here";
         // .<br>换行
        echo $string4,"<br>",$string3;
        // 经常使用echo 因为速度快
        printf($string4);
        // <hr> 横线
        echo "<hr>"; 

     # 常量
        define("GREETING", "WhatEver!");
        # 常量的第三个参数为bool，true不区分大小写
        define("GREETING", "What Ever!",true);
        // echo greeting;
        // var_dump 万能打印
        var_dump(greeting);
 ?>
