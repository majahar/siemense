<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//print_r($_SESSION);	


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>feedback</title>

</head>
<body>
<?php if(null !==($this->session->userdata('admin'))){ ?>

<div>
	<label><input type="radio" name="feed" value="u_registration">New User</label>
	<label><input type="radio" name="feed" value="u_feedback">Registred User</label>
</div>

<div id="u_registration" class="u_registration box" style="display: none">
	<div class="contentbox">
	<h2>Register</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.
	Sed quis fermentum quam, sed tempor enim. </p>
	</div>
	<form name ="userinput" id ="userinput" method="post" >	
		<div class="form_section">
			<div class="col-md-6 col-xs-12 col-sm-12">
			<input type="text" placeholder="Name" name="rfullname" id="rfullname">
			<div id="rfull_error" class="error"></div>
			<input type="text" placeholder="Contact No" name="rmobile" id="rmobile" >
			<div id="rmobile_error" class="error"></div>
			<input type="text" placeholder="Enter OTP" name="otp" id="otp">
			<div id="otp_error" class="error"></div><div id="rmobile_otp" class="error1"></div>
			<input type="hidden" name="sales_p_id" id="sales_p_id" value="<?php echo $this->session->userdata('u_id') ?>">
			</div>
			<div class="col-md-6 col-xs-12 col-sm-12">
			<input type="text" placeholder="Email" name="remail" id="remail" >
			<div id="remail_error" class="error"></div>
			<select name="location" id="rlocation">
			<option value="mumbai">Mumbai</option>
			<option value="pune">Pune</option>
			<option value="indore">Indore</option>
			<option value="jaipur">Jaipur</option>
			</select>
			</div>
		</div>
	<div class="col-md-8 form_section_btn">
		<a class="send_button" onclick="return rformotp();">Send OTP</a>
		<a class="resend_button" onclick="return reformotp();">Resend OTP</a>
		<button type="submit" class="submit_button" onclick="feed_r_form(); return false;" disabled>Submit</button>
		<div class="refresh" ><img src="<?php echo SITE_URL_IMAGES;?>/reload.png" width="16" height="17" alt=""></div>
		<div class="cl"></div>
	</div>
	</form>
</div>



<div id="u_feedback"  style="display: none" class="u_feedback box">
	<h1>Welcome to feedback!</h1>
	
	<form name ="userinput" method="post" >	
		  <div class="container">
			<label><b>Name</b></label>
			<input type="text" placeholder="Enter Full name" name="fullname" id="fullname" >
			<div id="fullname_error" class="error"></div>
			
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" id="email" >
			<div id="email_error" class="error"></div>

			<label><b>Mobile</b></label>
			<input type="text" placeholder="Enter Mobile Number" name="feedmobile" id="feedmobile" >
			<div id="feedmobile_error" class="error"></div>
			
			<!--<label><b>OTP</b></label>
			<input type="text" placeholder="Enter your otp" name="otp" id="otp" >
			<div id="otp_error" class="error"></div>-->

			<label><b>Location</b></label>
			<select name="location" id="location">
			<option value="mumbai">Mumbai</option>
			<option value="pune">Pune</option>
			<option value="indore">Indore</option>
			<option value="jaipur">Jaipur</option>
			</select>
			
			<p> Question 1 </P>
			<input type="radio" name="feed1" value="test1">test1<br>
			<input type="radio" name="feed1" value="test2">test2<br>
			<input type="radio" name="feed1" value="test3">test3<br>

			<p> Question 2 </P>
			<input type="radio" name="feed2" value="test4">test4<br>
			<input type="radio" name="feed2" value="test5">test5<br>
			<input type="radio" name="feed2" value="test6">test6<br>
			<p> Question 3 </P>

			<input type="radio" name="feed3" value="test7">test7<br>
			<input type="radio" name="feed3" value="test8">test8<br>
			<input type="radio" name="feed3" value="test9">test9<br>
			<p> Question 4 </P>

			<input type="radio" name="feed4" value="test10">test10<br>
			<input type="radio" name="feed4" value="test11">test11<br>
			<input type="radio" name="feed4" value="test12">test12<br>
			<p> Question 5 </P>

			<input type="radio" name="feed5" value="test13">test13<br>
			<input type="radio" name="feed5" value="test14">test14<br>
			<input type="radio" name="feed5" value="test15">test15<br>
			

			<div class="clearfix">			  
			  <button type="submit" class="signupbtn" onclick="feedformSubmit();">Submit</button>
			</div>
		  </div>
	</form >
	
</div>

<a href="<?php echo SITE_URL;?>logout">logout</a><br><br>

<?php if($this->session->userdata('admin')==1){ ?>
<a href="<?php echo SITE_URL;?>master_login">Sales Executive Registration</a>
<?php } 

}else{
	redirect('index');
} ?>


</body>
</html>

