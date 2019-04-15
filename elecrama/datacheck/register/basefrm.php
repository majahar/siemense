<?php

	session_start();
	include("../../inc/connection.php");
	include("../../inc/constants.php");
	include("../../inc/function.php");
	$limit=LIMIT;
	$page='';
	if(isset($_GET['page'])){
		$page= $_GET['page'];
	}
	
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;	
	
	if(!(isset($_SESSION['user'])))
		header("Location: ".APP_SITE_PATH."index.php");
	
	/*if(isset($_GET['dateval'])){
		$andurl = "&dateval=".$_GET['dateval'];
		$downurlurl = "?dateval=".$_GET['dateval'];
		$dateval = date("Y-m-d",strtotime($_GET['dateval']));
		$andquery = " AND r_insertdate LIKE '$dateval%' ";
	} else {
		$downurlurl = "";
		$andurl = "";
		$andquery = "";
	}*/
	$con = new connection();
	
	
		$sql = "SELECT * from elecrama_contact_us order by id desc" ;
		
		/* Setup vars for query for pagination. */
		$andurl = "";
		$targetpage = PATH_REGISTER."basefrm.php";
		$total_pages = $con->num_db($sql);
		include("../pagination.php");
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
	
<link rel="stylesheet" href="<?php echo APP_SITE_PATH_CSS; ?>style.css" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS; ?>workless.css" rel="stylesheet" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS; ?>chosen.css" rel="stylesheet" type="text/css" />
<link href="<?php echo APP_SITE_PATH_CSS; ?>stylesheet.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="<?php echo APP_SITE_PATH_CSS; ?>ui-lightness/jquery-ui-1.9.2.custom.css" />
 <script type="text/javascript">
 var APP_SITE_PATH = '<?php echo APP_SITE_PATH?>';
 </script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>datepicker.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>chosen.jquery.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>custom.js"></script>
<script type="text/javascript" src="<?php echo APP_SITE_PATH_JS; ?>siemensadmin.js"></script>
<script type="text/javascript">

/*function search_by_date(){
	$.ajax({
		url:'<?php echo PATH_REGISTER;?>user_entry_ajax.php',
		type:'POST',
		data:"dateval="+$('#Sort_by_Date').val(),
		success:function(result_str){
			$('#replace_div').html('');
			$('#replace_div').html(result_str);
			if(trim(result_str)!='No Records'){
				$('#Append_ID').html('Download Report Of: '+$('#Sort_by_Date').val());
				$('#Append_ID').show('');
				$('#Append_ID').attr("href", "");
				$('#Append_ID').attr("href", "<?php echo PATH_REGISTER;?>download_report.php?dateval="+$('#Sort_by_Date').val());
			} else {
				$('#Append_ID').html('Download Report');
				$('#Append_ID').show('');
				$('#Append_ID').attr("href", "");
				$('#Append_ID').attr("href", "<?php echo PATH_REGISTER;?>download_report.php");
			}
		}
	});
}*/
</script>
<title>Admin Panel : Register</title>
</head>
<body>
<div class="container">
                <div class="wrapper">
                    <?php include("../top.php"); 
					$sql = "SELECT * from elecrama_contact_us order by id desc";
					$sql_page = $sql." LIMIT ".$start.", ".$limit;
					//echo $sql_page;
					$results = $con->select_values($sql_page);
					$id='';
					foreach($results as $data){
						$id=$data['id'];
					}
					
					?>
           <div class="e-code-container" >
         
         <div class="filter" >
         	<?php if(sizeof($results) > 0)
       		{
           	?>
			<!--<a class="btn blue" href="<?php echo PATH_REGISTER;?>basefrmdownload.php" id="Append_ID"> <?php if(isset($_GET['dateval'])) { ?>Download Report Of: <?php } else { ?>Download Report <?php } ?></a>-->
            <?php }?>
            <!--<input type="text" name="Sort_by_Date" id="Sort_by_Date" <?php if(isset($_GET['dateval'])) { ?>value="<?php echo $_GET['dateval'];?>" <?php } else { ?> value="Search By Date" <?php } ?>onchange="search_by_date();" class="btn blue"/>
            
            <a cass="btn blue" href="<?php echo PATH_REGISTER;?>user_entry.php">Show All (reset)</a>-->
            
            
            <div id="filter_error"></div>
   		</div>
           <div id="replace_div">
           <div style="padding: 20px 5px; width:100%">
           	<div style="padding:10px;margin-bottom:15px;"><?php
              if (isset($row)) {
                echo stripslashes($row[0][1]);
              }
            ?></div>
           	<?php if(sizeof($results) > 0)
       		{
           	?>
           <table  align="left"  style=" margin:auto" >
                <tr class="even">
                    <th>SR No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Date</th>
                  
                    
                </tr>
                <?php
                 $i=0;	
                 foreach($results as $result){
					 $i++; 
                    if($i%2==0)
						$class="even";
					else
						$class="odd"; 
                 ?>
                <tr class="<?php echo $class;?>">
                    <td width="5%"><?php echo $i; ?></td>
                    <td width="25%"><?php echo decode_str($result['name']); ?></td>
                    <td width="25%"><?php echo decode_str($result['email']); ?></td>
                    <td width="25%"><?php echo decode_str($result['mobile']); ?></td>
                    <td width="10%"><?php echo decode_str($result['added_on']); ?></td>
                   
                </tr>
                <?php 
                    
                } ?>
            </table>
              <div class="clear"></div>
              <?php }else{
              	echo "No content";
              }?>
            </div>
            <div style="padding-top: 20px">
            <?php echo $pagination ;?>
            </div>
            </div>
	</div>
    <?php include("../footer.php");?>
    </div>
    <div class="clear"></div> 
   </div> 
</body>
</html>