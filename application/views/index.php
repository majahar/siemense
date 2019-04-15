<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Siemens</title>
		<link rel="shortcut icon" href="<?php echo SITE_URL_IMAGES;?>/favicon.ico" type="image/vnd.microsoft.icon" />
		<link href="<?php echo SITE_URL_CSS;?>bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>reset.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>owl.theme.default.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>style.css" rel="stylesheet">
		<link href="<?php echo SITE_URL_CSS;?>mediaquery.css" rel="stylesheet">
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
			<div class="close_icon"><img src="<?php echo SITE_URL_IMAGES;?>/close.png" alt=""></div>
		</div>
		<div class="container-fluid">
			<header>
				<div class="logo">
					<img src="<?php echo SITE_URL_IMAGES;?>/logo.png" width="143" height="48" alt="">
				</div>
				<div class="mobile-banner"></div>
				<div class="banner">
					<div class="container">
						<div class="col-sm-12">
						<div class="contentblock">
							<div class="main_content">
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
						<ul>
							<li>
								<input type="text" placeholder="Name" name="rfullname" id="rfullname">
								<div id="rfull_error" class="error"></div>
							</li>
							<li>
								<input type="text" placeholder="Email" name="remail" id="remail" >
							         <div id="remail_error" class="error"></div>
							</li>
							<li>
								<input type="text" placeholder="Contact No" name="rmobile" id="rmobile" >
								<div id="rmobile_error" class="error"></div>
							</li>
							<li>
								<select name="location" id="rlocation">
									<option value="mumbai">Mumbai</option>
									<option value="pune">Pune</option>
									<option value="indore">Indore</option>
									<option value="jaipur">Jaipur</option>
								</select>
							</li>
							<li>
								<input type="text" placeholder="Enter OTP" name="otp" id="otp">
								<div id="otp_error" class="error"></div><div id="rmobile_otp" class="error1"></div>
								<input type="hidden" name="sales_p_id" id="sales_p_id" value="self">
							</li>
						</ul>
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
						<li class=" current tab-link" data-tab="tab-1"><a href="">Tour</a></li>
						<li class="roadmap_tab" data-tab="tab-2"><a href="">RoadMap</a></li>
						<li data-tab="tab-3"><a href="">Inside Truck</a></li>
						<li data-tab="tab-4"><a href="">News & Events</a></li>
						<li data-tab="tab-5"><a href="">Gallery</a></li>
					</ul>
					<div class="clearfix"></div>
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
					<p>The Ingenuity Tour is a 120 city tour across the Industrial hubs of India targeting Small and medium Enterprises (SMEs). These SMEs contribute more to India’s industrial output than MNC companies. IoT, Industrie 4.0 are catchphrases today for the manufacturing industry. Many organizations and technology/ service providers are ‘talking’ about Industry 4.0 and digitalization. However SMEs are unable to clearly see the possibilities of digitalization for their own enterprise. Siemens is uniquely positioned in this segment with our experience in Electrification, Automation and Digitalization of Industrial enterprises. We want to be the first mover to ‘demonstrate’ our digitalization capabilities through our products.</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="tourimg conimg col-sm-12 col-xs-12">
						<div class="lftvideo"><img src="<?php echo SITE_URL_IMAGES;?>/video.jpg" width="75" height="74" alt=""></div>
						<img src="<?php echo SITE_URL_IMAGES;?>/tour.jpg" class="img-responsive" alt="">
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-sm-6">
					<div class="content">
						<h2>Market Situation</h2>
						<p>The next revolution in the IoT – Internet of all Things or Industrie 4.0 in manufacturing sector across globe wherein the digitalization would enable the data analysis and enabling to make digital twin of the manufacturing processes end to end thereby resulting in faster response to market, optimization of resources, and increase in efficiency of production.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- <div class="inside_truck">
					<div class="col-sm-6">
						<div class="truckimg conimg col-sm-12 col-xs-12"><img src="<?php //echo SITE_URL_IMAGES;?>/inside_truck.jpg" alt="" class="img-responsive">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="content">
							<h2>What’s inside the truck?</h2>
							<p>The truck showcases the elements which enables digitalization for SME’s across country for both process and discrete industries. </p>
						</div>
					</div>
				</div> -->
				<div class="siemens_background">
					<div class="col-sm-6">
						<div class="content">
							<h2>What’s the new benefit to the customer?</h2>
							<p>Customers are benefited due to the technological leapfrog way of manufacturing through digitalization/ IoT platform enabling them to make virtual manufacturing/digital twin of the entire process and test it, thereby increasing their response time to market, increasing efficiency and making them more competitive.
							</p>
							<p>
								The Ingenuity truck has an integrated approach for manufacturing by bringing in various solutions from Process Industries and Drives, Digital Factory, Siemens Industry Software, Siemens Financial Services & Siemens IoT platform ‘MindSphere’ for SME customers.
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
					<div class="tab-title-info">
						<h3>Inside Truck</h3>
						<p>The truck showcases the elements which enables digitalization for manufacturing SME’s across country from both process and discrete industries. </p>
					</div>
				</div>
				<div class="autocom">

				<!-- start-->
                  
				 <?php                        $i=1;
											$products=$this->data->product;
											foreach($products as $product):
										?>
                 <div class="col-sm-4">
							<div class="item divc" id="item_info<?php echo $i ?>">
								<p><?php echo $product->name ?></p>
							</div>
						</div>
						<div class="info item_info<?php echo $i ?>">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3><?php echo $product->name ?></h3>
											<h4><img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $product->image;?>" class="img-responsive" alt=""><?php echo $product->description ?></h4>

											 <?php                      
											$product_docs=$this->data->product_docs;
											foreach($product_docs as $product_doc):
												if($product->id == $product_doc->product_id){
										?>

											<a href="<?php echo SITE_PRODUCTS_PATH;?><?php echo $product_doc->gallery_image;?>" target="_blank"><h6><?php echo $product_doc->gallery_image;?></h6></a>

											 <?php }
																						endforeach;
										?>
