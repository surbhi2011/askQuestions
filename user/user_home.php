<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
h1
{
	height:16px;
}

a:hover
{
font-size:20px;
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

<?php include 'user_head.php';?>

	  <div class="row f">
	  <div class="container">
	  <div class="col-md-8">
		 <!-- //displaying all the questions on home page of user.. -->
		 <br>
			<?php
			$ob=new database();
			$re=$ob->all_que_dis();
			while($ro=mysqli_fetch_assoc($re))
			{
					$obj1=new database();
					$res1=$obj1->upic_dis($ro["f_q_e_id"]);
					while($row1=mysqli_fetch_assoc($res1))
					{
							$photo=$row1["u_photo"];
					}
					echo '<div class="panel">
									<div class="panel-body">';


										echo '<div class="media">
											<a class="pull-left" href="#">

											<img src="../'.$photo.'" class="img-rounded" style="height:50px; width:50px;">
											</a>
											<div class="media-heading">';
											echo '<strong class="primary-font" >'.$ro["f_q_e_id"].'</strong>
												<br>

											</div>
											<div class="media-body x"><a href="que_des.php?qid='.$ro["p_q_id"].'">'.$ro["q_name"].'</a>
											</div>
										</div><br>';

											echo '<a href="que_view.php?qid='.$ro["p_q_id"].'"></a>';
									echo	'</div></div>';
			}
								?>
	  </div>

</div>
</div>



</body>
</html>
