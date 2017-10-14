# php课程代码 分支lesson-5

### PHP 中Date时间的用法
###    date(format)至少给一个参数
###          Y/m/d  
###          d-m-Y 
###          h i s 时分秒
###          a 代表上午下午
###          date_default_timezone_get("Asia/ShangHai"); 设置时区
###          $timestamp = mktime(07,00,12,1,24,1988); 设置时间
###          字符串转时间
###            echo "<hr>";
###      +    $timestamp3 = strtotime("tomorrow");//时间戳
###      +    echo date("m/d/Y h:i:sa",$timestamp3);
###      
###     +    echo "<hr>";
###      +    $timestamp4 = strtotime("next sunday");//时间戳
###      +    echo date("m/d/Y h:i:sa",$timestamp4);
###     +
###      +    echo "<hr>";
###      +    $timestamp5 = strtotime("+2 Days");//时间戳
###     +    echo date("m/d/Y h:i:sa",$timestamp5);
###          date("m/d/Y h:i:sa",$timestamp)  完整的时间
