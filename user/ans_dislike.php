<?php
  $id=$_REQUEST['id'];

  include '../database1.php';
	$obj=new database();
	$res=$obj->ans_dis1($id);
  while($row1=mysqli_fetch_assoc($res))
  {
      $adislike=$row1["a_dislike"];
	  //header('location:user_home.php');
    $ob=new database();
  	$re=$ob->ans_dislike($id,$adislike);
    if($re==1)
    {
        header('location:que_des.php?qid='. $row1["f_q_id"]);
    }
    else {
      echo 'error';
    }
  }
?>
