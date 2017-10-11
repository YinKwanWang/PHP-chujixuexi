<?php 
    // echo date(); # 至少要给一个参数
    echo date('d')."<br>"; # day
    echo date('m')."<br>"; #month
    echo date('Y')."<br>"; #year 17 Year 2017
    echo date('l')."<br>"; # day of week

    echo date('Y/m/d')."<br>"; #年 月 日
    echo date('d-m-Y')."<br>"; #日 月 年

    # 时分秒
    echo date('h')."<br>"; #hour
    echo date('i')."<br>"; #minutes
    echo date('s')."<br>"; #seconds
    echo date('a')."<br>"; #AM or PM

    # 设置时区
    date_default_timezone_set("Asia/ShangHai");
    echo "<hr>";
    echo date("h:i:sa"); 

    # mktime
    $timestamp = mktime(07,00,12,1,24,1988);
    echo "<hr>";
    echo $timestamp;

    echo "<hr>";
    # 完整的时间
    echo date("m/d/Y h:i:sa",$timestamp);

     echo "<hr>";
    # 字符串转时间
    $timestamp2 = strtotime("7:00pm March 22 2016");//时间戳
    echo date("m/d/Y h:i:sa",$timestamp2);

    echo "<hr>";
    $timestamp3 = strtotime("tomorrow");//时间戳
    echo date("m/d/Y h:i:sa",$timestamp3);

    echo "<hr>";
    $timestamp4 = strtotime("next sunday");//时间戳
    echo date("m/d/Y h:i:sa",$timestamp4);

    echo "<hr>";
    $timestamp5 = strtotime("+2 Days");//时间戳
    echo date("m/d/Y h:i:sa",$timestamp5);
 ?>