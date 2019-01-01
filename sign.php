<?php
session_start();

		$eid=$_POST["txtemail"];
		$name=$_POST["txtname"];
		$pass=$_POST["txtpass"];
		$repass=$_POST["txtrepass"];
		$gen=$_POST["txtgen"];
		$m_no=$_POST["txtmob"];

//for uploading user photo
		$target_dir="img/";
$target_file=$target_dir.basename($_FILES["txtpic"]["name"]);
$target_file=$target_dir.basename();
move_uploaded_file($_FILES["txtpic"]["tmp_name"],$target_file);


		if($pass==$repass)
		{
			require 'database1.php';
			$obj=new database();


			if(count($_POST)>0) {
        //getting the captcha code
				if($_POST["captcha_code"]==$_SESSION["captcha_code"])
				{
						$message = "Your message received successfully";

						$res=$obj->signup($eid,$name,$pass,$gen,$m_no,$target_file);
						if($res==1)
						{
							header('location:index.php');
						}
						else
						{
							echo "not inserted";
						}
				}

			else
			{
				$message = "Enter Correct Captcha Code";
			}
			}
			else{
				echo "signup again";
			}
		}
		else
		{
			echo "confirm yr pw";
		}
?>
