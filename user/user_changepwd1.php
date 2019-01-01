<?php
	session_start();
	$eid=$_SESSION["eid"];
	$con=mysqli_connect('localhost','root','','que_ans');
	//mysql_select_db('que_ans',$con);
	// $con=mysql_connect('aliassurbhi.db.9462939.hostedresource.com','aliassurbhi','Demo5@1212');
	// mysql_select_db('aliassurbhi',$con);
	//
	$pas=$_POST["txtpass"];
	$res=mysqli_query($con,"select * from user_tbl where p_u_id='$eid' and u_Pass='$pas'");
	$cnt=mysqli_num_rows($res);
	if($cnt==1)
	{
	$passn=$_POST["txtpassn"];
		$passr=$_POST["txtpassr"];
	if($passn==$passr)
	{
		$con=mysqli_connect('localhost','root','','que_ans');
	//mysql_select_db('que_ans',$con);
	// $con=mysql_connect('aliassurbhi.db.9462939.hostedresource.com','aliassurbhi','Demo5@1212');
	// mysql_select_db('aliassurbhi',$con);

	$res=mysqli_query($con,"update user_tbl set u_pass='$passr' where p_u_id='$eid'");
	if($res==1)
	{
		header('location:user_profile.php');
	}
	else
	{
		echo "not updated,please try again";
	}
	}
	}
	else
	{
		echo "wrong old-password";
	}
?>