<!-- 
											<a href="https://www.siemens.com/global/en/home/company/topic-areas/future-of-manufacturing/digital-enterprise.html" target="_blank"><h6>Read more for Realize your digital transformation now with the Digital Enterprise Suite</h6>
											</a> -->
										</div>
									</div>
                                       <?php                      
											$product_videos=$this->data->product_videos;
											foreach($product_videos as $product_video):
												if($product->id == $product_video->product_id){
										?>

									 <div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo $product_video->link_name ?>"><img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $product->image;?>" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $product->image;?>" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="thumbnail-slider-container">
											<div class="thumbnail-slider thumbnailSlider owl-carousel">
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $product->image;?>" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $product->image;?>" class="img-responsive">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									 <?php }
																						endforeach;
										?>


								</div>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>

						  <?php $i++;
																						endforeach;
										?>

				<!-- end-->
						<!-- <div class="col-sm-4">
							<div class="item divc" id="item_info1">
								<p>digitalization</p>
							</div>
						</div>
						<div class="info item_info1">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>DIGITALIZATION</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/digitalization_thumb.jpg" class="img-responsive" alt="">To succeed in the future you need to seize the opportunities provided by digitalization right now. Digitalization promises lower costs, improved production quality, flexibility and efficiency. It brings a shorter response time to customer requests and market demands. Productivity and energy efficiency can increase thanks to an integrated power supply. Solutions for the digital enterprise are already here - regardless of the sector or company size.</h4>
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
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
							<div class="item divc" id="item_info2">
								<p>industry software</p>
							</div>
						</div>
						<div class="info item_info2">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRY SOFTWARE</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/industry_software_thumb.jpg" class="img-responsive" alt="">Industry Software from Siemens helps manufacturers become Digital Enterprises by enabling them to digitalize and integrate their entire industrial value chain through PLM solutions, Manufacturing Execution System (MES), Manufacturing Operations Management (MOM) solutions and TIA equipment into the industry-leading Siemens collaboration platform and single data backbone. The integration of PLM, MES/MOM and Automation is made possible with the comprehensive suite of Siemens Industry Software.</h4>
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
						<div class="col-sm-4">
							<div class="item divc" id="item_info3">
								<p>digital enterprise</p>
							</div>
						</div>
						<div class="info item_info3">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>DIGITAL ENTERPRISE</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/digital_enterprise.jpg" class="img-responsive" alt="">The Digital Enterprise Suite enables manufacturing companies to streamline and digitalize their entire business process, seamlessly integrating suppliers into the mix. They can begin at any point of their value chain, from product design to service, and can extend digitalization gradually, depending on their current needs.  MindSphere (Siemens IoT solution) allows to analyze production assets and products as they perform and feed back the insights into the entire value chain for continuous optimization.</h4>
										</div>
									</div>
									<div class="col-md-6">
										<div class="slider-container">
											<div  class="slider owl-carousel">
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS1.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS2.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS3.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS4.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/3-digital-enterprise/DES-FOMS5.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod3.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod4.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod1.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod4.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
						<div class="info item_info4">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>MINDSPHERE</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/mindsphere_thumb.jpg" class="img-responsive" alt="">MindSphere is the open, cloud-based IoT operating system from Siemens that lets you connect your machines and physical infrastructure to the digital world. It lets you harness big data from billions of intelligent devices, enabling you to uncover transformational insights across your entire business.</h4>
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
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/4-mindsphere/MindSphere.mov"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/4-mindsphere/MindSphere_Video_MindSphere Trailer_EN.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod3.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
							<div class="item divc" id="item_info5">
								<p>automation</p>
							</div>
						</div>
						<div class="info item_info5">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>AUTOMATION</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/automation.jpg" class="img-responsive" alt="">The demands on modern machines and plants are steadily growing in all industries. With the automation systems from Siemens, you can cover all requirements while benefiting from maximum efficiency, flexibility, and cost effectiveness. Its an ideal system for every tasks.</h4>
											<h4>Total Integrated Automation (TIA), the industrial automation platform from Siemens, stands for all automation components working efficiently together. Its open system architecture covers the entire production process and is based on the consistent presence of shared characteristics: consistent data management, global standards, and uniform hardware and software interfaces.</h4>
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
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
							<div class="item divc" id="item_info6">
								<p>integrated control panel</p>
							</div>
						</div>
						<div class="info item_info6">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INTEGRATED CONTROL PANELS</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/integrated.jpg" class="img-responsive" alt="">With the range of solutions from Siemens, you can easily optimize all aspects of control panel building which would save time and efforts. From preparation and configuration to design, construction, service, and support, we offer you a perfectly coordinated control panel solution. With expert know-how, tools and data for digitalization in engineering, and an aligned product and system portfolio, we ensure long-term success and greater competitiveness. That’s what the comprehensive approach of Integrated Control Panels stands for.</h4>
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
						<div class="info item_info7">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>Industrial Controls - SIRIUS</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/sirius_thumb.jpg" class="img-responsive" alt="">Do you want to save time and effort? The SIRIUS modular system combines digital planning and a standard-compliant implementation for your requirement, regardless of the application or location. Comprehensive planning tools, consulting expertise, and tested product combinations will assist you in the transition from digital to actual control cabinet construction.</h4>
											<h4>
												The SIRIUS modular system includes the portfolio for industrial control engineering for switching, protecting, monitoring, and starting motors and plants. This highly flexible modular system is quick to connect and communicate with other products and complies with all standards to ensure stress-free planning and construction of control cabinets.
											</h4>
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
						<div class="col-sm-4">
							<div class="item divc" id="item_info8">
								<p>drives</p>
							</div>
						</div>
						<div class="info item_info8">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>Drives/Converters</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/drivesconverters_thumb.jpg" class="img-responsive" alt="">Siemens is providing a platform that satisfies the high requirements in the low-voltage, DC voltage and the medium-voltage ranges. It is based on a straightforward, standard engineering, is energy-efficient and so future-proof that it can keep up with every innovation step.  Whatever direction you take, Siemens can offer you the optimum drive for it. The complete and integrated drive family addresses all of the performance levels and sets itself apart as a result of the highest degree of flexibility, functionality and efficiency.</h4>
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
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/8-drives/v90-promotion-video-en-08_1.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
							<div class="item divc" id="item_info9">
								<p>solution for machine tools</p>
							</div>
						</div>
						<div class="info item_info9">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>Integrated solution for Machine Tools</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/integrated_machine_tools.jpg" class="img-responsive" alt=""> Siemens is the only supplier to offer end-to-end CAD/CAM-CNC process chain and solutions for networking machine tools and higher-level IT systems. Siemens India is supporting both machine manufacturers and operators on with the perfect blend between solutions like Virtual part production, OPC UA, SINUMERIK Operate, SINUMERIK Integrate and controllers like SINUMERIK PPU 161, SINUMERIK 828D Basic, SINUMERIK 828D Advanced and SINUMERIK 840Dsl to enhance productivity. </h4>
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
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/9-solution-for-machine-tools/SINUMERIK-PPU290.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="<?php echo SITE_URL_IMAGES;?>product/9-solution-for-machine-tools/SINUMERIK-TOP-SURFACE.mp4" type="video/mp4"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod3.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
						<div class="info item_info10">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRIAL COMMUNICATIONS</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/industrial_communication_thumb.jpg" class="img-responsive" alt="">Industrial communications is essential for every industry. It facilitates the company-wide exchange of data across the entire value-added chain, from the field level to the management level, and provides for greater efficiency in all areas of the company. Industrial networks need to meet different requirements, depending on the industry. </h4>
											<h4>
												In manufacturing, whether for controlling machines, monitoring production lines or coordinating entire production areas – we offer end-to-end, forward-looking and fail-safe communication solutions that cover all field devices while guaranteeing a high level of communication security.
											</h4>
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
						<div class="col-sm-4">
							<div class="item divc" id="item_info11">
								<p>energy efficient motors</p>
							</div>
						</div>
						<div class="info item_info11">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>ENERGY EFFICIENT MOTORS</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/energy_efficient.jpg" class="img-responsive" alt="">Siemens enables users to boost competitiveness with higher energy savings, lower operating costs and reliability with its state of the art energy efficient motors. These motors with high dynamic performance, is a perfect fit for various sectors and applications due to its quality, efficiency and compactness. With over 150 years of global experience in motor manufacturing we strive to provide customized drive solutions for every application.</h4>
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
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
							<div class="item divc" id="item_info12">
								<p>industry services</p>
							</div>
						</div>
						<div class="info item_info12">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRY SERVICES</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/industry_services.jpg" class="img-responsive" alt=""> Industry Services from Siemens offer a vital contribution to increased competitiveness - throughout the entire lifecycle of your plant. Our global network of experts provides product-related services as well as specific consulting and services for the planning, engineering, operation, and modernization phases of industrial plants. We support you in increasing Productivity, Flexibility and Efficiency.</h4>
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
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<div class="video_container">
															<a href="javascript:void(0);" data-iframe="https://www.youtube.com/embed/SMeu1h3koB0"><img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive"></a>
															<div class="playicon">
																<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
															</div>
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
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
													</div>
												</div>
												<div class="item">
													<div class="content">
														<img src="<?php echo SITE_URL_IMAGES;?>/products/prod2.jpg" class="img-responsive">
														<div class="playicon">
															<img src="<?php echo SITE_URL_IMAGES;?>paly-iocn.png" class="img-responsive">
														</div>
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
						<div class="info item_info13">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>INDUSTRIAL TRAINING</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/industrial_training.jpg" class="img-responsive" alt="">At SITRAIN (Siemens Training Institute), we are committed to provide training to Siemens customers, channel partners, employees as well as students in educational institutes. This is a Siemens initiative to upgrade the skill development in the country and fill in the gap for such required skilled manpower.</h4>
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
							<div class="item divc" id="item_info14">
								<p>financial services</p>
							</div>
						</div>
						<div class="info item_info14">
							<div class="col-md-12 item-data">
							<div class="combine-data">
								<div class="row">
									<div class="col-md-6">
										<div class="content">
											<h3>FINANCIAL SERVICES</h3>
											<h4><img src="<?php echo SITE_URL_IMAGES;?>thumb/financial_service.jpg" class="img-responsive" alt="">Siemens Financial Services (SFS) is a provider of business-to-business financial solutions. We support customer investments with equipment financing & leasing solutions as well with project and structured finance. Our specialized financial solutions, support productivity in industrial companies, drive energy efficiency and enable a wide variety of vendors to support sales and investment through flexible and tailored finance solutions. SMEs also benefit from our experience, sound risk assessment and customer service orientation.  Third-party customer’s benefit from our experience and sound risk assessment in Siemens’ markets: To expand our portfolio and to optimally position our products and services in the market, we serve customers outside the Company as well.</h4>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/14-financial-services/financing-machine-tools.pdf" target="_blank"><h6>Attractive financing for machine tools: Flexibly controlled</h6></a>
											<a href="<?php echo SITE_URL_IMAGES;?>/product/14-financial-services/sfs-in-cof-plastic-flyer.pdf" target="_blank"><h6>Finance made easy</h6></a>
										</div> -->
									</div>
									<div class="col-md-6">
										<div class="content">

										</div>
									</div>
								</div>

			<div id="tab-4" class="news tab-content">
				<div class="events">
					<div class="event-description">
						<h3>News & Events</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra quam id gravida mattis.<br>
						Pellentesque fermentum semper ultricies. Cras rhoncus ante in rhoncus ullamcorper</p>
					</div>
					<div class="event_gallery" id="demos">
						<div>
							<ul class="owl-carousel owl-theme" id="news-gallery">
								<?php
								if($this->data->news){
								$newss=$this->data->news;
								foreach($newss as $news): ?>

								<li class="item">
									<div class="slde1">
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
							<li><a href="javascript:void(0);" class="twitt"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0);" class="fb"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0);" class="yout"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<div class="cl"></div>
						</ul>
					</div>
				</div>
			</div>
			<div id="tab-5"  class="roadmap tab-content">
				<div class="gallery">
					<h3>Gallery</h3>
				</div>

			

				<div class="gallery_thumbs">
					<div class="row">
				<?php
				$gallerys=$this->data->gallery;
				$j=1;
				foreach($gallerys as $gallery):
				?>

				<div class="col-sm-4">
					<div class="gallery_album">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal<?php echo $j?>">
							<img src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $gallery->gallery_image;?>" class="img-responsive">
						</a>
						<div class="album_title">
							<p><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal<?php echo $j?>">
								<?php echo $gallery->name;?>
							</a></p>
						</div>
					</div>
				</div>
				<?php $j++;
				endforeach;
				?>
				 
				</div>
				</div>
				</div>
				<?php } ?>
							<div class="clearfix"></div>
							</div>
							</div>
						</div>
				</div>
			</div> 
			<!--Fourth-->
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


		<?php   $k=1;            
		$gallerys=$this->data->gallery;
		foreach($gallerys as $gallery): 
		?>
		<div class="modal fade gallery_modal" id="myModal<?php echo $k?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        	<img src="<?php echo SITE_URL_IMAGES;?>/close.png" alt="">
		        </button>
		      </div>
		      <div class="modal-body">
		        	<div class="album_carousel owl-carousel owl-theme">


					<?php
					$gallery_images=$this->data->gallery_image;

					foreach($gallery_images as $gallery_image):	
					if($gallery->id == $gallery_image->gallery_id){	?>



                       <div class="item">
		        			<div class="enlarged_img">
		        				<img class="img-responsive" src="<?php echo SITE_PRODUCTS_PATH;?><?php echo $gallery_image->gallery_image;?>" alt="">
		        			</div>
		        			<div class="image_description">
		        				<h4><?php echo $gallery->name;?></h4>
		        				<p><?php echo $gallery_image->description;?></p>
		        			</div>
		        		</div>

					<?php  }
					endforeach;
					?>
					
		        	</div>
		      </div>
		    </div>
		  </div>
		</div>
		<?php  $k++;
					endforeach;
					?>
		
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
			<div class="close_icon"><img src="<?php echo SITE_URL_IMAGES;?>close.png" alt=""></div>
		</div>
		<script src="<?php echo SITE_URL_JS;?>jquery-1.11.0.min.js"></script>
		<script src="<?php echo SITE_URL_JS;?>jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo SITE_URL_JS;?>bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo SITE_URL_JS;?>owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo SITE_URL_JS;?>common.js"></script>
	</body>
</html>