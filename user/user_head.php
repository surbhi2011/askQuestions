<?php
$eid=$_SESSION["eid"];

require '../database1.php';
$obj=new database();
$res=$obj->user_dis($eid);
while($row=mysqli_fetch_array($res))
{
	$name=$row["u_name"];
	$gender=$row["u_gender"];
	$mobile=$row["u_mobile"];
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

<style id="holderjs-style" type="text/css">

h1
{
	height:16px;
}
.z{
	color:white;
}

a:hover
{
font-size:20px;
}
.font
{
	font-size:40px;
}
.font1
{
	font-size:45px;
	color:white;
}
.s
{
	font-size:45px;
	color:green;
}
.cv
{
		color:white;
	background-image:URL("../img/s1.jpg");
}
.fontclr
{
	font-size:12px;

}
a:hover
{
font-size:20px;
}
.c
{
	background-image:URL("img/s7.jpg");
}
.f
{
	background-color:#D7CCC8;
}

</style>
</head>
<body>
<div class="row" style="background-color:#5D4037;">
<div class="col-md-1">
</div>
<div class="col-md-10">
<h5 align="right"><a class="z" href="user_profile.php">My Profile&nbsp;&nbsp;</a>
<a class="z" href="../logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></h5>
</div>
<div class="col-md-1">
</div>
</div>

<div class="row">
<div class="container">
	<div class="col-mg-12">
<ul class="tab-bar">
<li><a href="user_home.php"><span class="glyphicon glyphicon-home block text-center fa-2x"></span>All</a></li>
<li><a href="user_active.php"><span class="glyphicon glyphicon-flash block text-center fa-2x"></span>Active</a></li>
<li><a href="user_ques.php"><span>Your Questions</span></a></li>
<li class="navbar-right"><a href="ask_que.php"><button class="btn btn-success" type="submit" name="btnsubmit">Ask Your Question</button></a></li>
</ul>
	</div>
</div>
</div>

</body>
</html>
