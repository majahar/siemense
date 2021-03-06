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
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-5">
							<form role="form" name="frmData" id="frmData" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label> Name </label>
									<select name="gallery_id" id="gallery_id" class="form-control">
									<?php if($this->data->galleryImages){
									$galleryImages=$this->data->galleryImages;
									foreach($galleryImages as $galleryImage): ?>
									<option value="<?php echo $galleryImage->id;?>" <?php if($galleryImage->id==$form_data['gallery_id']){echo "selected";}?>><?php echo $galleryImage->name;?></option>
									<?php 	
									endforeach;
									}
									?>	
									</select>
									<p class="help-block validation_message_error"  ></p>
								</div>	
							 <div class="form-group">
									<label>Description</label>
									<textarea class="form-control" name="description" id="description"  style="height:150px;" ><?php echo $form_data['description'];?></textarea>
									<p class="help-block validation_message_error" ></p>
								</div> 							
								<div class="form-group">
									<label>Upload File</label>
									 <input type="file" class="form-control"  name="image" id="image" />
									 <input type="hidden" name="hiddenimage" id="hiddenimage" value="<?php echo $form_data['hiddenimage'];?>" /><span>Note: Please insert 370*250 pixels dimension image	</span>									 
									<p class="help-block validation_message_error" id="typeError" ></p>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" id="status" class="form-control">
										<option value="0" <?php if($form_data['status']=='0'){echo "selected";}?>>Deactive</option>
										<option value="1" <?php if($form_data['status']=='1'){echo "selected";}?>>Active</option>
									</select>
									<p class="help-block validation_message_error" id="newsError"></p>
								</div>
								<button type="submit" class="btn btn-info" name="action" value="Submit" >Save and Go Back</button>
								<!--<button type="button" class="btn btn-info" onclick="pageRedirect('<?php echo SITE_PATH?>categories')" >Back to listing</button>-->
								
							</form>
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