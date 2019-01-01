
 <?php

 session_start();
 if(isset($_POST["btnsave"]))
 {

		$eid=$_POST["txtemail1"];
		$pass=$_POST["txtpass1"];

			require 'database1.php';
			$obj=new database();
			$res=$obj->login($eid,$pass);
			while($row=mysqli_fetch_array($res))
			{
				$type=$row["u_type"];
			}
			$cnt=mysqli_num_rows($res);
				if($cnt==1)
					{
						$_SESSION["eid"]=$_POST["txtemail1"];
						if($type=="user")
						{
							header('location:user/user_home.php');
						}
						else if($type == "admin")
						{
							header('location:admin/admin_ho.php');
						}
					}
				else
					{
						echo "invalid";
					}
 }
?>
