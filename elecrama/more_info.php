<?php 
include('inc/connection.php');
include('inc/function.php');
include('inc/constants.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
	$ip_address=user_ip();
	$name=get_safe_data($_POST['name']);
	$email=get_safe_data($_POST['email']);
	$mobile=get_safe_data($_POST['mobile']);
	$url=$_POST['url'];
	$con = new connection();
	$sql = "INSERT INTO `elecrama_contact_us`(`name`, `email`, `mobile`, `added_on`, `ip_address`,`url`) VALUES ('$name','$email','$mobile',now(),'$ip_address','$url')";
	$results = $con->insert($sql);
	
	
	
	$msg='<table width="100%" align="center"  style="font-family: sans-serif;background-color: #EAEAEA;padding: 10px;">
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
	
	  
	</table>
	';



	/*$to       ='adkhan1992@gmail.com';
	$subject = "PI Channel Partner lead capture from Website";
	$message = $msg;
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= 'sagar.sohoni@siemens.com' . "\r\n" .
	'Reply-To: sagar.sohoni@siemens.com ' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);*/
}

?>