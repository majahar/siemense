<?php
function pr($str){
         echo '<pre>';
         print_r($str);
         echo '<br>';
}

function prx($str){
         echo '<pre>';
         print_r($str);
         die();
}

function string_sub_str($str,$limit){
	return substr($str,0,$limit);
}

function make_valid_image_name($str){
	$str=str_replace("'","_",$str);
	$str=str_replace('"',"_",$str);
	$str=str_replace('(',"_",$str);
	$str=str_replace(')',"_",$str);
	$str=str_replace('!',"_",$str);
	$str=str_replace('-',"_",$str);
	$str=str_replace(' ',"_",$str);
	$num=rand(000000,999999);
	$str=$num.'_'.$str;
	return strtolower($str);
}

function getPagination($count){
      $perPage=getPerPageNo();
	  $paginationCount= floor($count / $perPage);

      $paginationModCount= $count % $perPage;
      if(!empty($paginationModCount)){
         $paginationCount++;
      }

      return $paginationCount;
}

function get_safe_data($str){
	if($str){
		return mysql_real_escape_string($str);
	}
}

function getPerPageNo(){
	return PAGE_PER_NO;
}

function getValueByTableFieldId($table,$field,$getField,$value){
	$CI =& get_instance();
	$query = $CI->db->query("SELECT ".$getField." from ".$table." where ".$field." ='$value' and status!='-1'");
	if($query->num_rows > 0){
		$result= $query->result();
		return $result['0'];
	}
}

function showDateFromDateTime($datetime){
	$str=strtotime($datetime);
	return date("F jS-Y",$str);
}


function getDateFormated($date,$format){
	$d=strtotime($date);
	return date($format,$d);
}

?>