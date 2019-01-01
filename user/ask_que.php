<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>

<?php include 'user_head.php';?>

<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-8">
<?php
if(isset($_POST["btnsave"]))
{

	//getting input values
	$qeid=$_SESSION["eid"];
	$qname=$_POST["txtname"];
	$qdes=$_POST["txtdes"];
	$qdate=date('y/m/d');
	$q_img=$_POST["txtpic"];
	$q_view=0;
	$q_flag='active';

	$target_dir="img/";
$target_file=$target_dir.basename($_FILES["txtpic"]["name"]);
//$target_file=$target_dir.basename();
move_uploaded_file($_FILES["txtpic"]["tmp_name"],$target_file);

	$obj=new database();
	//calling function for inserting data
	$res=$obj->que_insert($qname,$qdes,$qdate,$qeid,$target_file,$q_view,$q_flag);
	if($res==1)
	{
		//successfully inserted
		header('location:user_ques.php');
	}
	else
	{
		//not inserted
		echo "something went wrong";
	}
}
?>

<div class="panel-body">
				<form class="form-horizontal" enctype="multipart/form-data" action="ask_que.php" method="post">


									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Name</label>
										<div class="col-lg-10">
											<input type="text" name="txtname" class="form-control input-sm"  placeholder="Enter Name">
										</div>
									</div>

									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Description</label>
										<div class="col-lg-10">
											<input type="text" name="txtdes" class="form-control input-sm"  placeholder="Enter Description">
										</div>
									</div>

									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Photo</label>
										<div class="col-lg-10">
											<input type="file" name="txtimg" class="form-control input-sm" >
										</div>
</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<a href="user_home.php"><button type="button" class="btn btn-info btn-sm">BACK</button></a>
											<button type="submit" name="btnsave" class="btn btn-info btn-sm">SAVE CHANGES</button>
										</div>
									</div>
								</form>
							</div>

</div>
<div class="col-md-1">
</div>
</div>
</body>
</html>
