<?php

class database
{
public function myconnection()
{
	//database connectivity
	$con=mysqli_connect('localhost','root','','que_ans');
	return $con;
}

//login
public function login($eid,$pass)
{
	$res=mysqli_query($this->myconnection(),"select * from user_tbl where p_u_id='$eid' and u_pass='$pass'");
	return $res;
}

// user signup
public function signup($eid,$name,$pass,$gen,$m_no,$target_file)
{
	$type="user";
	$res=mysqli_query($this->myconnection(),"insert into user_tbl values('$eid','$name','$pass','$gen','$m_no','$target_file','$type')");
	return $res;
}

//insert queries
public function que_insert($qname,$qdes,$qdate,$qeid,$q_img,$q_view,$q_flag)
{
	$res=mysqli_query($this->myconnection(),"insert into que_tbl values(Null,'$qname','$qdes','$qdate','$qeid','$q_img','$q_view','$q_flag')");
	return $res;
}

public function ans_insert($a_detail,$aeid,$adate,$aimg,$aqid)
{
	$alike=0;
	$adislike=0;
	$res=mysqli_query($this->myconnection(),"insert into ans_tbl values(Null,'$a_detail','$aeid','$adate','$aimg','$alike','$adislike','$aqid')");
	return $res;
}


//display data
public function all_que_dis()
{
	$res=mysqli_query($this->myconnection(),"select * from que_tbl");
	return $res;
}

public function all_ans_dis($aqid)
{
	$res=mysqli_query($this->myconnection(),"select * from ans_tbl where f_q_id='$aqid'");
	return $res;
}

public function all_user_dis()
{
	$res=mysqli_query($this->myconnection(),"select * from user_tbl");
	return $res;
}

public function user_dis($eid)
{
	$res=mysqli_query($this->myconnection(),"select * from user_tbl where p_u_id='$eid'");
	return $res;
}

public function que_dis($eid)
{
	$res=mysqli_query($this->myconnection(),"select * from que_tbl where f_q_e_id='$eid'");
	return $res;
}

public function que1_dis($qid)
{
	$res=mysqli_query($this->myconnection(),"select * from que_tbl where p_q_id='$qid'");
	return $res;
}

public function ans_dis($qid)
{
	$res=mysqli_query($this->myconnection(),"select * from ans_tbl where f_q_id='$qid'");
	return $res;
}

public function ans_dis1($aid)
{
	$res=mysqli_query($this->myconnection(),"select * from ans_tbl where p_a_id='$aid'");
	return $res;
}


//delete data
public function user_delete($eid)
{
	$res=mysqli_query($this->myconnection(),"delete from user_tbl where p_u_id='$eid'");
	return $res;
}

public function que_delete($qid)
{
	$res=mysqli_query($this->myconnection(),"delete from que_tbl where p_q_id='$qid'");
	return $res;
}

public function ans_delete($aid)
{
	$res=mysqli_query($this->myconnection(),"delete from ans_tbl where p_a_id='$aid'");
	return $res;
}

//update data
public function user_pro_update($uid,$uname,$ugen,$umob,$uimg)
{
	$res=mysqli_query($this->myconnection(),"update user_tbl set u_name='$uname',u_gender='$ugen',u_mobile='$umob',u_photo='$uimg' where p_u_id='$uid'");
	return $res;
}

public function que_update($qid,$qname,$qdesc,$qimg)
{
	$res=mysqli_query($this->myconnection(),"update que_tbl set q_name='$qname',q_desc='$qdesc',q_image='$qimg' where p_q_id='$qid'");
	return $res;
}

public function ans_update($aid,$adetail,$aimg)
{
	$res=mysqli_query($this->myconnection(),"update ans_tbl set a_detail='$adetail',a_image='$aimg' where p_a_id='$aid'");
	return $res;
}

// public function unans_que()
// {
// 	$res=mysqli_query($this->myconnection(),"select q.*,a.* from que_tbl as q,ans_tbl as a where q.p_q_id!=a.f_q_id");
// 	return $res;
// }

//Extra Queries
public function active_que()
{
	$res=mysqli_query($this->myconnection(),"select * from que_tbl where q_flag='active'");
	return $res;
}

public function upic_dis($qeid)
{
	$res=mysqli_query($this->myconnection(),"select * from user_tbl where p_u_id='$qeid'");
	return $res;
}

public function ans_like($aid,$alike)
{
		$ali=$alike+1;
		$res=mysqli_query($this->myconnection(),"update ans_tbl set a_like='$ali' where p_a_id='$aid'");
		return $res;
}

public function ans_dislike($aid,$adislike)
{
		$adis=$adislike+1;
		$res=mysqli_query($this->myconnection(),"update ans_tbl set a_dislike='$adis' where p_a_id='$aid'");
		return $res;
}

public function user_ques($eid)
{
	$res=mysqli_query($this->myconnection(),"select * from que_tbl where f_q_e_id='$eid'");
	return $res;
}
}
?>
