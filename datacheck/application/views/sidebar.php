<?php
$currPage=$this->uri->segment(1);
$currPage1=$this->uri->segment(2);
$currPage3=$this->uri->segment(4);

$dashboardSelect='';
$newsSelect='';
$productsSelect='';
$roadmapsSelect='';
$roadmapsGalSelect='';

if($currPage=='dashboard' || $currPage1=='dashboard'){
	$dashboardSelect='active';
}
if($currPage=='news' || $currPage=='addNews' || $currPage1=='addNews'){
	$newsSelect='active';
}
if($currPage=='products' || $currPage=='addProducts' || $currPage1=='addProducts'){
	$productsSelect='active';
}
if($currPage=='roadmap' || $currPage=='addRoadmap' || $currPage1=='addRoadmap'){
	$roadmapsSelect='active';
}
if($currPage=='roadmap_galary' || $currPage=='addRoadmap_galary' || $currPage1=='addRoadmap_galary'){
	$roadmapsGalSelect='active';
}
?>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#428bca;">
            <div class="navbar-header" style="height:92px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color:#fff; margin-top: 20px; font-size:24px;" href="<?php echo SITE_PATH;?>dashboard"><?php echo WEBSITE_NAME?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="background-color:#ddd;margin-top: 2%;margin-right: 1%;">
                
				 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        
                        <li class="divider"></li>
                        <li><a href="<?php echo SITE_PATH;?>logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="margin-top:92px; width: 150px;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
						<li><a class="<?php echo $dashboardSelect?>" href="<?php echo SITE_PATH;?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
						<li><a class="<?php echo $newsSelect?>" href="<?php echo SITE_PATH;?>news"><i class="fa fa-edit fa-fw"></i> News</a></li>
						<li><a class="<?php echo $productsSelect?>" href="<?php echo SITE_PATH;?>products"><i class="fa fa-edit fa-fw"></i> Products</a></li>
						<li><a class="<?php echo $roadmapsSelect?>" href="<?php echo SITE_PATH;?>roadmap"><i class="fa fa-edit fa-fw"></i> Roadmap</a></li>
						<li><a class="<?php echo $roadmapsGalSelect?>" href="<?php echo SITE_PATH;?>roadmap_galary"><i class="fa fa-edit fa-fw"></i> Roadmap Galary</a></li>

                        <li><a class="<?php echo $roadmapsGalSelect?>" href="<?php echo SITE_PATH;?>product_doc"><i class="fa fa-edit fa-fw"></i> Product Doc</a></li>
                        <li><a class="<?php echo $roadmapsGalSelect?>" href="<?php echo SITE_PATH;?>product_video"><i class="fa fa-edit fa-fw"></i> Product Video</a></li>

                         <li><a class="<?php echo $roadmapsGalSelect?>" href="<?php echo SITE_PATH;?>gallery"><i class="fa fa-edit fa-fw"></i> Gallery</a></li>
                           <li><a class="<?php echo $roadmapsGalSelect?>" href="<?php echo SITE_PATH;?>gallery_image"><i class="fa fa-edit fa-fw"></i> Gallery Image</a></li>
						
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
			
			
        </nav>