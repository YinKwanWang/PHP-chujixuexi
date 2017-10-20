<?php 
    
    require("config/config.php");
    require("config/db.php");
    # 编辑博客
    if(isset($_POST['submit'])){
    	$title = mysqli_real_escape_string($conn,$_POST['tittle']);
		$author= mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);

		# 获取到update_id
		$update_id = mysqli_real_escape_string($conn,$_POST['update_id']);
		if(!empty($title)&&!empty($author)&&!empty($body)){
		   	      
		   	      $query = "UPDATE posts set tittle='$title',author='$autor',body='$body' WHERE id = {$update_id}";
                  mysqli_query($conn,"set names utf8");
                  # 执行sql语句
                  if(mysqli_query($conn,$query)){
                  	  header("location:index.php");
                  }else{
                  	   echo "数据更新失败".mysqli_error($conn);
                  }
		   }
    }

    mysqli_query($conn,"set names utf8"); 
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $query = "SELECT * FROM posts WHERE id={$id}";
    # 在执行sql语句前把id拿到
    $result = mysqli_query($conn,$query);
    $post = mysqli_fetch_assoc($result);
    #var_dump($post);
    mysqli_free_result($result);
    mysqli_close($conn);
    

 ?>
<?php include("inc/header.php"); ?>
<div class="container">
	<h2 class="text-muted">编辑博客</h2>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="form-group">
			<label for="">标题</label>
			<input value="<?php echo $post['tittle']; ?>" type="text" name="tittle" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">作者</label>
			<input value="<?php echo $post['author']; ?>" type="text" name="author" class="form-control">	
		</div>

		<div class="form-group">
			<label for="">内容</label>
			<input value="<?php echo $post['body']; ?>" type="text" name="body" class="form-control">	
		</div>
        <input name="update_id" type="hidden" value="<?php echo $post['id']; ?>" >
		<input type="submit" value="确认" name="submit" class="btn btn-primary">
	</form>
</div>
<?php include("inc/footer.php"); ?>