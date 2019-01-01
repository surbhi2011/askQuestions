
<?php
 include 'user_head1.php';

session_start();
$eid=$_SESSION["eid"];

require '../database1.php';
$o=new database();
$r=$o->user_dis($eid);
while($w=mysqli_fetch_array($r))
{
	$name=$w["u_name"];
	$gender=$w["u_gender"];
	$mobile=$w["u_mobile"];
	$photo=$w["u_photo"];
}


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
.o
{
	height:200px;
	width:200px;
}
.f
{
	background-color:#D7CCC8;
}

</style>
</head>
<body>

<div class="row f">
<div class="container">
<div class="col-xs-6 col-sm-12 col-md-6 text-center"><br><br><br><br>
								<a href="#">
									<img src="../<?php echo $photo; ?>" class="img-circle o">
								</a>
								</div>


								<div class="col-xs-6 col-sm-12 col-md-6">
			<br><br><br><br>
<div class="panel-body">
								<form class="form-horizontal" action="user_changepwd1.php" method="post">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Current password</label>
										<div class="col-lg-10">
											<input type="password" name="txtpass" class="form-control input-sm"  placeholder="password">
										</div><!-- /.col -->
									</div><!-- /form-group -->

									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">New Password</label>
										<div class="col-lg-10">
											<input type="password" name="txtpassn" class="form-control input-sm"  placeholder="New Password">
										</div><!-- /.col -->
									</div><!-- /form-group -->

									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">ReNew Password</label>
										<div class="col-lg-10">
											<input type="password" name="txtpassr" class="form-control input-sm"  placeholder="ReNew Password">
										</div><!-- /.col -->
									</div><!-- /form-group -->


									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-info btn-sm">BACK</button>
											<button type="submit" name="btnsave" class="btn btn-info btn-sm">SAVE CHANGES</button>
										</div><!-- /.col -->
									</div><!-- /form-group -->
								</form>
							</div>
								</div>
									</div>
							</body></html>
