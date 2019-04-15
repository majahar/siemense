<?php
/*print_r($_FILES); 
die();*/
include('inc/connection.php');
include('inc/function.php');
include('inc/constants.php');
$isMobile=$_POST['isMobile'];
$errMsg='';
$score='';
$statement2012='';
$statement2013='';
$statement2014='';

$errstatement2012='yes';
$errstatement2013='yes';
$errstatement2014='yes';

$uId='';
if($isMobile==''){
	
	if (isset($_FILES['score']['tmp_name']) && $_FILES['score']['name']!='' ) {
		if ($_FILES['score']['type'] == "application/pdf" || $_FILES['score']['type'] == "application/doc" ||  $_FILES['score']['type'] == "application/docx" ||  $_FILES['score']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
			if($_FILES['score']['size']<=FILESIZE){
				$score_file='';
				$errMsg[]=array("errScore"=>"File size should be less than 5 MB");
			} else {
				$score_file ="score".rand(1111111111,9999999999);
			}
		}else{
			$score_file='';
			$errMsg[]=array("errScore"=>"Please select only PDF or DOC file");
		}
	}else{
		$errMsg[]=array("errScore"=>"Please select the PDF file");
	}



	if (isset($_FILES['statement2012']['tmp_name']) && $_FILES['statement2012']['name']!='') {
		if ($_FILES['statement2012']['type'] == "application/pdf" || $_FILES['statement2012']['type'] == "application/doc" ||  $_FILES['statement2012']['type'] == "application/docx" ||  $_FILES['statement2012']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
			if($_FILES['statement2012']['size']<=FILESIZE){
				
				$errMsg[]=array("errStatement2012"=>"File size should be less than 5 MB");
			}else{
				$statement2012_file ="statement2012".rand(1,9);
			}
		}else{
			$statement2012_file='';
			$errMsg[]=array("errStatement2012"=>"Please select only PDF or DOC file");
			$errstatement2012='';
			
		}
	}else{
		//$errMsg[]=array("errStatement2012"=>"Please select the PDF file");
		$errstatement2012='';
	}


	if (isset($_FILES['statement2014']['tmp_name']) && $_FILES['statement2014']['name']!='' ) {
		if ($_FILES['statement2014']['type'] == "application/pdf" || $_FILES['statement2014']['type'] == "application/doc" ||  $_FILES['statement2014']['type'] == "application/docx" ||  $_FILES['statement2014']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
			
			if ($_FILES['statement2014']['size']<=FILESIZE) {
				
				$errMsg[]=array("errStatement2014"=>"File size should be less than 5 MB");
			}else{
				$statement2014_file ="statement2014".rand(1111111111,9999999999);	
			}
		}else{
			$statement2014_file='';
			$errMsg[]=array("errStatement2014"=>"Please select only PDF or DOC file");
			$errstatement2014='';
		}
	}else{
		//$errMsg[]=array("errStatement2014"=>"Please select the PDF file");
		$errstatement2014='';
	}
	   
	   
	if (isset($_FILES['statement2013']['tmp_name']) && $_FILES['statement2013']['name']!='') {
		if ($_FILES['statement2013']['type'] == "application/pdf" || $_FILES['statement2013']['type'] == "application/doc" || $_FILES['statement2013']['type'] == "application/docx" ||  $_FILES['statement2013']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
			
			
			if ($_FILES['statement2013']['size']<=FILESIZE) {
				
				$errMsg[]=array("errStatement2013"=>"File size should be less than 5 MB");
			}else{
				$statement2013_file ="statement2013".rand(1111111111,9999999999);	
			}
		}else{
			$statement2013_file='';
			$errMsg[]=array("errStatement2013"=>"Please select only PDF or DOC file");
			$errstatement2013='';
			
		}
	}else{
		//$errMsg[]=array("errStatement2013"=>"Please select the PDF file");
		$errstatement2013='';
	}

	
	if($score_file!=''){
		$score=	$score_file.".pdf";
		$insertErr=false;
	}
	if($score_file==''){
		$insertErr=true;
		
	}
	if($statement2012_file!=''){
		$statement2012=	$statement2012_file.".pdf";
		$insertErr=false;
	}if($statement2012_file==''){
		$insertErr=true;
		
	}
	if($statement2013_file!=''){
		$statement2013=$statement2013_file.".pdf";
		$insertErr=false;
	}if($statement2013_file==''){
		$insertErr=true;
		
	}
	if($statement2014_file!=''){
		$statement2014=$statement2014_file.".pdf";
		$insertErr=false;
	}
	if($statement2014_file==''){
		$insertErr=true;
		
	}
	
	
	if($errMsg=='""'){
		if($errstatement2014=='' && $errstatement2013=='' && $errstatement2012==''){
		$errMsg[]=array("errStatement2012"=>"Please select any two consecutive years files");
		}
		
		if($errstatement2014=='' && $errstatement2013!='' && $errstatement2012==''){
			$errMsg[]=array("errStatement2012"=>"Please select any two consecutive years files");
		}
		
		if($errstatement2014!='' && $errstatement2013==''){
			$errMsg[]=array("errStatement2012"=>"Please select any two consecutive years files");
		}
		
		
		if($statement2014!='' && $errstatement2012!='' && $errstatement2013==''){
			$errMsg[]=array("errStatement2012"=>"Please select any two consecutive years files");
		}
		
		if($errstatement2012!='' && $errstatement2013==''){
			$errMsg[]=array("errStatement2012"=>"Please select any two consecutive years files");
		}
		
	}
	
	
		
		
	$errMsg =json_encode($errMsg);	
	if($errMsg!='""'){
		echo $errMsg;
		die();
	}
	
}



