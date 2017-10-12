<div class="container">
     <?php 
        if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["message"])){
            $name = $_GET["name"];
            $email = $_GET["email"];
            $message = $_GET["message"]; 
            if(!empty($name)&&!empty($email)&&!empty($message)){
                echo $name.":".$email.";".$message;
            }
        }
      ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>联系我们表单提交</title>
	<link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css">
</head>
<body>
 <div class="navbar navbar-default">
    <div class="container">
         <div class="navbar-header">
                <a href="#" class="navbar-brand">联系我们</a>
        </div>   
    </div>
 </div>
    <div class="container">
        <form action="lianxiwomen.php" method="GET">
             <div class="form-group">
                    <label for="">姓名</label> 
                    <input type="text" class="form-control" name="name">
             </div>  
             <div class="form-group">
                     <label for="">邮箱</label>
                     <input type="email" class="form-control" name="email">
             </div> 
             <div class="form-group">
                     <label for="">消息</label>
                     <input type="text" class="form-control input-lg" name="message">
             </div>
             <input type="submit" name="" value="提交" class="btn btn-primary">
        </form>
   </div>
</body>
</html>