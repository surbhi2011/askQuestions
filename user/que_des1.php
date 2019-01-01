
<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="row">
<div class="container">

<?php
include 'user_head.php';

//getting data from session
$aeid=$_SESSION["eid"];
//data from query string
$qid=$_REQUEST["qid"];

			$aimg="null";
			$adate=date('y/m/d');
			$a_detail=$_POST["txtans1"];

			//require '../database1.php';
			$obj2=new database();
			$res2=$obj2->ans_insert($a_detail,$aeid,$adate,$aimg,$qid);

			if($res2==1)
			{
				echo "<center>";
				echo '<font size="18" face="Arial">';
				echo "Your answer successfully posted";
				echo "</font></center>";

			}
			else
			{
				echo "Not Inserted Please Try Again";
			}
?>
</div>
</div>
<div class="row">
<div class="col-md-8">
</div>
<div class="col-md-4">
<a href="que_dis.php?qid=<?php $qid;?>"><button class="btn btn-success" type="button" name="btnback" value="back">BACK</button></a>
</div>
</div>
<br><br><br><br><br>

</body>
</html>
