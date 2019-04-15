<?php
	ob_start();
	session_start();
	require_once("../inc/connection.php");
	require_once("../inc/constants.php");
	require_once("../inc/function.php");
	
	$con = new connection();
	$usr_name = remove_junk($_POST['txtEmail']);
	$password = remove_junk($_POST['txtPwd']);
	$flag = 1;
	if($usr_name == ''){
		$flag = 0;
		header("Location: ".APP_SITE_PATH."index.php?err=1");
	}
	
	if($password == ''){
		$flag = 0;
		header("Location: ".APP_SITE_PATH."index.php?err=1");
	}
	
	if($flag == 1){
		if($usr_name == 'admin' && $password == 'admin!@#'){
			$_SESSION['user'] = 'Admin';
			header("Location: ".APP_SITE_PATH."dashboard.php");
		} else {
			header("Location: ".APP_SITE_PATH."index.php?err=1");
		}
	}
	
?>