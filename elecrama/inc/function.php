<?php
	
	function user_ip(){
		if(isset($_SERVER['HTTP_CLIENT_IP']) && $_SERVER['HTTP_CLIENT_IP']) return $_SERVER['HTTP_CLIENT_IP'];
		if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR']) return $_SERVER['HTTP_X_FORWARDED_FOR'];
		if(isset($_SERVER['HTTP_X_FORWARDED']) && $_SERVER['HTTP_X_FORWARDED']) return $_SERVER['HTTP_X_FORWARDED'];
		if(isset($_SERVER['HTTP_FORWARDED_FOR']) && $_SERVER['HTTP_FORWARDED_FOR']) return $_SERVER['HTTP_FORWARDED_FOR'];
		if(isset($_SERVER['HTTP_FORWARDED']) && $_SERVER['HTTP_FORWARDED']) return $_SERVER['HTTP_FORWARDED'];
		if(isset($_SERVER['HTTP_X_COMING_FROM']) && $_SERVER['HTTP_X_COMING_FROM']) return $_SERVER['HTTP_X_COMING_FROM'];
		if(isset($_SERVER['HTTP_COMING_FROM']) && $_SERVER['HTTP_COMING_FROM']) return $_SERVER['HTTP_COMING_FROM'];
		if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']) return $_SERVER['REMOTE_ADDR'];
		return '';
	}
	
	function remove_junk($str){
		return addslashes(trim(strip_tags($str)));
	}
	
	
	function decode_str($str){
		return urldecode($str);
	}
	
	function encode_str($str){
		return urlencode($str);
	}
	
	function str_decode($str){
		$str = str_replace(",", " ", $str);
		$str = str_replace("&", "and", $str);
		$str = str_replace("'", "", $str);
		$str = str_replace('"', "", $str);
		$str = str_replace('\n', "", $str);
		$str = trim(strip_tags($str));
		return $str;
	}
	
	function id_encode($str){
		return base64_encode(base64_encode($str));
	}
	
	function id_decode($str){
		return base64_decode(base64_decode($str));
	}
	
	function get_safe_data($str){
	if($str){
		//return mysql_real_escape_string($str);
		return $str;
	}
}
	
?>