if($isMobile==''){
	$result = move_uploaded_file($_FILES['score']['tmp_name'], FILEREPOSITORY."/$score_file.pdf"); 
	$result = move_uploaded_file($_FILES['statement2012']['tmp_name'], FILEREPOSITORY."/$statement2012_file.pdf");
	$result = move_uploaded_file($_FILES['statement2014']['tmp_name'], FILEREPOSITORY."/$statement2014_file.pdf");
	$result = move_uploaded_file($_FILES['statement2013']['tmp_name'], FILEREPOSITORY."/$statement2013_file.pdf");	
}

$con = new connection();

$name=get_safe_data($_POST['name']);
$email=get_safe_data($_POST['email']);
$mobile=get_safe_data($_POST['mobile']);
$company=get_safe_data($_POST['company']);
$city=get_safe_data($_POST['city']);
$business=get_safe_data($_POST['business']);
$designation=get_safe_data($_POST['designation']);

$uId=get_safe_data($_POST['uId']);

$rand_id1=$uId;

$sql1="select * from channel_partner where rand_id='".$rand_id1."'";
$count1=$con->num_db($sql1);

if($count1==0 || $count1==''){

	$ip_address=user_ip();
$rand_id=rand(1111111111,9999999999);
 $sql = "INSERT INTO `channel_partner`( `rand_id`,`name`, `email`, `mobile_no`, `company`, `city`, `current_business`,`designation`, `latest_cibil_score`, `audited2014`, `audited2013`,`audited2012`, `added_on`, `ip_address`) VALUES ('$rand_id','$name','$email','$mobile','$company','$city','$business','$designation','$score','$statement2014','$statement2013','$statement2012',now(),'$ip_address')";
$results = $con->insert($sql);

$msg='<table width="100%" align="center"  style="font-family: sans-serif;background-color: #EAEAEA;padding: 10px;">
<tr><td colspan="2">Hi</td></tr>
<tr><td height="20px"></td></tr>
<tr><td colspan="2">I wish to apply for Siemens PI Channel Partner. Here are my details:</td></tr>
<tr><td height="20px"></td></tr>
  <tr>
    <td  width="42%" align="left"><strong>Name:</strong></td>
    <td  width="63%" align="left">'.$name.'</td>
  </tr>
  <tr><td height="10px"></td></tr>
  <tr>
  <td  width="42%" align="left"><strong>Email:</strong></td><td  width="63%" align="left">'.$email.'</td>
  </tr>  <tr><td height="10px"></td></tr>
    <tr>
  <td  width="42%" align="left"><strong>Mobile Number:</strong></td><td  width="63%" align="left">'.$mobile.'</td>
  </tr>  <tr><td height="10px"></td></tr>
      <tr>
  <td  width="42%" align="left"><strong>Company Name:</strong></td><td  width="63%" align="left">'.$company.'</td>
  </tr>  <tr><td height="10px"></td></tr>
        <tr>
  <td  width="42%" align="left"><strong>Designation:</strong></td><td  width="63%" align="left">'.$designation.'</td>
  </tr>  <tr><td height="10px"></td></tr>
          <tr>
  <td  width="42%" align="left"><strong>City:</strong></td><td  width="63%" align="left">'.$city.'</td>
  </tr>  <tr><td height="10px"></td></tr>
          <tr>
  <td  width="42%" align="left"><strong>Current Business:</strong></td><td  width="63%" align="left">'.$business.'</td>
  </tr>  <tr><td height="10px"></td></tr>';
		if($isMobile==''){
			  $msg.='<tr>
	  <td  width="42%" align="left"><strong>Latest CIBIL Score :</strong></td><td  width="63%" align="left"><a href="'.USER_DOC. $score.'">Click Here</a></td>
	  </tr>  <tr><td height="10px"></td></tr>
			  <tr>
	  <td  width="42%" align="left"><strong>Audited Financial Statement from 2014 to 2015 :</strong></td><td  width="63%" align="left"><a href="'.USER_DOC.$statement2014.'">Click Here</a></td>
	  </tr>  <tr><td height="10px"></td></tr>
				<tr>
	  <td  width="42%" align="left"><strong>Audited Financial Statement from 2013 to 2014 :</strong></td><td  width="63%" align="left"><a href="'.USER_DOC.$statement2013.'">Click Here</a></td>
	  </tr>  <tr><td height="10px"></td></tr>
				<tr>
	  <td  width="42%" align="left"><strong>Audited Financial Statement from 2013 to 2012:</strong></td><td  width="63%" align="left"><a href="'.USER_DOC.$statement2012.'">Click Here</a></td>
	  </tr>  <tr><td height="10px"></td></tr>';
		}
  $msg.='<tr>
  <td colspan="2" align="left">
  I Understand that you will contact me after evaluating the above information. 
   </td>
  </tr>  <tr><td height="10px"></td></tr>
  <tr><td colspan="2" align="left">
  Thank you. <br>
Yours Truly, <br>

Regards,<br>
  '.$name.'<br>
  </td></tr>
  
</table>
';



	/*$to       =$email;
	$subject = "PI Channel Partner Enquiry from Website";
	$message = $msg;
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= 'From: malissa@mail.com' . "\r\n" .
	'Reply-To: malissa@mail.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);*/
	
	
	if($isMobile!=''){
	
		$link=APP_SITE_PATH_FRONT."form.php?uId=".$rand_id;
		
		$to       =$email;
		$subject = "Complete your application for Siemens PI Partner";
		$message = '<p>Dear Sir/Madam,<br/><br/>
Thank you for submitting your application to become a Channel Partner for Siemens Process Instrumentation.<br/><br/>
To complete the application process, please submit the following documents from a Desktop or PC:<br/><br/>
<ul>
	<li>Latest CIBIL score</li>
	<li>Audited balance sheet for last 2 financial years</li>
</ul>
<a href='.$link.' target="_blank">Click here</a> to submit the documents<br/><br/>



Please note: Last date of application is 4th September 2015. These documents can only be submitted via a Desktop or PC or via email.<br/><br/>
Please do contact me if you require any clarifications regarding the same.<br/><br/>
Thanking-you<br/>
 
Warm Regards,<br/>
Sagar Sohoni<br/>
Siemens Ltd<br/>
Tel: +91 (22) 33265510<br/>
Email: <a href="mailto:sagar.sohoni@siemens.com ">sagar.sohoni@siemens.com </a>
</p>

';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= 'From: Siemens PI Partner <no-reply.in@siemens.com>' . "\r\n";
		
		@mail($to, $subject, $message, $headers);
	}

}else{
	$sql = "update `channel_partner` set latest_cibil_score='".$score."',audited2014='".$statement2014."',audited2013='".$statement2013."',audited2012='".$statement2012."',rand_id='' where rand_id='".$uId."'";
	$results = $con->insert($sql);
}





?>