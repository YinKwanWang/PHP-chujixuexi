<?php 
    # loops : 循环 高效 -让项目制作的更高效
    
    # 根据某个条件，重复执行某段代码
    /*
      - For
      - While
      - Do...While
      - Foreach
    */

    # For 循环
    # @params - init,condition,inc 参数: 变量 ，条件 ，自增
      for ($i=0; $i < 10; $i++) { //只会初始化一次 栈区 堆区 代码区 变量区 常量区 
      	   // echo ($i+1)."<br>";
      }
    # While 循环
    # @params - condition 
      // $i = 0;
      // while ( $i<= 10) {
      // 	// echo $i."<br>";
      // 	// $i++;
      // }
    # 当我知道循环次数的时候使用For 当不知道循环次数用While
    # 当查重的时候 外面使用while 循环 里面用for循环

    # Do While循环
    # @params - condition//在条件不成立的时候执行一下
    //   $i = 0;
    //   do{
		  // echo $i."<br>";
		  //         $i++;
    //   }while ($i <= 10); 
    # foreach 循环 下标数组
      // $people = array("Henry","Bucky","Emily");
      // foreach ($people as $person) {
      // 	      echo $person."<br>";
      // 	      // echo "<br>";
      // }
    # foreach 循环 关联数组
      $people = array(
                 "Henry"=>"henry@gmail.com",
                 "Bucky"=>"bucky@gmail.com",
                 "Emily"=>"emily@gmail.com"
      );
      foreach ($people as $key => $value) {
      	   echo $key.":".$value."<br>";
      	   // echo ;
      }
    /* 
       练习1.

       打印1~100之间7的倍数
       打印1~100之间个位为7的数
       打印1~100之间十位为7的数
       打印1~100之间个位不为7，十位不为7，以及不是7的倍数

       练习2.
       
       打印九九乘法表
    */
 ?>