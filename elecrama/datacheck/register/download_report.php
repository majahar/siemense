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
	

		
        
		
		echo "SrNo., Name, Email,Mobile No, Company, City, Current Business,Designation,Latest CIBIL SCORE,Audited financial statement 2014-15,Audited financial statement 2013-14,Audited financial statement 2012-13,Date\n";
	
		 $sql = "SELECT *
				FROM  channel_partner
				ORDER BY added_on DESC"  ;
		$results = $con->select_values($sql);
		//print_r();
		 foreach($results as $result){
			echo $i;
			echo ", ".str_decode(decode_str($result['name'])); 
			echo ", ".str_decode(decode_str($result['email'])); 
			echo ", ".str_decode(decode_str($result['mobile_no'])); 
			echo ", ".str_decode(decode_str($result['company'])); 
			echo ", ".str_decode(decode_str($result['city'])); 
			echo ", ".str_decode(decode_str($result['current_business'])); 
			echo ", ".str_decode(decode_str($result['designation'])); 
			echo ",<a href='http://localhost/siemens/media/doc/'".$result['latest_cibil_score']."> ".str_decode(decode_str($result['latest_cibil_score']))."</a>"; 
			echo ", ".str_decode(decode_str($result['audited2014'])); 
			echo ", ".str_decode(decode_str($result['audited2013'])); 
			echo ", ".str_decode(decode_str($result['audited2012'])); 
			echo ", ".str_decode(decode_str($result['added_on'])); 
			//echo ", ".str_decode(decode_str($result['ip_address'])); 
			echo "\n"; 
			++$i;
		 }

	
?>