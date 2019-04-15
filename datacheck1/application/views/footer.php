
    </div>
    <!-- /#wrapper -->

    
	<?php
	
	if($this->uri->segment(1)=='' || $this->uri->segment(1)=='login'){
	?>
	
	<?php } else{
		?>
		<br/><br/><br/><br/><br/><br/><br/><br/><div>
		<div class="navbar navbar-default navbar-static-top" role="navigation" style="color:#fff;margin-bottom:0; background-color:#428bca;text-align:center;padding-top:13px;">
			   Powered By  <a style="color:#fff;" href="http://everymedia.world" target="_blank"><u>Everymedia</u></a> 
		</div>
	</div>
		<?php
	}?>
	
    <script src="<?php echo SITE_PATH_JS?>bootstrap.min.js"></script>
    <script src="<?php echo SITE_PATH_JS?>plugins/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo SITE_PATH_JS?>plugins/morris/raphael.min.js"></script>
    <script src="<?php echo SITE_PATH_JS?>plugins/morris/morris.min.js"></script>
    <script src="<?php echo SITE_PATH_JS?>plugins/morris/morris-data.js"></script>
    <script src="<?php echo SITE_PATH_JS?>sb-admin-2.js"></script>
</body>
</html>