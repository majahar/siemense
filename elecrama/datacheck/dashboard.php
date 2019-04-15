<?php
session_start();
include("../inc/connection.php");
	include("../inc/constants.php");
	include("../inc/function.php");
	if(!(isset($_SESSION['user'])))
		header("Location: ".APP_SITE_PATH."index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
	
<link rel="stylesheet" href="<?php echo APP_SITE_PATH_CSS; ?>style.css" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS; ?>workless.css" rel="stylesheet" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS; ?>chosen.css" rel="stylesheet" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS; ?>stylesheet.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="<?php echo APP_SITE_PATH_CSS; ?>ui-lightness/jquery-ui-1.9.2.custom.css" />
 <script type="text/javascript">
 var APP_SITE_PATH = '<?php echo APP_SITE_PATH?>';
 </script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>chosen.jquery.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>custom.js"></script>
</script>
<title>Admin Panel : Dashboard</title>
</head>

<body>
<div class="container">
	<div class="wrapper">
        <div style="float:right;">
				 Hello <?php echo $_SESSION['user'] ;?>
				| <a href="<?php echo APP_SITE_PATH; ?>logout.php" class="btn red"> Log Out </a>
			</div>
		<div class="e-code-container" style="text-align:center">
        	
            
            <div id="icon" style="float:left; margin-left:20px; display:inline-block; margin:20px 10px" >
				
                <!--a href="<?php echo PATH_REGISTER; ?>form.php" class="btn blue" style="width:90px;height:77px;margin-right:10px;"><img src="<?php echo APP_SITE_PATH_IMAGES;?>enter.png"><div style="color:#fff;"> Apply Now </div></a-->
                <a href="<?php echo PATH_REGISTER; ?>basefrm.php" class="btn blue" style="width:90px;height:77px;margin-right:10px;"><img src="<?php echo APP_SITE_PATH_IMAGES;?>enter.png"><div style="color:#fff;"> More Info </div></a>

                
                
                
            </div>
    	</div>
        <?php include("footer.php");?>
    </div>
</div>
</body>
</html>