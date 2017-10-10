<?php 
    
    # array: 数组 有效的控制资源 - 存储一堆数据的集合
   
    /*
       数组分为两种：下标数组： 下标以0 开始

                   关联数组： 以第一个名字开头
    */

    # 下标数组
             // $people = array("Kevin","Henry","Hemiah");
             
             // echo $people[1];//只能打印单一的不能打印数组
             // echo $people[3];//数组越界

             // $ids = [23,56,42];

             // echo $ids[2];

             $cars = ["Honda","Toyota","BYD"];
             // 给数组赋值
             // $cars[3] = "BWM";
             // echo $cars[3];

             // echo count($cars);//打印数组里面的个数方法

             #打印数组的方法
             // print_r($cars);
             #万能打印方法
             // var_dump($cars);

    # 关联数组
                   $people = array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
                   // echo $people["Emily"];

                   $ids = [22=>"Henry",25=>"Bukcy"];
                   // echo $ids[22];//打印结果是22后面关联的值

                   $ids[35] = "Emily";
                   // echo $ids[35];
                   // print_r($ids)//打印数组中所有的值

                   //观察
                   $cars[]="Bence";//如果数组中都是字符串 则添加到最后
                   $ids[]="John";//如果数组关联数组 
                   // print_r($ids);
                   // print_r($cars);
                   $people[]=55;
                   print_r($people[0]);

                   #多维数组
                   $cars = array(
                        array("Honda",20,10),
                        array("dz",20,20),
                        array("Ford",15,10)
                   );
                   echo $cars[2][1];

 ?>