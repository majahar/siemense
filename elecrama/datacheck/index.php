<?php
require_once("../inc/connection.php");
require_once("../inc/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel : LogIn</title>
<link href="<?php echo APP_SITE_PATH_CSS;?>workless.css" rel="stylesheet" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS;?>chosen.css" rel="stylesheet" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS;?>stylesheet.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS;?>jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS;?>chosen.jquery.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS;?>custom.js"></script>
</head>

<body>
	<div class="container">
   
   <a href="http://www.aurumcommunications.com" style="display: block; width: 180px; height: 37px; position: absolute; top: 50%; left: 50%; margin-top: -186px; margin-left: -91px; " /><img src="<?php echo APP_SITE_PATH_IMAGES;?>logo.png" /></a>
    	<div class="login">
            <div class="contact-head">
                <div>Login Page</div>
            </div>
				<?php
                    if (isset($_GET['err']))	{
                ?>
                <div id="err" class="error" style="display: block; position: absolute; top: 175%; left: 50%; margin-top: -186px; margin-left: -91px; ">Invalid ID or Password</div>
                <?php } ?>
                <form method="post" name="frmLogin" id="frmLogin" action="<?php echo APP_SITE_PATH;?>loginsubmit.php" >
                	<div class="control">
                    	<label for="email">Username: </label>
                   		<input type="text" name="txtEmail" id="txtEmail" />
                     	<div class="clear"></div>
                	</div>
                    <div class="control">
	                    <label for="password">Password: </label>
    	                <input type="password" name="txtPwd" id="txtPwd" />
                        <div class="clear"></div>
                	</div>
                     <div class="control button-container" style="padding-left:40px;">
                   <input type="submit" value="Login" name="submit" class="btn blue">
                   <input type="reset" value="Reset" name="submit" class="btn blue">
                   </div>
                </form>
        </div>
    </div>
</body>
</html>