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
			
			<div class="panel panel-default">
				
				<div class="panel-heading">
					<div class="text-right">
					<a href="<?php echo SITE_PATH;?>export_orders"  target="_blank" ><button type="button" class="btn btn-info">Export to Excel</button></a>
					</div>

				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th >#</th>
									<th >Product</th>
									<th >Quantity</th>
									<th >Total</th>
									<th >Name</th>
									<th >Mobile </th>
									<th >Email</th>
									<th >Added On</th>
								</tr>
							</thead>
							<tbody id="loaddata">
								<tr><td colspan="10" id="loaddata">
									<?php
									echo $HTML;
									?>
								</td></tr>
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
			
			