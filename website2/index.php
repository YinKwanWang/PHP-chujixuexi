<?php include "server-info.php" ?><!-- //都在同一个文件里引用过来相当于全部拷贝过来 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>客户端 & 服务器配置信息</title>
	<link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
</head>
<body>
	<!-- container 意味着浏览器两边会有留白 container-fluid 会撑满 -->
	<!-- ul.的样式 list-group  li.样式list-group-item-->
	<!-- .text-muted 针对于所有标签中的文字样式 -->
	<div class="container">
		<h1 class="text-muted">服务器配置信息</h1>
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                    	<strong><?php echo $key; ?>:</strong>
                    	<?php echo $value; ?>
                    </li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<h1 class="text-muted">客户端配置信息</h1>
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>
					<li class="list-group-item">
						<strong><?php echo $key; ?>:</strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</body>
</html>