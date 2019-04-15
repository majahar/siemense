<?php
function getDropDownList($table_name='',$get_field_name='',$condition_field='',$condition_field_vale='',$order_by_field='',$order_by_value='',$select_type_value='',$drop_down_id='',$id='',$noThis=''){
	$CI =& get_instance();
	if($get_field_name!=''){
		$sql="SELECT id,".$get_field_name." from ".$table_name;
	}else{
		$sql="SELECT * from ".$table_name;
	}
	
	if($condition_field!='' && $condition_field_vale!=''){
		$sql.=" where ".$condition_field." ".$condition_field_vale;
		$sql.=" and  status !='-1'";
	}else{
		$sql.=" where status !='-1'";
	}
	if($noThis!=''){
		$sql.=" and  id !='".$noThis."'";
	}
	if($order_by_field!='' && $order_by_value!=''){
		$sql.=" order by ".$order_by_field;
		if($order_by_value!=''){
			$sql.=" ".$order_by_value;
		}else{
			$sql.=" asc";
		}
	}
	$query = $CI->db->query($sql);
	$HTML='';	 
	if($query->num_rows() > 0 && $get_field_name!='')
	{
		$HTML.='<select class="form-control" name='.$drop_down_id.' id='.$drop_down_id.'>';
			if($id>0){
				
			}else{
				if($select_type_value!=''){
					$HTML.='<option value="-1">Select '.$select_type_value.'</option>';
				}
			}
			foreach($query->result() as $row){
				if($id >0){
					if($id==$row->id){
							$HTML.='<option value="'.$row->id.'" selected>'.$row->$get_field_name.'</option>';
					}else{
						$HTML.='<option value="'.$row->id.'">'.$row->$get_field_name.'</option>';
					}
						
				}else{
					$HTML.='<option value="'.$row->id.'">'.$row->$get_field_name.'</option>';
				}
			}
		$HTML.='</select>';
	}
	echo $HTML;
}
/*getDropDownList end*/


function getSortByGridList($table_name='',$get_table_name='',$get_field_name='',$condition_field='',$condition_field_vale='',$order_by_field='',$order_by_value='',$select_type_value='',$drop_down_id=''){
	$CI =& get_instance();
    if($get_field_name!=''){
		$sql="SELECT id,".$get_field_name." from ".$table_name;
	}else{
		$sql="SELECT * from ".$table_name;
	}
	
	if($condition_field!='' && $condition_field_vale!=''){
		$sql.=" where ".$condition_field." ".$condition_field_vale;
		$sql.=" and  status !='-1'";
	}else{
		$sql.=" where status !='-1'";
	}
	
	if($order_by_field!='' && $order_by_value!=''){
		$sql.=" order by ".$order_by_field;
		if($order_by_value!=''){
			$sql.=" ".$order_by_value;
		}else{
			$sql.=" asc";
		}
	}
	$query = $CI->db->query($sql);
	$HTML='';	 
	if($query->num_rows() > 0)
	{
		$HTML.='<select name="dataTables-example_length" aria-controls="dataTables-example" 
								class="form-control input-sm sort_by_list" id="'.$drop_down_id.'_sort_by" onchange=sortDataBox(this.options[this.selectedIndex].value,"'.$get_table_name.'","'.$drop_down_id.'")>';
			$HTML.='<option value="-1">All</option>';
			foreach($query->result() as $row){
				$HTML.='<option value="'.$row->id.'">'.$row->$get_field_name.'</option>';
			}
		$HTML.='</select>';
	}
	echo $HTML;
}


function getGridListStatus($status){
	$isShow='';
	if($status=='0' || $status=='1'){
		$isShow='display:block;';
	}
	$statusArr['0']='Deactive';
	$statusArr['1']='Active';
	$statusArrCount=count($statusArr);
	$HTML='<select name="dataTables-example_length" aria-controls="dataTables-example" 
								class="form-control input-sm sort_by_list" id="status_sort_by" onchange=sortDataBox(this.options[this.selectedIndex].value,"status") style="'.$isShow.'">
									<option value="-1">All</option>';
	for($i=0;$i<$statusArrCount;$i++){
		if($status==$i){
			$HTML.='<option value="'.$i.'" selected="selected">'.$statusArr[$i].'</option>';
		}else{
			$HTML.='<option value="'.$i.'">'.$statusArr[$i].'</option>';
		}
		
	}
	$HTML.='</select>';
	echo $HTML;
}
/*getGridListStatus end*/


