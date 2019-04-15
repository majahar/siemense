<?php
	require_once("inc/constants.php");
	session_start();
	unset($_SESSION['user']);
	session_destroy();
	header("Location: ".APP_SITE_PATH."index.php");
?>