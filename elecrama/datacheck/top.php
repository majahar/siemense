<div class="header">
			
            <!--a href="<?php echo PATH_REGISTER; ?>form.php" class="btn blue">Apply Now </a-->
			<a href="<?php echo PATH_REGISTER; ?>basefrm.php" class="btn blue">More Info</a>
            <a href="<?php echo APP_SITE_PATH; ?>dashboard.php" class="btn blue">Dashboard</a>

           
            
			<div style="float:right;">
            <br /><br />
				 Hello <?php echo $_SESSION['user'] ;?>
				| <a href="<?php echo APP_SITE_PATH; ?>logout.php" class="btn red"> Log Out </a>
			</div>
		</div>