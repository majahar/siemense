 <div id="page-wrapper" style="margin: 0 0 0 150px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $sectionName?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<?php
					$nameSelect='';
					$search_grid_box='';
					$search_grid_box_value='';
					if($searchByFieldValue!=''){
						echo '<div class="dataSearchMessage"><h3>Data search by:'. $searchByFieldValue.'</h3></div>';
					}
					if($status=='1' || $status=='0'){
						if($status=='1'){
							$statusMsg='Active';
						}elseif($status=='0'){
							$statusMsg='Deactive';
						}
						echo '<div class="dataSearchMessage"><h3>Data filter by:'. $statusMsg.'</h3></div>';
					}
					
					?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<!-- <select name="dataTables-example_length" aria-controls="dataTables-example" 
								class="form-control input-sm" onchange="searchDataBox(this.options[this.selectedIndex].value)" id="seatch_by_data">
									<option value="-1">Search By</option>
									<?php
									if($searchByField=='name'){
										$nameSelect="selected='selected'";
										$search_grid_box='display:block;';
										$search_grid_box_value=$searchByFieldValue;
									}
									?>
									<option value="name" <?php echo $nameSelect?>>Name</option>
							</select> 
							<input id="search_grid_box" type="textbox" class="form-control input-sm" style="width:20%;margin-left:20px;<?php echo $search_grid_box?>" value="<?php echo $searchByFieldValue?>">
							<button type="button" class="btn btn-info" id="grid_search_button" onclick="gridSearchData()" style="<?php echo $search_grid_box?>">Search</button> -->
                        
							
							<!-- <select name="dataTables-example_length" aria-controls="dataTables-example" 
								class="form-control input-sm" onchange="sortDataBox(this.options[this.selectedIndex].value,'')">
									<option value="-1">Filter By</option>
									<?php
									$orderSelectStatus='';
									$showSelectStatus='';
									if($status=='1' || $status=='0'){
										$orderSelectStatus="selected='selected'";
										$showSelectStatus='display:block;';
									}
									?>
									<option value="status" <?php echo $orderSelectStatus?>>Status</option>
									
							</select> 
							
							<?php
							echo getGridListStatus($status);
							?> -->
							<!-- <button type="button" class="btn btn-default" onclick="pageRedirect('<?php echo SITE_PATH?>roadmap')" >Clear Filter</button> -->
							<a class="btn btn-default" href="<?php echo SITE_PATH?>addProductVideo" >Add Product Video</a>
							
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
											<!-- <th>#</th> -->
											<th >Product Name</th>
											<!-- <th >Description</th> -->
											<th >Link</th>
											<th ></th>
																				
											
						
                                        </tr>
                                    </thead>
                                    <tbody id="loaddata">
                                     		<?php
											echo $HTML;
											?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
								<?php
								echo $paginationHTML;
								?>
							</div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                 <!-- /.row -->
           
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		
		<form name="frmSort" id="frmSort" method="get">
			<input type="hidden" id="perPage" name="perPage" value="<?php echo $perPage;?>"/>
			<input type="hidden" id="status" name="status" value="<?php echo $status;?>"/>
			<input type="hidden" id="orderByField" name="orderByField" value="<?php echo $orderByField;?>"/>
			<input type="hidden" id="orderByFieldValue" name="orderByFieldValue" value="<?php echo $orderByFieldValue;?>"/>
			<input type="hidden" id="orderByFieldValueChange" name="orderByFieldValueChange" value="<?php echo $orderByFieldValueChange;?>"/>
			<input type="hidden" id="searchByField" name="searchByField" value="<?php echo $searchByField;?>"/>
			<input type="hidden" id="searchByFieldValue" name="searchByFieldValue" value="<?php echo $searchByFieldValue;?>"/>
			<input type="hidden" id="selectTab" name="selectTab" value="<?php echo $selectTab;?>"/>
		</form>
		
		