function getProductComboBoxHTML($id){
	$CI =& get_instance();
	$sql="select id,name from product where status!='-1' and id!='".$id."' order by name";
	$query = $CI->db->query($sql);
	$HTML='';	 
	$relatedProduct[]='9999999999';
	if($query->num_rows() > 0)
	{
		$getRelatedProduct="select rp.related_product_id from related_product rp,product p where rp.product_id='".$id."' and p.status!='-1' and p.id=rp.product_id";
		$getRelatedProductQuery = $CI->db->query($getRelatedProduct);
		if($getRelatedProductQuery->num_rows() > 0){
			foreach($getRelatedProductQuery->result() as $getRelatedProductRow){
				$relatedProduct[]=$getRelatedProductRow->related_product_id;
			}
		}
		
		$HTML.='<select  aria-controls="dataTables-example" 
								class="form-control input-sm" id="related_product" name="related_product[]" multiple style="height:200px;">';
			foreach($query->result() as $row){
				if(array_search($row->id,$relatedProduct) >0){
					$HTML.='<option value="'.$row->id.'" selected="selected">'.$row->name.'</option>';
				}else{
					$HTML.='<option value="'.$row->id.'">'.$row->name.'</option>';
				}
			}
		$HTML.='</select>';
	}
	echo $HTML;
}
/*getProductComboBoxHTML end*/


function getCheckBoxList($table_name,$id='',$selectValue,$selectTable,$selectIdList,$get_id=''){
	
	$CI =& get_instance();
        $sql="SELECT * from ".$table_name." where status!='-1'";
	$query = $CI->db->query($sql);
	$HTML='';	 
	$selectId=array();
	if($id>0){
		$sql1="SELECT * from ".$selectTable. " where status='1' and ".$get_id."='".$id."'";
		$query1 = $CI->db->query($sql1);
		if($query1->num_rows() > 0)
		{
			foreach($query1->result() as $row1){
				$selectId[]=$row1->$selectIdList;
			}		
		}
	}
	
	if($query->num_rows() > 0)
	{
		$kk=0;
		
		foreach($query->result() as $row){
			$checked='';
			if(array_search($row->id,$selectId)!== false){
				$checked='checked';
			}
			if($kk%5=='' && $kk>0){
				$HTML.='<br/><br/>'.$row->$selectValue.' <input '.$checked.' type="checkbox" value="'.$row->id.'" name="'.$selectTable.'[]" id="'.$selectTable.'">&nbsp;&nbsp;&nbsp;&nbsp;';
			}else{
				$HTML.=$row->$selectValue.' <input '.$checked.' type="checkbox"  value="'.$row->id.'" name="'.$selectTable.'[]" id="'.$selectTable.'">&nbsp;&nbsp;&nbsp;&nbsp;';	
			}			
		$kk++;
		}
	}
	echo $HTML;
}

function addCheckBoxData($tableName,$cookingData,$id,$showId,$deleteId){
	
	if(isset($cookingData['0'])){
		$count=count($cookingData['0']);
	
		if($count>0){
			$CI =& get_instance();
			
			$removeSql="delete from $tableName where ".$deleteId."='".$id."'";
			$CI->db->query($removeSql);
			
			$sql="insert into $tableName($deleteId,$showId,status) values ";
			
			for($i=0;$i<$count;$i++){
				if($i==$count-1){
					$sql.="('".$id."','".$cookingData['0'][$i]."','1')";
				}else{
					$sql.="('".$id."','".$cookingData['0'][$i]."','1'),";
				}
			}
			$CI->db->query($sql);
		}
	}
}
?>