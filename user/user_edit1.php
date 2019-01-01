<?php
	if(isset($_POST["btnsave"]))
	{
	$id=$_POST["txtemail"];
	$name=$_POST["txtname"];
	$mobile=$_POST["txtmob"];
	$gender=$_POST["txtge"];

	$con=mysqli_connect('localhost','root','','que_ans');
	//mysql_select_db('que_ans',$con);
	// $con=mysql_connect('aliassurbhi.db.9462939.hostedresource.com','aliassurbhi','Demo5@1212');
	// mysql_select_db('aliassurbhi',$con);

	$res=mysqli_query($con,"update user_tbl set u_name='$name',u_mobile='$mobile',u_gender='$gender' where p_u_id='$id'");
	if($res==1)
	{
		header('location:user_profile.php');

	}
	else
	{
		echo "not updated";
	}
	}
?>
