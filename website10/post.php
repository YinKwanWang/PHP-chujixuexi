<?php 
  
   # 根据id请求数据库
  require("config/config.php");
  require("config/db.php");
   # 删除单条博客
   if(isset($_POST['delete'])){
      // echo "string";
       # sql语句
      $delete_id=mysqli_real_escape_string($conn,$_POST['delete_id']);
       // var_dump($delete_id);
      $query = "DELETE FROM posts WHERE id ={$delete_id}";
       if(mysqli_query($conn,$query)){
             header("location: index.php");
       }else{
             echo "error".mysqli_error($conn);
       }
     }
   # 查询单条博客
   mysqli_query($conn,"set names utf8");
   # $id = $_GET['id'];
   # 拿到id的方法 / mysql_real_escape_string() 函数转义 SQL 语句中使用的字符串中的特殊字符。
   $id = mysqli_real_escape_string($conn,$_GET['id']);
   $query = "SELECT * FROM posts WHERE id={$id}";
   # 在执行sql语句前把id拿到
   $result = mysqli_query($conn,$query);
   $post = mysqli_fetch_assoc($result);
   #var_dump($post);
   mysqli_free_result($result);
   mysqli_close($conn);
 ?>
 <?php require("inc/header.php"); ?>
 	<div class="container">
 		<h1>博客详情</h1>
        	<div class="well">
        		<a class="btn btn-info" href="<?php echo ROOT_URL; ?>">返回主页</a>
        		<h3><?php echo $post['tittle']; ?></h3>
        		<p>
        			<strong>ID:</strong>
        			<?php echo $post['id']; ?>
        		</p>
        		<p>
        			<strong>作者:</strong>
        			<?php echo $post['author']; ?>
        		</p>
        		<p>
        			<strong>时间:</strong>
        			<?php echo $post['created_at']; ?>
        		</p>

        		<p>
        			<?php echo $post['body']; ?>
        		</p>
            <br>

            <!-- 请求需要接口 要用form -->
            <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <!-- input hidden 不显示 -->
              <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
              <input type="submit" value="删除" name="delete" class="btn btn-danger">
            </form>

            <a class="btn btn-info" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" >编辑</a>
        	</div>
 	</div>
  <?php require("inc/footer.php"); ?> 