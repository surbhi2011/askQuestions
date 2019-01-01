<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
.font
{
	font-size:40px;
}
.font1
{
	font-size:30px;
}
.x
{
	font-size:16px;
}
.f
{
	background-color:#D7CCC8;
}


</style>
</head>
<body>
<?php include 'user_head.php'; ?>

<div class="row f">
<div class="container">
<div class="col-md-6">

<br><br>
<div class="panel panel-default">
  <div class="panel-body">
  <?php
										$obj=new database();
										$res=$obj->active_que();
										while($row=mysqli_fetch_array($res))
										{
												echo '<div class="panel panel-default">';
											echo '<div class="panel-body x">';
											echo $row["q_name"];
											echo '</div>';
											echo '</div>';
										}
									?>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>
