<?php 
    # if & switch分支 理解为严谨程度
    
    # 关系运算符
    /* > < == != <= === !=== */

    $num = 2;
    /*if($num <=4){
    	echo "num的值一定是小于等于4";
    }*/

    #if else
    if($num >=4){
    	echo "true";
    }else{
    	echo "false";
    }

    # nesting if
    # if嵌套
    $num = 4;
    if($num >=4){
    	if($num<=10){
    		echo "num一定是在4和10 之间";
    	}else{
    		echo "num大于10";
    	}
    }else{
    	echo "num一定小于4";
    }

    #逻辑运算符
    /*
         逻辑与 && AND
         逻辑或 || OR
         逻辑非 ！
         逻辑yi或 XOR
     */
         $num = 3;

         if($num > 2 XOR $num > 10){
         	echo "num 是大于3 并且 小于10";
         }
     /* 
        AND ： 一假既假
        OR: 一真即真
        XOR:只有一个为真，结果才为真 两个都为真即是假的
     */

     #switch
        #条件大于等于4的时候使用switch
        $favColor = "green";
        switch ($favColor) {
        	case 'red'://js中代表===值和类型都要相等  php中不是
        		echo "angry";
        		break;//没有的话会穿透
        	case 'yellow':
        		echo "happy";
        		break;
        	case 'blue':
        		echo "silence";
        		break;
        	case 'green':
        		echo "forfive";
        		break;
        	default:
        		echo "GUN";
        		break;
        }
 ?>