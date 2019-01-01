<?php
session_start();
include 'user_head1.php';
$id=$_SESSION["eid"];
	$con=mysqli_connect('localhost','root','','que_ans');
	//mysqli_select_db('que_ans',$con);
	//$con=mysqli_connect('aliassurbhi.db.9462939.hostedresource.com','aliassurbhi','Demo5@1212');
	//mysqli_select_db('aliassurbhi',$con);

	$res=mysqli_query($con,"select * from user_tbl where p_u_id='$id'");
	while($row=mysqli_fetch_array($res))
	{
		$name=$row["u_name"];
		$mobile=$row["u_mobile"];
		$gender=$row["u_gender"];
		$photo=$row["u_photo"];
	}
?>

<!DOCTYPE html>
<html>
<head>
<link href="../Content/bootstrap.css" rel="stylesheet" />
    <script src="../Scripts/jquery-1.9.1.js"></script>

<script src="../Scripts/bootstrap.js"></script>
  <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome-->
	<link href="../css/font-awesome.min.css" rel="stylesheet">

	<!-- Pace -->
	<link href="../css/pace.css" rel="stylesheet">

	<!--Endless-->
	<link href="../css/endless.min.css" rel="stylesheet">
	<link href="../css/endless-skin.css" rel="stylesheet">
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/uncompressed/holder.js"></script>
<script src="../js/jquery.slimscroll.min.js"></script>
<script src="../js/modernizr.min.js"></script>
<script src="../js/pace.min.js"></script>
<script src="../js/jquery.popupoverlay.min.js"></script>
<script src="../js/jquery.slimscroll.min.js"></script>
<script src="../js/jquery.cookie.min.js"></script>
<script src="../js/endless/endless.js"></script>






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
								<div class="panel-body">
								<form action="user_edit1.php" method="post">

									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" value="<?php echo $id; ?>" name="txtemail" class="form-control input-sm">
									</div><!-- /form-group -->


									<div class="form-group">
										<label for="exampleInputPassword1">Name</label>
										<input type="text" value="<?php echo $name; ?>" name="txtname" class="form-control input-sm">
									</div><!-- /form-group -->


										<div class="form-group">
										<label for="exampleInputPassword1">MobileNo:</label>
										<input type="text" value="<?php echo $mobile; ?>" name="txtmob" class="form-control input-sm">
									</div><!-- /form-group -->




									<div class="form-group">
								<label class="col-lg-2 control-label">Gender</label>
								<div class="col-lg-10">
									<label class="label-radio inline">
										<input type="radio" value="male" name="txtge" <?php if($gender=="male")echo 'checked'; ?>>
										<span class="custom-radio"></span>
										Male
									</label>
									<label class="label-radio inline">
										<input type="radio" value="female" name="txtge" <?php if($gender=="female")echo 'checked'; ?>>
										<span class="custom-radio"></span>
									Female
									</label>
								</div><!-- /.col -->

								</div><br><br>
								<div class="row">
								<div class="col-md-8 col-md-offset-4">
								<!-- <button type="button" class="btn btn-info btn-sm"><a href="user_profile.php">Back</a></button> -->
								<button type="submit" name="btnsave" class="btn btn-info btn-sm">Submit</button>
								</form>

								</div>
								</div>
										</div>
									</div>
								</div>
									</div>
</body>
</html>
