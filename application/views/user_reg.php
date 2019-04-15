<?php
defined('BASEPATH') OR exit('No direct script access allowed');

print_r($_SESSION);	

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>feedback</title>

</head>
<body>

<div id="container">
	<h1>Welcome to user feedback registration form</h1>


	<form name ="userinput" action="<?php echo SITE_URL;?>user_data_submit" method="post" >	
		  <div class="container">
			<label><b>Name</b></label>
			<input type="text" placeholder="Enter Full name" name="fullname" required>
			
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label><b>Mobile</b></label>
			<input type="text" placeholder="Enter Mobile Number" name="mobile" required>

			<label><b>Location</b></label>
			<select name="location">
			<option value="mumbai">Mumbai</option>
			<option value="pune">Pune</option>
			<option value="indore">Indore</option>
			<option value="jaipur">Jaipur</option>
			</select>
			
			

			<div class="clearfix">			  
			  <button type="submit" class="signupbtn">Submit</button>
			</div>
		  </div>
	</form >
	
	
</div>
<a href="<?php echo SITE_URL;?>logout">logout</a>

</body>
</html>