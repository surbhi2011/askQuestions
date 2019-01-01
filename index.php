<?php
session_start();
//require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>

<link href="Content/bootstrap.css" rel="stylesheet" />
<script src="Scripts/jquery-1.9.1.js"></script>
<script src="Scripts/bootstrap.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome-->
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- Pace -->
	<link href="css/pace.css" rel="stylesheet">

	<!--Endless-->
	<link href="css/endless.min.css" rel="stylesheet">
	<link href="css/endless-skin.css" rel="stylesheet">
<script src="js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/uncompressed/holder.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/jquery.popupoverlay.min.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.cookie.min.js"></script>
<script src="js/endless/endless.js"></script>

<style id="holderjs-style" type="text/css">
.font
{
	font-size:40px;
}
.q{
	height:300px;
	width:800px;
}
.font1
{
	font-size:45px;
	color:white;
}
.cv
{
	color:green;
	background-image:URL("img/s1.jpg");
}
.fontclr
{
	font-size:12px;

}
.fontclr1
{
	font-size:20px;

}

a:hover
{
font-size:20px;
}
.c
{
	background-image:URL("img/s7.jpg");
}
.f
{
	background-color:#D7CCC8;
}
.v{
	height:100px;
	width:100px;
}
</style>
<script type="text/javascript">


function mobile_valid(uid,mx,my)
{
	var ul=uid.value.length;
		if(ul>=my)
	{
		alert("mobile_no should not be empty/length must be between "+mx+" to "+my);
		uid.focus();
		return false;
	}
	return true;
}


function validatePassword(fld) {
    var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers

    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a password.\n";
        alert(error);
        return false;

    } else if ((fld.value.length < 7) || (fld.value.length > 15)) {
        error = "The password is the wrong length. \n";
        fld.style.background = 'Yellow';
        alert(error);
		fld.value="";
		fld.focus();
        return false;

    } else if ( (fld.value.search(/[a-zA-Z]+/)==-1) || (fld.value.search(/[0-9]+/)==-1) ) {
        error = "The password must contain at least one numeral.\n";
        fld.style.background = 'Yellow';
        alert(error);
        return false;

    } else {
        fld.style.background = 'White';
    }
   return true;
}


function allLetter(uname)
{
	var letters=/^[A-Za-z]+$/;
	if(uname.value.match(letters))
	{
			return true;
	}
	else
	{
			alert('username must have alphabetic charcters only');
			uname.focus();
			return false;
	}
}

function allnumeric(uzip)
{
		var numbers=/^[0-9]+$/;
		if(uzip.value.match(numbers))
		{
			return true;
		}
		else
		{
				alert('Mobile_no must have numeric characters only');
				uzip.value="";
				uzip.focus();
				return false;

		}
}

function validate_email(field,alerttxt)
{
    with (field)
    {
        apos=value.indexOf("@");
        dotpos=value.lastIndexOf(".");
        if (apos<1||dotpos-apos<2){
            alert(alerttxt);return false;
        }
        else {
            return true;
        }
    }
}
</script>
</head>
<body>
<div class="row cv">
<div class="row">
<div class="container">


</div>
</div>


<div class="row">
<div class="container">
<h6 align="right">
<div class="btn-group" id="accordion">
<a class="btn btn-primary" role="tab" type="button" data-parent="#accordion" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
  SignUp
</a>



<a class="btn btn-primary" role="tab" type="button" data-parent="#accordion" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
 Log In
</a>

</h6>
</div>
</div>



<div class="collapse f" id="collapseExample2">
<div class="row">
	<div class="container">
	  <div class="row">

	<div class="panel-body">

		<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
	 <div class="col-xs-6 col-md-3">
    <a href="#">
      <img src="img/user1.jpg" class="img-circle">
    </a>
	</div>
		</div>
			</div>
		<div class="col-xs-6 col-sm-12 col-md-6 col-ms-offset-3">
	<div class="panel-body">
	<form class="form-horizontal" action="log.php" method="post" name="form1">

									<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
            <label for="recipient-name" class="control-label" aria-describedby="sizing-addon2"><span class="glyphicon glyphicon-user" aria-hidden="true" id="basic-addon2"></span>Email ID</label>
			<div class="input-group">
			<input type="email" class="form-control" name="txtemail1" placeholder="Email Id" Onblur="return validate_email(document.form1.txtemail1,'Please Enter a valid email address');" aria-describedby="basic-addon2" >
			<span class="input-group-addon" id="basic-addon2">Xyz@abc.com</span>
			</div>
	                               </div>
									</div>

	<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
	 <label for="recipient-name" class="control-label">PassWord</label>
		   <div class="input-group">
			<span class="input-group-addon" id="sizing-addon2">***</span>
			<input type="password" class="form-control" name="txtpass1" placeholder="Password" Onblur="return validatePassword(document.form2.txtpass1);" aria-describedby="sizing-addon2"  />
		   </div>
	</div>
