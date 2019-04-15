<?php
	session_start();
	include("../../inc/connection.php");
	include('../../inc/constants.php');
	include('../../inc/function.php');
	if(!(isset($_SESSION['user']))){ header("Location: ".APP_SITE_PATH."index.php"); }
	
	$con = new connection();
	
	$i=1;
	
	
	$filename = 'download_register_report_'.date('Y-m-d').'_'.date('H:i:s').'.csv';
	header("Content-type: application/csv");
	header("Content-Disposition: attachment; filename=".$filename);
	header("Pragma: no-cache");
	header("Expires: 0");
		echo "SrNo., Name, Email,Mobile No, Date\n";
		$sql = "SELECT * FROM  more_info ORDER BY added_on DESC"  ;
		$results = $con->select_values($sql);
		//print_r();
		 foreach($results as $result){
			echo $i;
			echo ", ".str_decode(decode_str($result['name'])); 
			echo ", ".str_decode(decode_str($result['email'])); 
			echo ", ".str_decode(decode_str($result['mobile'])); 
			echo ", ".str_decode(decode_str($result['added_on'])); 
			//echo ", ".str_decode(decode_str($result['ip_address'])); 
			echo "\n"; 
			++$i;
		 }

	
?>