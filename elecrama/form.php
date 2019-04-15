<?php
require_once 'Mobile_Detect.php';
include('inc/connection.php');
$detect = new Mobile_Detect;
$isMobile=''; 
$isAuto='';
$rand_id='';
$name='';
$email='';
$mobile_no='';
$company='';
$city='';
$current_business='';
$isReadonly='';
$designation='';
if($detect->isMobile() && !$detect->isTablet()){
	$isMobile='yes';
}

if(isset($_GET['uId']) && $_GET['uId']!=''){
	$rand_id=$_GET['uId'];
	$con = new connection();
	$sql="select * from channel_partner where rand_id='".$rand_id."'";
	
	$count=$con->num_db($sql);
	if($count>0 && $isMobile==''){
		$isAuto='yes';
		$row=$con->select_values($sql);
		$name=$row['0']['name'];
		$email=$row['0']['email'];
		$mobile_no=$row['0']['mobile_no'];
		$company=$row['0']['company'];
		$city=$row['0']['city'];
		$current_business=$row['0']['current_business'];
		$designation=$row['0']['designation'];
		$isReadonly='readonly';
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content=": Apply to become a channel partner before 4th September 2015. Consider becoming a Siemens PI Partner to grow your business & boost your business.">
    <meta name="keywords" content="Siemens Channel Partner, Siemens Franchise, Siemens Partner, Dealership of Siemens, Temperature sensor, Measuring instruments, Industrial automation, Flow meter, Pressure sensor, Water level sensor, Pressure transmitter, Home automation system, Pressure transducer, Siemens agency, electronics and instrumentation, siemens india, Siemens Process Instrumentation, water flow meter, flow measurement, mass flow meter, temperature transmitter, process control instrumentation, Siemens India">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Siemens Process Instrumentation - Become a Channel Partner">
<meta itemprop="description" content=": Apply to become a channel partner before 4th September 2015. Consider becoming a Siemens PI Partner to grow your business & boost your business. ">
<meta itemprop="image" content="http://pipartner.siemens.co.in/images/contact2.png"> 

<!-- Twitter Card data 
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="Submit Siemens PI Partner Application Form | Siemens India">
<meta name="twitter:description" content=": Apply to become a channel partner before 4th September 2015. Consider becoming a Siemens PI Partner to grow your business & boost your business. ">
<meta name="twitter:creator" content="@author_handle">--> 
<!-- Twitter Summary card images must be at least 120x120px -->
<!--<meta name="twitter:image" content="http://pipartner.siemens.co.in/images/contact2.png">         -->
    

<meta property="og:url"                content="http://pipartner.siemens.co.in/index.php" />
<meta property="og:type"               content="Website" />
<meta property="og:title"              content="Submit Siemens PI Partner Application Form | Siemens India" />
<meta property="og:description"        content=": Apply to become a channel partner before 4th September 2015. Consider becoming a Siemens PI Partner to grow your business & boost your business. " />
<meta property="og:image"              content="http://pipartner.siemens.co.in/images/contact2.png" />

	<title>Submit Siemens PI Partner Application Form | Siemens India</title>
	<link rel="stylesheet" href="css/style.css" />
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" /><![endif]-->
    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" /><![endif]-->
    <!--[if IE 9]><link rel="stylesheet" type="text/css" href="css/ie9.css" /><![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66441886-1', 'auto');
      ga('send', 'pageview');

    </script>



<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1594359064140338');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1594359064140338&ev=PageView&noscript=1"
/></noscript>


</head>
<body class="page-type-entry">
    <div class="overlay"></div>
     <p class="logo">
      <a title="Go to www.siemens.com" href="http://www.siemens.co.in/"></a>
    </p>
	<div class="header">
	    <div class="techstories-banner">
            <div class="techstories-fontlayer">
                <div class="techstories-box">
                    <p class="h2">Become a Channel Partner of Siemens Process Instrumentation. </p>
<!--                    <a class="techstories-call-to-action" href="form.php">Apply Now</a>-->
                </div>
            </div>
        </div>
	</div>
	
	<div class="wrapper">
       <div class="thanku">
           <div class="pop-container">
              <a href="javascript:void(0)" class="close"><img src="images/close.png" alt="close"></a>
               <p class="msg">Your details have been submitted successfully. </p>
               <h3>Thank You</h3>
               <p>for your interest in becoming a Siemens Partner.<br/>
               We will contact you for further communication after evaluating these details. </p>
            </div>
       </div>
       <div class="thanku-mobile">
           <div class="pop-container">
              <a href="javascript:void(0)" class="close"><img src="images/close.png" alt="close"></a>
               <p class="msg">Your details have been submitted successfully. </p>
               <h3>Thank You</h3>
               <p>for your interest in becoming a Siemens Partner.<br/>
               An email will be sent shortly with the link to submit the required documents and complete the application process.</p>
            </div>
       </div>
        <div class="toolbar-zone">
              <div class="process-flag">
                  <a href="index.php"> Process Instrumentation</a>
              </div>
              <div class="clearfix"></div>
        </div>
        <div class="bredcrumes">
            <ul>
                <li><a title="Go to www.siemens.com" href="http://www.siemens.co.in/" target="_blank">Home</a></li>
                <li><a href="http://www.siemens.co.in/pi">Process Instrumentation</a></li>
                <li><a href="index.php">PI Partner</a></li>
                <li class="active"><a href="form.php">Apply Now</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="content-zone">
            <div class="form-container">
               <div class="form">
                  <p>Become a Channel Partner for Siemens Process Instrumentation.<br/></p> 
                   <h1>Submit these details and you will hear from us soon.  </h1>
                   <div class="centerform">
                        <form method="post" id="frmChannelPartner" enctype="multipart/form-data" action="channel_partner.php">
                           <h2>Fill the form</h2>
                            <span class="error">* All fields are mandatory.</span>
                           <input class="input" type="text" placeholder="Name" id="name" name="name" value="<?php echo $name?>" <?php echo $isReadonly?>><span id="errName" class="frmErr"></span>
                           <input class="input" type="text" placeholder="Email Id" id="email" name="email" value="<?php echo $email?>" <?php echo $isReadonly?>><span id="errEmail" class="frmErr"></span>
                           <input class="input" type="text" placeholder="Mobile No." id="mobile" name="mobile" value="<?php echo $mobile_no?>" <?php echo $isReadonly?>><span id="errMobile" class="frmErr"></span>
                           <input class="input" type="text" placeholder="Company Name" id="company" name="company" value="<?php echo $company?>" <?php echo $isReadonly?>><span id="errCompany" class="frmErr"></span>
                           <input class="input" type="text" placeholder="Designation" id="designation" name="designation" value="<?php echo $designation?>" <?php echo $isReadonly?>><span id="errDesignation" class="frmErr"></span>
                            <input class="input" type="text" placeholder="City" id="city" name="city" value="<?php echo $city?>" <?php echo $isReadonly?>><span id="errCity" class="frmErr"></span>
                           <input class="input" type="text" placeholder="Current business" id="business" name="business" value="<?php echo $current_business?>" <?php echo $isReadonly?>><span id="errBusiness" class="frmErr"></span>
                            
                           
                           <?php
						   if($isMobile==''){
						   ?>
						   <label for="fileup1">Attached the following – (.PDF,DOC files only, Max. 5 MB) </label>
						   <div class="custom-file-upload">
                               <p>Latest CIBIL Score </p>
                                <input type="file" id="score" placeholder="Latest CIBIL Score"  name="score" />
<!--                                <a id="" class="btn-upload btn" href="javascript:void(0)">Upload</a>-->
                                <span id="errScore" class="frmErr"></span>
                            </div>
                           <label for="fileup2">Audited Financial Statement (Any two consecutive years)</label>
                           <div class="custom-file-upload">
                                <p>Audited financial statement -2014-15 </p> 
                                <input type="file" id="statement2014" name="statement2014" />
<!--                                <a id="" class="btn-upload btn" href="javascript:void(0)">Upload</a>-->
                                <span id="errStatement2014" class="frmErr"></span>
                            </div>
                            <div class="custom-file-upload">
                                <p>Audited financial statement -2013-14 </p> 
                                <input type="file" id="statement2013" name="statement2013" />
<!--                                <a id="" class="btn-upload btn" href="javascript:void(0)">Upload</a>-->
                                <span id="errStatement2013" class="frmErr"></span>
                            </div>
                            <div class="custom-file-upload">
                                <p>Audited financial statement -2012-13 </p> 
                                <input type="file" id="statement2012"  name="statement2012" />
<!--                                <a id="" class="btn-upload btn" href="javascript:void(0)">Upload</a>-->
                                <span id="errStatement2012" class="frmErr"></span>
                            </div>
							<?php } ?>
                            <div class="btn-holder">
<!--                               <a id="form-reset" class="btn-apply btn" href="javascript:void(0)" onclick="frmChannelPartnerReset()">Reset</a>-->
                               <a id="" class="btn-apply btn" href="javascript:void(0)" onclick="submitData()">Submit</a>
                            </div>   
							<div class="btn-holder-msg" style="display:none;">
								Please wait...
                            </div>   							
                            <p>You may alternatively send these details to us over email </p>
							<input type="hidden" name="isMobile" id="isMobile" value="<?php echo $isMobile?>"/>
							<input type="hidden" name="uId" id="uId" value="<?php echo $rand_id?>"/>
                        </form>
                    </div>
                    <div class="via_mail">
                        <p><b><a href="mailto:sagar.sohoni@siemens.com?subject=PI%20Channel%20Partner%20Enquiry%20from%20Website&amp;body=Hi%2C%20%0A%0AI%20wish%20to%20apply%20for%20Siemens%20PI%20Channel%20Partner.%20Here%20are%20my%20details%3A%20%0A%20%20%0A%E2%80%A2%20%20%20%20%20%20%20Name%3A%20%0A%E2%80%A2%20%20%20%20%20%20%20Email%3A%20%0A%E2%80%A2%20%20%20%20%20%20%20Mobile%20number%3A%20%0A%E2%80%A2%20%20%20%20%20%20%20Company%20Name%3A%20%0A%E2%80%A2%20%20%20%20%20%20%20Designation%3A%20%0A%E2%80%A2%20%20%20%20%20%20%20City%3A%20%0A%E2%80%A2%20%20%20%20%20%20%20Current%20business%3A%20%0A%0AI%20have%20attached%20the%20following%20documents%20as%20.PDF/DOC%20files%3A%20%0A%20%20%0A%E2%80%A2%20%20%20%20%20%20%20Latest%20CIBIL%20Score%20%0A%E2%80%A2%20%20%20%20%20%20%20Audited%20Financial%20Statement%20from%20201__%20to%20201__%20%0A%0AI%20understand%20that%20you%20will%20contact%20me%20after%20evaluating%20the%20above%20information.%20%0A%20%20%0AThank%20you.%20%0AYours%20Truly%2C%20%0ARegards%2C%20%0A" target="_blank" title="Apply Via Email to Become a Channel Partner">Apply Via Email</a> </b></p>
						<p><strong>Last date for Applications is 4th September 2015</strong></p>
<!--
                        <p>Mail to: <a href="mailto:sagar.sohoni@siemens.com">sagar.sohoni@siemens.com</a></p>
                        <p>Subject: <b>PI Channel Partner Enquiry from Website </b></p>
-->
   
                    <div class="spacer"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="sharer">
            <ul style="display: none;">
                <li><a href=""><div class="minus"></div></a></li>
                <li><a href=""><div class="plus"></div></a></li>
                <li>Text Size</li>
                <li><a href=""><img src="images/share.png" alt=""></a></li>
                <li><a href=""><img src="images/print.png" alt=""></a></li>
            </ul>
            <b><p>Share</p></b>
            <ul>
                <li><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=http%3A%2F%2Fpipartner.siemens.co.in%2F&pubid=ra-55d358db33b5dc2f&ct=1&title=Siemens%20Process%20Instrumentation%20-%20Become%20a%20Channel%20Partner&pco=tbxnj-1.0" target="_blank"><img src="images/fb.png" alt=""></a></li>
                <li><a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fpipartner.siemens.co.in%2F&pubid=ra-55d358db33b5dc2f&ct=1&title=Siemens%20Process%20Instrumentation%20-%20Become%20a%20Channel%20Partner&pco=tbxnj-1.0" target="_blank"><img src="images/tw.png" alt=""></a></li>
                           
               <li class="whatsapp">
                <!--<a href="whatsapp://send?text=Take%20a%20look%20at%20this%20awesome%20website%3A%20http%3A%2F%2Fpipartner.siemens.co.in" target="_top" data-text="Take a look at this awesome website:" data-href="" onclick="window.parent.null"><img src="images/w.png" alt=""></a></li>-->
                <a href="whatsapp://send?text=Become%20a%20Siemens%20Channel%20Partner%3A%20http%3A%2F%2Fpipartner.siemens.co.in" target="_top" data-text="Become a Siemens Channel Partner:" data-href="" onclick="window.parent.null"><img src="images/w.png" alt=""></a></li>
                <li><a href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=url=http%3A%2F%2Fpipartner.siemens.co.in%2F&pubid=ra-55d358db33b5dc2f&ct=1&title=Siemens%20Process%20Instrumentation%20-%20Become%20a%20Channel%20Partner&pco=tbxnj-1.0" target="_blank"><img src="images/email.png" alt=""></a></li>
                <!--<li><a href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=http%3A%2F%2Fpipartner.siemens.co.in&title=Siemens%20Process%20Instrumentation%20-%20Become%20a%20Channel%20Partner" target="_blank"><img src="images/g.png" alt=""></a></li>-->
				
				<li><a href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=http%3A%2F%2Fpipartner.siemens.co.in%2F&pubid=ra-55d358db33b5dc2f&ct=1&title=Siemens%20Process%20Instrumentation%20-%20Become%20a%20Channel%20Partner&pco=tbxnj-1.0" target="_blank"><img src="images/g.png" alt=""></a></li>
            </ul>
        </div>
        <div class="footer">
            <p>&copy; Siemens AG, 2002 – 2015 | <a href="http://www.siemens.com/corporate_info" target="_blank">Corporate Information</a> | <a href="http://www.siemens.com/privacy" target="_blank">Privacy Policy</a> | <a href="http://www.siemens.com/terms_of_use" target="_blank">Terms of Use</a> | <a href="http://www.siemens.com/digital_id_en" target="_blank">Digital ID</a>
</p>
        </div>
    </div>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/whatsapp-button.js"></script>
    <script>
        $(document).ready(function(){
           $("#form-submit").click(function(){
                $(".overlay, .thanku").fadeIn("slow");
            }); 
            $(".close").click(function(){
                $(".overlay, .thanku").fadeOut("slow");
            }); 
        });
    </script>
	
	<script type="text/javascript" src="js/form.js"></script>
	<script type="text/javascript" src="js/common.js"></script>


<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 942128126;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/942128126/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



</body>
</html>