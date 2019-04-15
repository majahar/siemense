<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>sales executive registration</title>

</head>
<body>

<div id="container">
	<h1>Sales Executive Registration</h1>


	<form id ="mlogin" name ="userinput" method="post" action="<?php echo SITE_URL;?>sales_reg_submit" onclick="return frmGiftSubmit();">	
	
		  <div class="container">
			<label><b>First Name</b></label>
			<input type="text" placeholder="Enter Full name" name="fname" id="fname" >
			<div id="fname_error" class="error"></div>
			
			<label><b>Last Name</b></label>
			<input type="text" placeholder="Enter Full name" name="lname" id="lname">
			<div id="lname_error" class="error"></div>
			
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" id="email">
			<div id="email_error" class="error"></div>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" id="psw">
			<div id="psw_error" class="error"></div>

			<label><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat">
			<div id="prepeat_error" class="error"></div>

			<div class="clearfix">			  
			  <button type="submit" class="signupbtn">Sign Up</button>
			</div>
		  </div>
	</form >
	
	
</div>

</body>
</html>

<script type="text/javascript">
	
function frmGiftSubmit(){
	
var fname=$('#fname').val();
var lname=$('#lname').val();
var psw=$('#psw').val();
var email=$('#email').val();
var pswrepeat=$('#pswrepeat').val();
$(".error").html('');

if(fname=="")
{
$('#fname_error').slideDown().html("<span>Please type First Name</span>");
return false;
}
if(lname=="")
{
$('#lname_error').slideDown().html("<span>Please type Last Name</span>");
return false;
}
if(email=="")
{
$('#email_error').slideDown().html('<span id="error">Please type email</span>');
return false;
}
var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
if(!filter.test(email))
{
$('#email_error').slideDown().html('<span id="error">Please type correct email</span>');
return false;
}
if(psw=="")
{
$('#psw_error').slideDown().html('<span id="error">Please type password</span>');
return false;
}
if(pswrepeat=="")
{
$('#prepeat_error').slideDown().html('<span id="error">Please type repassword</span>');
return false;
}

if(pswrepeat!=psw)
{
$('#prepeat_error').slideDown().html('<span id="error">password not match</span>');
return false;
}

}
</script>