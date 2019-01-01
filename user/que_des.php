<?php
session_start();
$aeid=$_SESSION["eid"];

$qid=$_REQUEST["qid"];
?>

<!DOCTYPE html>
<html>
<head>

<link href="../Content/bootstrap.css" rel="stylesheet" />
<script src="../Scripts/jquery-1.9.1.js"></script>
<script src="../Scripts/bootstrap.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="../css/font-awesome.min.css" rel="stylesheet">

	<!-- Pace -->
	<link href="../css/pace.css" rel="stylesheet">

	<!-- Chosen -->
	<link href="../css/chosen/chosen.min.css" rel="stylesheet">

	<!-- Datepicker -->
	<link href="../css/datepicker.css" rel="stylesheet">

	<!-- Timepicker -->
	<link href="../css/bootstrap-timepicker.css" rel="stylesheet">

	<!-- Slider -->
	<link href="../css/slider.css" rel="stylesheet">

	<!-- Tag input -->
	<link href="../css/jquery.tagsinput.css" rel="stylesheet">

	<!-- WYSIHTML5 -->
	<link href="../css/bootstrap-wysihtml5.css" rel="stylesheet">

	<!-- Dropzone -->
	<link href="../css/dropzone/dropzone.css" rel="stylesheet">

	<!-- Endless -->
	<link href="../css/endless.min.css" rel="stylesheet">
	<link href="../css/endless-skin.css" rel="stylesheet">



	<link href="../Admin11/fonts/fontawesome-webfontba72.ttf" rel="stylesheet" />

	<script src="../js/wysihtml5-0.3.0.min.js"></script>
	<script src="../js/uncompressed/bootstrap-wysihtml5.js"></script>
	<style>
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
<div class="col-md-8">
<br>

		<?php

			//require '../database1.php';
			$obj=new database();
			$res=$obj->que1_dis($qid);
			while($row=mysqli_fetch_array($res))
			{




				$obj1=new database();
					$res1=$obj1->upic_dis($row["f_q_e_id"]);
					while($row1=mysqli_fetch_assoc($res1))
					{
							$photo=$row1["u_photo"];
					}

				echo '<div class="chat-message">
						<ul class="chat">
							<li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="../'.$photo.'" alt="User">
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="primary-font">';
										echo $row["f_q_e_id"].'</strong>
									</div>
									<p class="x">';
									echo $row["q_name"].'
									</p>

									<p class="x">';
									echo '<img src="../'.$row["q_image"].'">';
									echo '</p>

								</div>
							</li></ul></div>';

			}

			$obj1=new database();
			$res1=$obj1->ans_dis($qid);
			while($row=mysqli_fetch_array($res1))
			{

					$obj2=new database();
					$res2=$obj2->upic_dis($row["f_a_e_id"]);
					while($row2=mysqli_fetch_assoc($res2))
					{
							$photo1=$row2["u_photo"];
					}

						echo	'<div class="chat-message">
						<ul class="chat">

					<li class="right clearfix">
								<span class="chat-img pull-right">
									<img src="../'.$photo1.'" alt="User">
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="primary-font">'.$row["f_a_e_id"].'</strong>
									</div>
                  <div>
                  <a href="ans_like.php?id='.$row["p_a_id"].'"><span class="glyphicon glyphicon-thumbs-up fa-2x" aria-hidden="true"></span></a>
                  <div>'.$row["a_like"].' likes</div>
                  <a href="ans_dislike.php?id='.$row["p_a_id"].'"><span class="glyphicon glyphicon-thumbs-down fa-2x" aria-hidden="true"></span></a>
                  <div>'.$row["a_dislike"].' dislikes</div>
                  </div>

									<p class="x">
											'.$row["a_detail"].'
									</p>
								</div>
							</li>


						</ul>
					</div>';


			}
		?>
		</table>
	</div>
</div>


<div class="row">
<div class="container">
<div class="col-lg-8">






<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Your Post</h3>
  </div>
  <div class="panel-body">
 <form action="que_des1.php?qid=<?php echo $qid;?>" method="post">
	<ul class="wysihtml5-toolbar"><li class="dropdown"><a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" href="javascript:;" unselectable="on">Heading 4</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" href="javascript:;" unselectable="on">Heading 5</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" href="javascript:;" unselectable="on">Heading 6</a></li></ul></li><li><div class="btn-group"><a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-bold"></i></a><a class="btn btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-italic"></i></a><a class="btn btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-text-color"></i></a></div></li><li><div class="btn-group"><a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-list"></i></a><a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-menu-hamburger"></i></a><a class="btn btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-indent-right"></i></a><a class="btn btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on"><i class="glyphicon glyphicon-indent-left"></i></a></div></li></ul>

<textarea class="form-control" rows="6" name="txtans1" id="txtans1" placeholder="Enter your text ...">

</textarea>


<iframe class="wysihtml5-sandbox" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: none; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 6px 12px; z-index: auto; vertical-align: baseline; text-align: start; box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; border-radius: 4px; width: 550.563px; height: 116px; top: auto; left: auto; right: auto; bottom: auto; background-color: rgb(255, 255, 255);"></iframe>


<input type="submit" class="btn btn-warning" name="btnins" value="POST" />


	</form>
  </div>
</div>
</div>


</div>
</div>

</body>
</html>
