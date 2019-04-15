<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--<form name ="userinput" method="post" >
				<div class="container">
									<label><b>Name</b></label>
									<input type="text" placeholder="Enter Full name" name="rfullname" id="rfullname">
									<div id="rfull_error" class="error"></div>
									
									<label><b>Email</b></label>
									<input type="text" placeholder="Enter Email" name="remail" id="remail" >
									<div id="remail_error" class="error"></div>
									<label><b>Mobile</b></label>
									<input type="text" placeholder="Enter Mobile Number" name="rmobile" id="rmobile" >
									<div id="rmobile_error" class="error"></div>
									
									<label><b>OTP</b></label>
									<input type="text" placeholder="Enter your otp" name="otp" id="otp" >
									<div id="otp_error" class="error"></div>
									
									<label><b>Location</b></label>
									<select name="location" id="rlocation">
													<option value="mumbai">Mumbai</option>
													<option value="pune">Pune</option>
													<option value="indore">Indore</option>
													<option value="jaipur">Jaipur</option>
									</select>
												<div class="clearfix">
													<button type="submit" class="signupbtn" onclick="return rformSubmit();">Submit</button>
									</div>
				</div>
</form >-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Siemens</title>
		<link href="<?php echo SITE_URL_CSS;?>bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>reset.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>slick-theme.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>slick.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>style.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>mediaquery.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>owl.theme.default.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>lightslider.min.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>font-awesome.min.css" rel="stylesheet">
	</head>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script>
	'article aside footer header nav section time'.replace(/\w+/g,function(n){document.createElement(n)});
	</script>
	<body>
		<div class="overlay">
			<div class="video">
				<video controls id="my-video">
					<source src="<?php echo SITE_URL_IMAGES;?>/Digital-Enterprise-Suite.mp4" type="video/mp4">
					Your browser does not support HTML5 video.
				</video>
			</div>
			<div class="close_icon">X</div>
		</div>
		<div class="container-fluid">
			<header>
				<div class="logo">
					<img src="<?php echo SITE_URL_IMAGES;?>/logo.png" width="143" height="48" alt="">
				</div>
				<div class="banner">
					<div class="container">
						<div class="col-sm-12">
						<div class="contentblock">
							<div class="main_content">
								<div class="lftvideo"><img src="<?php echo SITE_URL_IMAGES;?>/video.jpg" width="75" height="74" alt=""></div>
								<h2>Driving Digitalization <br> to Indian Enterprises</h2>
								<div class="cl"></div>
							</div>
						</div>
						<div class="content_box">
							<p>Innovative technology from Siemens can help India trun its vast potential into reality, offering sustainable development for all its citizens. </p>
						</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<div class="registration container-fluid">
			<div class="container">
				<div class="contentbox">
					<div class="col-sm-12">
					<h2>Register</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.
					Sed quis fermentum quam, sed tempor enim. </p>
					</div>
				</div>
				<form name ="userinput" id ="userinput" method="post" >
					<div class="form_section">
						<div class="col-sm-6 col-xs-12">
							<input type="text" placeholder="Name" name="rfullname" id="rfullname">
							<div id="rfull_error" class="error"></div>
							<input type="text" placeholder="Contact No" name="rmobile" id="rmobile" >
							<div id="rmobile_error" class="error"></div>
							<input type="text" placeholder="Enter OTP" name="otp" id="otp">
							<div id="otp_error" class="error"></div><div id="rmobile_otp" class="error1"></div>
							<input type="hidden" name="sales_p_id" id="sales_p_id" value="self">
						</div>
						<div class="col-sm-6 col-xs-12">
							<input type="text" placeholder="Email" name="remail" id="remail" >
							<div id="remail_error" class="error"></div>
							<select name="location" id="rlocation">
								<option value="mumbai">Mumbai</option>
								<option value="pune">Pune</option>
								<option value="indore">Indore</option>
								<option value="jaipur">Jaipur</option>
							</select>
						</div>
					</div>
					<div class="col-md-8 form_section_btn">
						<a class="send_button" onclick="return rformotp();">Send OTP</a>
						<a class="resend_button" onclick="return reformotp();">Resend OTP</a>
						<button type="submit" class="submit_button" onclick="return rformSubmit();" disabled>Submit</button>
						<div class="refresh" ><img src="<?php echo SITE_URL_IMAGES;?>/reload.png" width="16" height="17" alt=""></div>
						<div class="cl"></div>
					</div>
				</form>
			</div>
		</div>
		<div class="container-fluid seimens_tab">
			<div class="container">
				<div class="inner_tab">
					<ul class="tabs">
						<li class="col-md-4 col-sm-4 col-xs-4 current tab-link" data-tab="tab-1"><a href="">Tour</a></li>
						<li class="col-md-4 col-sm-4 col-xs-4 roadmap_tab" data-tab="tab-2"><a href="">RoadMap</a></li>
						<li class="col-md-4 col-sm-4 col-xs-4" data-tab="tab-3"><a href="">Products</a></li>
						<!-- <li class="col-md-3 col-sm-3 col-xs-3" data-tab="tab-4"><a href="">News & Events</a></li> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<!--First-->
			<div id="tab-1" class="seimens_tab_con tab-content current">
				<div class="topcon">
					<div class="col-sm-12">
					<h6>Project background</h6>
					<!-- <h2>H2 Chapter headline lorem ipsum</h2> -->
					<p>The Ingenuity Tour is a 120 city tour across the Industrial hubs of India targeting Small and medium Enterprises (SMEs). These SMEs contribute more than 60% to India’s industrial output. Many organizations and technology/ service providers are ‘talking’ about Industry 4.0 and digitalization. However many organizations are unable to clearly see the possibilities of digitalization for their own enterprise. We want to be the first mover to ‘demonstrate’ our digitalization capabilities through our products.</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="tourimg conimg col-sm-12 col-xs-12"><img src="<?php echo SITE_URL_IMAGES;?>/tour.jpg" class="img-responsive" alt="">
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
					</div>
				</div>
				<div class="col-sm-6">
					<div class="content">
						<h2>Market Situation</h2>
						<p>The next revolution in the IoT – Internet of all Things or Industrie 4.0 in manufacturing sector across globe wherein the digitalization would enable the data analysis and enabling to make digital twin of the manufacturing processes end to end thereby resulting in faster response to market, optimization of resources, and increase in efficiency of production.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="inside_truck">
					<div class="col-sm-6">
						<div class="truckimg conimg col-sm-12 col-xs-12"><img src="<?php echo SITE_URL_IMAGES;?>/inside_truck.jpg" alt="" class="img-responsive">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
						</div>
					</div>
					<div class="col-sm-6">
						<div class="content">
							<h2>What’s inside the truck?</h2>
							<p>The truck showcases the elements which enables digitalization for SME’s across country for both process and discrete industries. </p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="siemens_background">
					<div class="col-sm-6">
						<div class="content">
							<h2>What’s the new benefit to the customer?</h2>
							<p>Customers are benefited due to the technological leapfrog way of manufacturing through digitalization/ IoT platform enabling them to make virtual manufacturing/digital twin of the entire process and test it thereby increasing their response time to market, increasing efficiency and making them more competitive.
							</p>
							<p>
								The Ingenuity truck has an integrated approach for manufacturing by bringing in various PD & DF solutions (from PLM, FA, PA, CP, MC, CP, LD, CS) and SFS. It  will also be showcasing ‘MindSphere (Siemens IoT platform for businesses)’ in select cities.
							</p>
							<p>
								The aim is to help enterprises in the Manufacturing sector identify a starting point or a blue print for digitalizing their enterprise, irrespective if the stage of automation they are in.
							</p>
							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="content">
							<h2>Siemens Background</h2>
							<p>Siemens is a 169 year old global powerhouse focusing on the areas of electrification, automation and digitalization. One of the world’s largest producers of energy-efficient, resource-saving technologies, Siemens is a leading supplier of systems for power generation and transmission as well as medical diagnosis. In infrastructure and industry solutions the company plays a pioneering role.</p>
							<a href="https://www.siemens.com/global/en/home/company/about.html">https://www.siemens.com/global/en/home/company/about.html</a>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="process">
						<div class="col-sm-6">
							<a href="javascript:void(0);">View Digital Enterprise for Process Industries</a>
						</div>
						<div class="col-sm-6">
							<a href="https://www.siemens.com/global/en/home/products/software/mindsphere.html"><button>Mindsphere</button></a>
						</div>					
					</div>
				</div>
				
			</div>
			<!--Second-->
			<div id="tab-2" class="roadmap tab-content">
				<div class="col-sm-12">
				<h3>RoadMap</h3>
				</div>
				<div class="autocom">
					<?php
					if($this->data->roadmap){
					$roadmaps=$this->data->roadmap;
					$i = 1;
					foreach($roadmaps as $roadmap): ?>
					<div class="col-sm-4">
						<div class="item divc" id="item<?php echo $i ?>">
							<p><?php echo $roadmap->name;?></p>
						</div>
					</div>
					<div class="info item<?php echo $i ?>">
						<div class="col-md-12 item-data">
							<div class="combine-data">
							<div class="col-md-6">
								<div class="content">
									<h3><?php echo $roadmap->heading;?></h3>
									<h4><?php echo $roadmap->description;?></h4>
								</div>
							</div>
							<div class="col-md-6">
								<div class="slider-container">
									<div  class="slider owl-carousel">
										<?php
											$raodmap_gallerys=$this->data->raodmap_gallery;
											foreach($raodmap_gallerys as $raodmap_gallery):
											if($roadmap->id == $raodmap_gallery->road_id){
										?>
										<div class="item">
											<div class="content">
												<img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $raodmap_gallery->gallery_image;?>" class="img-responsive">
											</div>
										</div>
										<?php }
																						endforeach;
										?>
									</div>
								</div>
								<div class="thumbnail-slider-container">
									<div class="thumbnail-slider thumbnailSlider owl-carousel">
										<?php
											$raodmap_gallerys=$this->data->raodmap_gallery;
											foreach($raodmap_gallerys as $raodmap_gallery):
											if($roadmap->id == $raodmap_gallery->road_id){
										?>
										<div class="item">
											<div class="content">
												<img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $raodmap_gallery->gallery_image;?>" class="img-responsive">
											</div>
										</div>
										<?php }
																						endforeach;
										?>
									</div>
								</div>
								
							</div>
							<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<?php $i++;
					endforeach;
					}
					?>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-12">					
					<div class="route_map">
						<h3>Route Map</h3>
						<img src="<?php echo SITE_URL_IMAGES;?>map.gif" alt="" class="img-responsive">
					</div>
				</div>
			</div>
			<!--Third-->
			<div id="tab-3" class="roadmap product tab-content">
				<div class="col-sm-12">
				<h3>Products</h3>
				</div>
				<div class="autocom">
						<div class="col-sm-4">
							<div class="item divc" id="item_info1">
								<p>digitalization</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info2">
								<p>industry software</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info3">
								<p>digital enterprise</p>
							</div>
						</div>
						<div class="info item_info1">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>DIGITALIZATION</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="https://www.siemens.com/global/en/home/company/topic-areas/digitalization.html" target="_blank"><h6>Read more for Digitalization</h6></a>
											<a href="https://www.siemens.com/global/en/home/company/topic-areas/future-of-manufacturing/digital-enterprise.html" target="_blank"><h6>Read more for Realize your digital transformation now with the Digital Enterprise Suite</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="https://www.youtube.com/embed/Aw1F8rtwHaU"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>
						<div class="info item_info2">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRY SOFTWARE</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/2-industry-software/1-NX-MCD-PLM.pdf" target="_blank"><h6>Mechatronics Concept Designer</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/2-industry-software/2-NX-CAD-PLM.pdf" target="_blank"><h6>NX Power to reshape the future</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="content">
											
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>
						<div class="info item_info3">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>DIGITAL ENTERPRISE</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive"></a>			
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS1.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS2.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS3.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS4.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS5.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod3.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod4.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod4.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item divc" id="item_info4">
								<p>mindsphere</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info5">
								<p>automation</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info6">
								<p>integrated control panel</p>
							</div>
						</div>
						<div class="info item_info4">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>MINDSPHERE</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/4-mindsphere/MindSphereLong.pptx" target="_blank"><h6>MindSphere Paradigms shift of the digitalization</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/4-mindsphere/MindSphere_Print_1-PagerMindSphere_EN.pdf" target="_blank"><h6>Pager Mind Sphere</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/4-mindsphere/imdata.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/4-mindsphere/MindSphere.mov"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/4-mindsphere/MindSphere_Video_MindSphere Trailer_EN.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod3.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>					
						<div class="info item_info5">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>AUTOMATION</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/4-mindsphere/MindSphereLong.pptx" target="_blank"><h6>Totally Integrated Automation in the Digital Enterprise</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="https://www.youtube.com/embed/SMeu1h3koB0"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>					
						<div class="info item_info6">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INTEGRATED CONTROL PANEL</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/6-integrated-control-panel/4-Sivacon.pdf" target="_blank"><h6>Safe power distribution, intelligent data and process management</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/6-integrated-control-panel/sivacon-EDM-FINAL-Hi-Res.pdf" target="_blank"><h6>SIVACON innovations</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="content">
											
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item divc" id="item_info7">
								<p>industrial controls</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info8">
								<p>drives</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info9">
								<p>solution for machine tools</p>
							</div>
						</div>
						<div class="info item_info7">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRIAL CONTROLS</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>product/7-industrial-controls/S14012-SIEPAN-8PU-LV-Switchboards-Catalogue-21-6-17.pdf" target="_blank"><h6>SIEPAN 8PU Low Voltage Switchboards Technology by Siemens</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="content">
											
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>					
						<div class="info item_info8">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>DRIVES</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/8-drives/SINAMICS-G120C.pdf" target="_blank"><h6>SINAMICS G120C</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/8-drives/SINAMICS-V20.pdf" target="_blank"><h6>SINAMICS V20 Smart Access</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/8-drives/SINAMICS-V90.pdf" target="_blank"><h6>SINAMICS V90</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/8-drives/sinamics-v20-2016-en.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/8-drives/v90-promotion-video-en-08_1.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>					
						<div class="info item_info9">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>SOLUTION FOR MACHINE TOOLS</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/9-solution-for-machine-tools/SINUMERIK-828D.pdf" target="_blank"><h6>SINUMERIK 828D</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/9-solution-for-machine-tools/SINUMERIK-PPU 161.pdf" target="_blank"><h6>The all new SINUMERIK PPU 161</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/9-solution-for-machine-tools/Digitalization-for-Machine-Tools.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/9-solution-for-machine-tools/SINUMERIK-PPU290.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/9-solution-for-machine-tools/SINUMERIK-TOP-SURFACE.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod3.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item divc" id="item_info10">
								<p>industrial communications</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info11">
								<p>energy efficient motors</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info12">
								<p>industry services</p>
							</div>
						</div>
						<div class="info item_info10">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRIAL COMMUNICATIONS</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/10-industrial-communications/S13740-SINEMA-RC-Promo-Pack-Flyer-27-4-17.pdf" target="_blank"><h6>Secured remote access made easy!</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="content">
											
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>
						<div class="info item_info11">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>ENERGY EFFICIENT MOTORS</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/11-energy-efficient-motors/LV-Motors.pdf" target="_blank"><h6>SInnovative IE4 motors to give you a competitive lead</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/11-energy-efficient-motors/Low-voltage-motors-in-IE4.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>
						<div class="info item_info12">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRY SERVICES</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/12-industry-services/EA_SalesPres_11-Pager_EN_16-9.pptx" target="_blank"><h6>Energy Analytics</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/12-industry-services/Revised_Energy-Analytics_EN.pdf" target="_blank"><h6>Energy Analytics</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/12-industry-services/revised_sinumerik-828--sw-47--11pager--en.pdf" target="_blank"><h6>SINUMERIK 828 SW 4.7</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/12-industry-services/S13620-Industry-services-Flyer17-4-17(7).pdf" target="_blank"><h6>Technology-based services to shape up your digital future</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/12-industry-services/sinumerik-828--sw-47--11pager--en.pptx" target="_blank"><h6>SINUMERIK 828 SW 4.7</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="https://www.youtube.com/embed/SMeu1h3koB0"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="https://www.youtube.com/embed/SMeu1h3koB0"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="item divc" id="item_info13">
								<p>industrial training</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="item divc" id="item_info14">
								<p>financial services</p>
							</div>
						</div>
						<div class="info item_info13">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRIAL TRAINING</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="content">
											
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>
						<div class="info item_info14">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>FINANCIAL SERVICES</h3>
											<h4>Lorem ipsum dolor sit amet, cottnsectetur adipiscing elit. In tempor diam quis ornare faucibus. Nam a semper nibh. Quisque porta est eget accumsan condimentum. Curabitur porttitor hendrerit molestie.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/14-financial-services/financing-machine-tools.pdf" target="_blank"><h6>Attractive financing for machine tools: Flexibly controlled</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/14-financial-services/sfs-in-cof-plastic-flyer.pdf" target="_blank"><h6>Finance made easy</h6></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="content">
											
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>
				</div>
			</div>
			<!--Fourth-->
			
			<div id="tab-4" class="news tab-content">
				<div class="events">
					<h3>News & Events</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra quam id gravida mattis.<br>
					Pellentesque fermentum semper ultricies. Cras rhoncus ante in rhoncus ullamcorper</p>
					<div class="event_gallery" id="demos">
						<div class="row">
							<ul class="owl-carousel owl-theme">
								<?php
								if($this->data->news){
								$newss=$this->data->news;
								foreach($newss as $news): ?>
								
								<li class="item">
									<div class="slde1 col-md-12">
										<div class="img">
										<img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $news->image;?>" width="250" height="142"> </div>
										<div class="col-md-6 pad5"><a href="<?php echo $news->newlink;?>"><?php echo $news->link_name;?></a></div>
										<div class="col-md-6 pad5"><span><?php echo $news->newsdate;?></span></div>
										<div class="content">
											<h4><?php echo $news->heading;?></h4>
											<p><?php echo $news->description;?></p>
										</div>
									</div>
								</li>
								<?php
									//$i++;
								endforeach;
								?>
								<div class="cl"></div>
							</ul>
						</div>
					</div>
					<div class="share">
						<h2>Share</h2>
						<ul>
							<li><a href="#" class="twitt"></a></li>
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="yout"></a></li>
							<div class="cl"></div>
						</ul>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		
		<div class="contact_siemens_section container-fluid">
			<div class="container">
				<div class="col-md-4">
					<div class="contact_siemens">
						<h3>Contact Siemens</h3>
						<p>Contact our toll free # <a href="telto:1800-209-1800">1800-209-1800</a></p>
						<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:ingenuitytour@siemens.com">ingenuitytour@siemens.com</a></p>
					</div>
				</div>
				<div class="col-md-6 hidden-xs hidden-sm"></div>
				<div class="col-md-2">
					<div class="follow_us">
						<h3>Follow us</h3>
						<ul>
							<li><a href="javascript:void(0);"><i class="fa fa-twitter fa-twitt fa-lg" aria-hidden="true"></i></a></li>
							<!-- <li><a href="javascript:void(0);"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></li> -->
							<li><a href="javascript:void(0);"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a></li>
							<div class="cl"></div>
						</ul>
					</div>
				</div>
				<div class="list col-md-12">
					<ul>
						<li><a href="">Siemens india website</a></li>
						<li><a href="">&copy;&nbsp;Siemens Ltd., 1996-2017</a></li>
						<li><a href="">Corporate information</a></li>
						<li><a href="">Privacy policy</a></li>
						<li><a href="">cookie policy</a></li>
						<li><a href="">Terms of use</a></li>
						<li><a href="">Digital ID</a></li>
						<div class="cl"></div>
					</ul>
				</div>
			</div>
		</div>
		<!-- overlay -->
		<div class="imgoverlay imgoverlay1">
			<img src="<?php echo SITE_URL_IMAGES;?>tour.jpg" class="img-responsive">
			<div class="close_icon">X</div>
		</div>
		<div class="imgoverlay imgoverlay2">
			<img src="<?php echo SITE_URL_IMAGES;?>inside_truck.jpg" class="img-responsive">
			<div class="close_icon">X</div>
		</div>
		<!-- overlay -->
		<div class="videopopup">
			<iframe src="https://www.youtube.com/embed/SMeu1h3koB0" frameborder="0" allowfullscreen></iframe>
			<div class="close_icon">X</div>
		</div>
		<script src="<?php echo SITE_URL_JS;?>jquery-1.11.0.min.js"></script>
		<script src="<?php echo SITE_URL_JS;?>jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo SITE_URL_JS;?>bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo SITE_URL_JS;?>slick.js" type="text/javascript"></script>
		<script src="<?php echo SITE_URL_JS;?>owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo SITE_URL_JS;?>lightslider.js" type="text/javascript"></script>
		<script src="<?php echo SITE_URL_JS;?>common.js"></script>
		<script>
		$(document).ready(function () {
			// reference for main items
			var slider = $('.slider');
			// reference for thumbnail items
			var thumbnailSlider = $('.thumbnailSlider');
			//transition time in ms
			var duration = 250;
			// carousel function for main slider
			slider.owlCarousel({
				loop:false,
				nav:false,
				items:1
				}).on('changed.owl.carousel', function (e) {
				//On change of main item to trigger thumbnail item
					thumbnailSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
					});
					// carousel function for thumbnail slider
					thumbnailSlider.owlCarousel({
					loop:false,
					// center:true, //to display the thumbnail item in center
					nav:false,
					responsive:{
					0:{
					items:3
					},
					600:{
					items:4
					},
					1000:{
					items:6
					}
					}
				}).on('click', '.owl-item', function () {
				// On click of thumbnail items to trigger same main item
				slider.trigger('to.owl.carousel', [$(this).index(), duration, true]);
				}).on('changed.owl.carousel', function (e) {
				// On change of thumbnail item to trigger main item
				slider.trigger('to.owl.carousel', [e.item.index, duration, true]);
			});
			//These two are navigation for main items
			$('.slider-right').click(function() {
				slider.trigger('next.owl.carousel');
			});
			$('.slider-left').click(function() {
				slider.trigger('prev.owl.carousel');
			});
		});
		</script>
		<script>
		$(document).ready(function(e){
			$('ul.tabs li').click(function(event){
				var tab_id = $(this).attr('data-tab');
				$('ul.tabs li').removeClass('current');
				$('.tab-content').removeClass('current');
				$(this).addClass('current');
				$("#"+tab_id).addClass('current');
				event.preventDefault();
			});
			
			$(".regular").slick({
				dots: true,
				infinite: true,
						arrows : false,
				slidesToShow: 4,
				slidesToScroll: 3
			});
					
			$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				responsiveClass:true,
				responsive:{
				0:{
				items:1,
				nav:true
				},
				600:{
				items:3,
				nav:false
				},
				1000:{
				items:3,
				nav:true,
				loop:false
				}
				}
			});
			$('.lftvideo').click(function(e) {
				$('.overlay').fadeIn();
			});
			$('.close_icon').click(function(e){
				$('.overlay').fadeOut();
			});
			$('.tourimg img').click(function(e) {
				$('.imgoverlay1').fadeIn();
			});
			$('.imgoverlay1 .close_icon').click(function(e){
				$('.imgoverlay1').fadeOut();
			});
			$('.truckimg img').click(function(e) {
				$('.imgoverlay2').fadeIn();
			});
			$('.imgoverlay2 .close_icon').click(function(e){
				$('.imgoverlay2').fadeOut();
			});

			$('.videopopup').eq(0).children('iframe').attr('src', 'https://www.youtube.com/embed/SMeu1h3koB0');
			$('.video_container a').on('click', function() {
				var getTarget = $(this).data('target');
				var getFramesrc = $(this).data('iframe');
				console.log(getFramesrc);
				$('.videopopup').children('iframe').attr('src', '');
				$('.videopopup').children('iframe').attr('src', getFramesrc);
			});
			$('.video_container a').click(function(e) {
				$('.videopopup').fadeIn();
			});
			$('.videopopup .close_icon').click(function(e){
				$('.videopopup').fadeOut();
			});
		});		
		</script>
		<script>
		$(document).ready(function(e) {
			$('.item').click(function(e) {
				$('.image-gallery').lightSlider({
					gallery:true,
					item:1,
					thumbItem:9,
					slideMargin: 0,
					speed:500,
					auto:true,
					loop:true,
					onSliderLoad: function() {
					$('.image-gallery').removeClass('cS-hidden');
					}
				});
			});
		});
		</script>
		<script>
		$('div.item.divc').on('click', function(event) {
			var acc_val=$(this).attr("id");
			$('div.info').slideUp();
			$('.item.divc').find('p').css('padding-bottom', '10px');
			$('.item.divc').css('margin-bottom', '10px');
			if ($('div.info.'+acc_val).is(':hidden') == true) {
				$('div.info.'+acc_val).slideDown('100');
				$(this).find('p').css('padding-bottom', '20px');
				$(this).css('margin-bottom', '0px');
			}
		});
		// for (var i = 3; i <= 20; i+=3) {
		// 	console.log(i);
		// }
		// var divs = $(".demochk ul > li");
		// for(var i = 0; i < divs.length; i+=3) {
		//   divs.slice(i, i+3).wrapAll("<div class='new'></div>");
		// }
		$('.demochk ul li:nth-child(3n)').after('<li class="clear"></li>');
		$('.seimens_tab .tabs li.roadmap_tab ').one('click', function(){
			var winW=$(window).width();
			if(winW>767){
				var $children = $('#tab-2 .autocom .col-sm-4');
				for(var i = 0, l = $children.length; i < l; i += 3) {
				    $children.slice(i, i+3).wrapAll('<div class="parent"></div>');
				}
			}
		});
		</script>
	</body>
</html>