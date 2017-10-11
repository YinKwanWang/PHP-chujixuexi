<?php 
   
   #语法糖 PHP
   $loggedIn = true;

   $names = ["Henry","Bucky","Emily"];

   if($loggedIn){
   	    echo "U r Logged In";
   }else{
   	    echo "U r NOT Logged In";
   }

   # 三目运算符

   echo ($loggedIn)?"U r Logged In":"U r NOT Logged In";
   
   # 简写得到 true 或者 false

   $isRegistered = ($loggedIn==true)?true:false;
   echo $isRegistered;

   # 三目嵌套

   $age = 180;
   $score = 60;

   echo "You score is".($score > 70 ? ($age < 20 ? "优秀":"一般"):($age < 20 ? "一般":"差等"));
 ?>

 <!-- html + 嵌套语法糖 -->
 <div>
 	<?php if($loggedIn) { ?>
 	<p>Welcome to Beijing!</p>
 	<?php }else{ ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php } ?>
 </div>

 <!--  优化 -->

 <div>
 	<?php if($loggedIn) : ?>
 	<p>Welcome to Beijing!</p>
 	<?php else: ?>
 	<p>Welcome to Zhengzhou!</p>
 	<?php endif; ?>
 </div>

 <!--  遍历数组 foreach -->

 <div>
 	<?php foreach($names as $val): ?>
 		<p><?php echo $val; ?></p>
    <?php endforeach; ?>
 </div>

 <!-- 遍历数组 for -->
 <div>
 	<?php for($i = 0;$i < count($names);$i++): ?>
 		<p><?php echo $names[$i]; ?></p>
 	<?php endfor; ?>
 </div>