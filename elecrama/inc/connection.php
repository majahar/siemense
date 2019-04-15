<?php
class connection
{
	private function connect_db()
	{
		$evcd_db = 'ceadaapp_siemens';
		$evcd_user = 'ceadaapp_siemens';
		$evcd_pswd = 'siemens@2016';
		$evcd_host = 'localhost';
		
		$con = mysql_connect($evcd_host,$evcd_user,$evcd_pswd);
		$db = mysql_select_db($evcd_db);
		
	}
	
	public function query_db($sql)
	{
		$this->connect_db();
		$res=mysql_query($sql);
		if(!$res)
		{
			$page=$this->page_name();
			$fh=fopen("inc/error_log.html","a+");
			fwrite($fh,'<tr><td>'.mysql_error().'</td><td>'.$page.'</td><td>'.date('d-m-Y H:i:s').'</td></tr>');
			fclose($fh);
			exit;
		}
		return $res;
	}
	
	public function num_db($sql)
	{
		$res=$this->query_db($sql);
		$num=0;
		if($res)
		{
			$num=mysql_num_rows($res);	
		}
		return $num;
	}
	
	public function insert($data){
		$this->connect_db();
		$query=mysql_query($data);
		
	}
	public function select_values($sql)
	{
		$res=$this->query_db($sql);
		$num=0;
		if($res)
		{
			$num=mysql_num_rows($res);	
		}
		$result=array();

		if($num)
		{
			$i=0;
			while($row=mysql_fetch_array($res))
			{
				$result[$i]=$row;
				$i++;
			}
		}
		return $result;
	}
	
	public function page_name()
	{
		$page_name=$_SERVER['DOCUMENT_ROOT'];	
		return $page_name;
	}
	
	public function host_name()
	{
		$host=$_SERVER['HTTP_HOST'];		
		return $host;
	}
}
?>