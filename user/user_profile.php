
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
.b{
	height:200px;
	width:200px;

	color:pink;
}

</style>
</head>
<body>



<div class="row f">
<div class="container">
						<div class="col-xs-6 col-sm-12 col-md-6 text-center"><br><br><br><br>
								<a href="#">
									<img src="../<?php echo $photo; ?>" class="img-circle b">
								</a>


							</div><!-- /.col --><br><br><br><br>
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font"><?php echo $name; ?></strong> <br>
								<small class="block font">
									<?php echo $eid; ?>
								</small> <br>
								<small class="block font">
									<?php echo $gender; ?>
								</small> <br><small class="block font">
									<?php echo $mobile; ?>
								</small> <br>
								<div class="seperator"></div>

								<div class="seperator"></div>
								<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-connect tooltip-test google-plus-hover pull-left" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div>
						</div>
			</body>
			</html>