</div>



 <div class="form-group">
	<!-- <div class="col-lg-offset-8 col-lg-10">
	 <a class="control-label" href="user/user_forgotpwd.php">FORGET PASSWORD</a>
	 </div> -->
</div>

   <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="btnsave" class="btn btn-info">LOG IN</button>
    </div>


	</form>
</div>
</div>

</div>
	</div>
	</div>
	</div>
	</div>
	</div>


<div class="collapse f" id="collapseExample1">
<div class="row">
	<div class="container">
	  <div class="row">

	<div class="panel-body">

	<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
	 <div class="col-xs-6 col-md-3">
    <a href="#">
      <img src="img/user1.jpg" class="img-circle">
    </a>
	</div>
		</div>
			</div>
		<div class="col-xs-6 col-sm-12 col-md-6 col-ms-offset-3">
	<div class="panel-body">
<form class="form-horizontal" action="sign.php" method="post" enctype="multipart/form-data" name="form2" >
									<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									 <label for="recipient-name" class="control-label">Email ID</label>
			<div class="input-group">
			<input type="email" class="form-control" name="txtemail" placeholder="Email Id" Onblur="return validate_email(document.form2.txtemail,'Please Enter a valid email address');" aria-describedby="basic-addon2" >
			<span class="input-group-addon" id="basic-addon2">xyz@abc.com</span>
			</div>
							</div>
							</div>


							<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									 <label for="recipient-name" class="control-label">Name</label>
		   <div class="input-group">
			<span class="input-group-addon" id="sizing-addon2">ABC</span>
			<input type="text" class="form-control" name="txtname" placeholder="enter name" Onblur="return allLetter(document.form2.txtname);" aria-describedby="sizing-addon2" >
		   </div>
									</div>
							</div>



							<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									 <label for="recipient-name" class="control-label">PassWord</label>
		   <div class="input-group">
			<span class="input-group-addon" id="sizing-addon2">***</span>
			<input type="password" class="form-control" name="txtpass" placeholder="Password" Onblur="return validatePassword(document.form2.txtpass);" aria-describedby="sizing-addon2"  />
		   </div>
									</div>
							</div>


							<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									<label for="recipient-name" class="control-label">RE-ENTER-PassWord</label>
		   <div class="input-group">
			<span class="input-group-addon" id="sizing-addon2">***</span>
			<input type="password" class="form-control" name="txtrepass" placeholder="Password" Onblur="return validatePassword(document.form2.txtrepass);" aria-describedby="sizing-addon2"  />
		   </div>
									</div>
							</div>


							<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									 <label for="recipient-name" class="control-label">Gender</label>
		   <div class="input-group">
				<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-info active">

				<input type="radio" name="txtgen" value="male" id="option1" autocomplete="off" checked> Male
				</label>
				<label class="btn btn-info">
				<input type="radio" name="txtgen" value="female" id="option2" autocomplete="off"> Female
				</label>

				</div>
		   </div>
									</div>
							</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									 <label for="recipient-name" class="control-label">Photo</label>
			<div class="input-group">
			<input type="file" class="form-control" name="txtpic" >
			<span class="input-group-addon v" id="basic-addon2"></span>
			</div>
							</div>
							</div>
		<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
		      <label for="recipient-name" class="control-label">Mobile No.</label>
		   <div class="input-group">
			<span class="input-group-addon" id="sizing-addon2">+91</span>
			<input type="text" class="form-control"  name="txtmob" placeholder="Mobile No" Onblur="return allnumeric(document.form2.txtmob);" aria-describedby="sizing-addon2" maxlength="10" />
		   </div>
				</div>
		   </div>



<div class="form-group">
<div class="col-lg-offset-2 col-lg-10">
 <label for="recipient-name" class="control-label">ENTER CAPTCHA CODE</label>
		   <div class="input-group">
		   <span class="input-group-addon" id="sizing-addon2">+123</span>
  <input type="text" class="form-control" name="captcha_code" required placeholder="enter captcha code" maxlength="6" required aria-describedby="sizing-addon1"></td>

 <img src="captcha_code.php" />
 </div>
</div>
		   </div>
		   <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="btnsign" class="btn btn-info">SIGN UP</button>
    </div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</div>

<div class="row fontclr1 f">
<br><br><br>
<center><big>
Come and ask your questions and get perfect answers!!!!.....
</big></center>
<br><br><br>
</div>

</body>
</html>
