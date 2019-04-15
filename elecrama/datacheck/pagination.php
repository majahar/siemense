<?php 
$curPageURL='';
if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!=''){
	$curPage=$_SERVER['REQUEST_URI'];
	$break=explode("/",$curPage);
	$count=count($break);
	$curPageURL=$break[$count-1];
	
	$curPageURL=explode("?",$curPageURL );
	$curPageURL=$curPageURL['0'];
}
$tb='';
if($curPageURL=='form.php'){
	$tb='channel_partner';
}elseif($curPageURL=='basefrm.php'){
	$tb='elecrama_contact_us';
}

if($tb!=''){
$limit=LIMIT;
$page='';
	if(isset($_GET['page'])){
		$page= $_GET['page'];
	}
	
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;	
		$con = new connection();
	$sql1 = "SELECT * from ".$tb." order by id ";	
	$results = $con->select_values($sql1);
	$total_pages=count($results);
	
	
	$sql_page = $sql1." LIMIT ".$start.", ".$limit;
	
	
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$adjacents='';
	$pagination = "";
	if($lastpage > 1)
	{	
		
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"".$targetpage."?page=".$prev.$andurl."\">   Previous</a>";
		else
			$pagination.= "<span class=\"disabled\"> Previous</span>";	
		
		//pages	
		if ($lastpage < 10 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">".$counter."</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=".$counter.$andurl."\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 4 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 5 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">".$counter."</span>";
					else
						$pagination.= "<a href=\"".$targetpage."?page=$counter.$andurl\">".$counter."</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"".$targetpage."?page=$lpm1$andurl\">".$lpm1."</a>";
				$pagination.= "<a href=\"".$targetpage."?page=".$lastpage.$andurl."\">".$lastpage."</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)&&$page<$lastpage-2)
			{
				$pagination.= "<a href=\"".$targetpage."?page=1".$andurl."\">1</a>";
				$pagination.= "<a href=\"".$targetpage."?page=2".$andurl."\">2</a>";
				$pagination.= "...";
				if ($counter == $page)
						$pagination.= "<span class=\"current\">".($counter-1)."</span>";
					else
						$pagination.= "<a href=\"".$targetpage."?page=".($page-1).$andurl."\">".($page-1)."</a>";		
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">".$counter."</span>";
					else
						$pagination.= "<a href=\"".$targetpage."?page=".$counter.$andurl."\">".$counter."</a>";					
				}
				
				if ($counter == $page)
						$pagination.= "<span class=\"current\">".$counter."</span>";
					else
						$pagination.= "<a href=\"".$targetpage."?page=".$counter.$andurl."\">".$counter."</a>";		
				$pagination.= "...";
				
				
				
				$pagination.= "<a href=\"".$targetpage."?page=$lpm1$andurl\">$lpm1</a>";
				$pagination.= "<a href=\"".$targetpage."?page=$lastpage$andurl\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"".$targetpage."?page=1".$andurl."\">1</a>";
				$pagination.= "<a href=\"".$targetpage."?page=2".$andurl."\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (3 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">".$counter."</span>";
					else
						$pagination.= "<a href=\"".$targetpage."?page=".$counter.$andurl."\">".$counter."</a>";					
				}
			}
		}
		
		//next button
		if ($page < $lastpage ) 
			$pagination.= "<a href=\"".$targetpage."?page=".$next.$andurl."\">Next </a>";
		else
				$pagination.= "<span class=\"disabled\">Next</span>";
			$pagination.= "</div>\n";		
	}
	
}else{
	$pagination='';	
}
?>