	<title>Right Deals :: Home</title>
	<style>
		.img-hover img{
		height:160px;
		border-top: 1px solid #f4f4f4;
		border-left: 1px solid #f4f4f4;
		border-right: 1px solid #f4f4f4;
		}
		#slider5a .slider-track-high, #slider5c .slider-track-high {
		background: green;
		}
		.slider-horizontal{
		width: 170px;
		}
		.tooltip.top {
		padding: 5px 0;
		margin-top: -32px;
		}
	</style>
	
	<link rel="stylesheet" href="css/homeslider.css">
	<link rel="stylesheet" href="j-folder/css/j-forms.css">
	
	<section class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
				<li data-transition="slidevertical">
					<img src="<?php echo base_url(); ?>img/slide/all.jpg" class="img-responsive" alt="Slider1" title="Slider1">
					<div class="tp-caption large_bold_white sft stb"
						data-x="center"
						data-y="260"
						data-speed="300"
						data-start="1000"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">Goods & Services. Ever Trusted Listings
					</div>
					<div class="tp-caption small_light_white sfb stb"
						data-x="center"
						data-y="325"
						data-speed="500"
						data-start="1200"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">
					</div>
				</li>
				<li data-transition="slidevertical">
					<img src="<?php echo base_url(); ?>img/slide/1.jpg" class="img-responsive" alt="Slider2" title="Slider2">
					<div class="tp-caption large_bold_white sft stb"
						data-x="center"
						data-y="260"
						data-speed="300"
						data-start="1000"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">Goods & Services. Ever Trusted Listings
					</div>
					<div class="tp-caption small_light_white sfb stb"
						data-x="center"
						data-y="325"
						data-speed="500"
						data-start="1200"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">For Everything Tech
					</div>
				</li>
				
				<li data-transition="slidevertical">
					<img src="<?php echo base_url(); ?>img/slide/2.jpg" class="img-responsive" alt="Slider1" title="Slider1" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
					<div class="tp-caption large_bold_white sft stb"
						data-x="center"
						data-y="260"
						data-speed="300"
						data-start="1000"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">Goods & Services. Ever Trusted Listings
					</div>
					<div class="tp-caption small_light_white sfb stb"
						data-x="center"
						data-y="325"
						data-speed="500"
						data-start="1200"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">Commendable Services at affordable Prices 
					</div>
				</li>
				
				<li data-transition="slidevertical" >
					<img src="<?php echo base_url(); ?>img/slide/3.jpg" class="img-responsive" alt="Slider3" title="Slider3">
					<div class="tp-caption large_bold_white sft stb"
						data-x="center"
						data-y="260"
						data-speed="300"
						data-start="1000"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">Goods & Services. Ever Trusted Listings
					</div>
					<div class="tp-caption small_light_white sfb stb"
						data-x="center"
						data-y="325"
						data-speed="500"
						data-start="1200"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">The Look You Deserve
					</div>
				</li>
				
				<li data-transition="slidevertical" >
					<img src="<?php echo base_url(); ?>img/slide/5.jpg" class="img-responsive" alt="Slider3" title="Slider3">
					<div class="tp-caption large_bold_white sft stb"
						data-x="center"
						data-y="260"
						data-speed="300"
						data-start="1000"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">Goods & Services. Ever Trusted Listings
					</div>
					<div class="tp-caption small_light_white sfb stb"
						data-x="center"
						data-y="325"
						data-speed="500"
						data-start="1200"
						data-splitin="lines"
						data-splitout="none"
						data-easing="easeOutExpo">Helping You Find the Property of Your Dream
					</div>
				</li>
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
		
		<div class="filter-title">
			<div class="filter-header">
				<form action="searchview">
					<input type="text" required="required" placeholder="I'm looking for" class="input-large">
					<div class="selector1">
						<select class="guests-input">
							<?php foreach ($show_all as $show_val) { ?>
							<option value="<?php echo $show_val->category_id; ?>"><?php echo ucwords($show_val->category_name); ?></option>
							<?php	} ?>
						</select>
					</div>
					<input type="text" required="required" placeholder="Location" class="input-large">
					<i class="fa fa-map-marker fa-2x loca_pad"></i>
					<input type="text" id="ex5a" class="form-control" type="text"/>
					<input type="submit" class="pull-right" value="Search">
				</form>
			</div>
		</div>
	</section>
	
	<section class="content-central">
		<div class="semiboxshadow text-center">
			<img src="<?php echo base_url(); ?>img/img-theme/shp.png" class="img-responsive" alt="Shadow" title="Shadow view">
		</div>
		<section class="content_info">
			<div class="">
				<div class="row marque_sty">
					<div class="col-sm-3 col-xs-3 hidden-xs">
						<img src="<?php echo base_url(); ?>img/marquee.png" class="fa fa-plane img-responsive" alt="Hot deals" title="Hot deals Heading">
					</div>
					<div class="col-sm-9 col-xs-12 marque_text">
						<div class="ticker3 modern-ticker mt-round">
							<div class="mt-body">
								<div class="mt-news">
									<ul>
										<?php foreach ($news as $n_val) { ?>
										<li><a href="<?php echo base_url(); ?>description_view/details/<?php echo $n_val->ad_id; ?>" target="_self"><?php echo ucfirst($n_val->marquee); ?> </a></li>
										<?php	} ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="content_info">
			<div class="">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="titles">
								<h2>TOP <span>CATEGORIES </span></h2>
								<hr class="tall">
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/deals.jpg" alt="deals" title="deals Category">
										<div class="overlay">
											<h2>Hot Deals</h2>
											<a class="info" href="deal_page">View Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/ezone.jpg" alt="ezone" title="ezone Category">
										<div class="overlay">
											<h2>E-Zone</h2>
											<a class="info" href="ezone_view">View Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/cars.jpg" alt="cars" title="cars Category">
										<div class="overlay">
											<h2>Motor Point</h2>
											<a class="info" href="motor_view">View Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row top_13">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/clothing.jpg" alt="clothing" title="clothing Category">
										<div class="overlay">
											<h2>Clothing & LifeStyles</h2>
											<a class="info" href="clothing_lifestyles_view">View Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/services.jpg" alt="services" title="services Category">
										<div class="overlay">
											<h2>Services</h2>
											<a class="info" href="services_view">View Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/property.jpg" alt="property" title="property Category">
										<div class="overlay">
											<h2>Find a Property</h2>
											<a class="info" href="residential_view">View Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row top_13">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/kitchen.jpg" alt="kitchen" title="kitchen Category">
										<div class="overlay">
											<h2>Home & Kitchen</h2>
											<a class="info" href="home_kitchen_view">View Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/pets.jpg" alt="pets" title="pets Category">
										<div class="overlay">
											<h2>Pets</h2>
											<a class="info" href="pets_view">View Details</a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="hovereffect">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/featured/jobs.jpg"  alt="jobs" title="jobs Category">
										<div class="overlay">
											<h2>Jobs</h2>
											<div><a class="info" href="job_view">View Details</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-8 col-xs-12">
							<div class="titles">
								<h2><span>HOT </span>DEALS</h2>
								<hr class="tall">
							</div>
							<div id="page">
								<div id="viewport">
									<div id="box">
										<?php
											$i=1;
											 foreach ($hot_deals as $hot_deals_val) {
												/*currency symbol*/ 
												if ($hot_deals_val->currency == 'pound') {
													$currency = '£';
												}
												else if ($hot_deals_val->currency == 'euro') {
													$currency = '€';
												}
											  if ($hot_deals_val->ad_type == 'business') { 
												$person = @mysql_result(mysql_query("SELECT contact_person FROM contactinfo_business WHERE ad_id= '$hot_deals_val->ad_id'"), 0, 'contact_person');
												$mobile = @mysql_result(mysql_query("SELECT mobile FROM contactinfo_business WHERE ad_id= '$hot_deals_val->ad_id'"), 0, 'mobile');
											  }
											  else if ($hot_deals_val->ad_type == 'consumer') { 
												$person = @mysql_result(mysql_query("SELECT contact_name FROM contactinfo_consumer WHERE ad_id= '$hot_deals_val->ad_id'"), 0, 'contact_name');
												$mobile = @mysql_result(mysql_query("SELECT mobile FROM contactinfo_consumer WHERE ad_id= '$hot_deals_val->ad_id'"), 0, 'mobile');
											  }
											
											  ?>
										<figure class="slide jbs-current">
											<?php if($hot_deals_val->img_name == ''){
												if ($hot_deals_val->urgent_package != '') { ?>
											<div class="significant_badge">
											</div>
											<?php }
												?>
											<div class="img-hover significant_ad">
												<img src="<?php echo base_url(); ?>pictures/no_image.png" alt="no_image.png" title="significant" class="img-responsive">
												<div class="overlay"><a href="<?php echo base_url(); ?>pictures/no_image.png" ><i class="fa fa-link"></i></a></div>
											</div>
											<?php
												}else{
												if ($hot_deals_val->urgent_package != 0) {
													?>
											<div class="significant_badge">
											</div>
											<?php }
												?>
											<div class="img-hover significant_ad">
												<img src="<?php echo base_url(); ?>pictures/<?php echo $hot_deals_val->img_name; ?>" alt="<?php echo $hot_deals_val->img_name; ?>" title="significant" class="img-responsive">
												<div class="overlay"><a href="description_view/details/<?php echo $hot_deals_val->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
											</div>
											<?php	} ?>
											<div class="info-gallery slider_bg">
												<h3><?php echo substr($hot_deals_val->deal_tag, 0, 20); ?></h3>
												<hr class="separator">
												<?php if ($hot_deals_val->category_id != '1') { ?>
												<h3 class="home_price"><?php echo $currency.number_format($hot_deals_val->price); ?></h3>
												<?php } ?>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#sendnow" id='<?php echo $hot_deals_val->ad_id; ?>'  class="btn_v btn-4 btn-4a fa fa-arrow-right fdk_ad"><span>Send Now</span></a>
												<?php  if ($hot_deals_val->ad_type == 'business') {
													if ($hot_deals_val->bus_logo != '') {
													?>
												<div class="bus_logo">
													<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $hot_deals_val->bus_logo; ?>" /></b>
												</div>
												<?php }
													else{ ?>
												<div class="bus_logo">
													<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
												</div>
												<?php			}
													} ?>
												<div class="price11">
													<span></span><b>
													<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
												</div>
											</div>
										</figure>
										<?php 
											$i++;
											} ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="content_info">
			<div class="paddings-mini">
				<div class="container">
					<div class="titles recen_ad">
						<h2>SIGNIFICANT <span> DEALS</span></h2>
					</div>
					<div class="portfolioFilter">
						<a href="#showall" data-filter=".showall" class="current">Show All</a>
						<a href="#ezone" data-filter=".ezone">E-Zone</a>
						<a href="#motorpoint" data-filter=".motorpoint">Motor Point</a>
						<a href="#cloths_lifestyles" data-filter=".cloths_lifestyles">Clothing & LifeStyles</a>
						<a href="#services" data-filter=".services">Services</a>
						<a href="#findproperty" data-filter=".findproperty">Find a Property</a>
						<a href="#homekitchen" data-filter=".homekitchen">Home & Kitchen</a>
						<a href="#pets" data-filter=".pets">Pets</a>
						<a href="#jobs" data-filter=".jobs">jobs</a>
					</div>
					<div class="portfolioContainer">
						<?php foreach ($sig_show_all as $val){
							/*currency symbol*/ 
								if ($val->currency == 'pound') {
									$currency = '£';
								}
								else if ($val->currency == 'euro') {
									$currency = '€';
								}
							?>
						<div class="col-sm-4 col-md-3 col-xs-12 showall">
							<?php if ($val->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	}
								?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $val->img_name; ?>" alt="<?php echo $val->img_name; ?>" title="jobs" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $val->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($val->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<?php if ($val->category_id != '1') { ?>
								<h3 class="home_price"><?php echo $currency.number_format($val->price); ?></h3>
								<?php }?>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $val->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($val->ad_type == 'business'){
									 if ($val->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $val->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- showall in most valued ads ends-->
						
						<!-- most valued ads for jobs -->
						<?php foreach ($sig_ads_jobs as $m_ads){
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 jobs">
							<?php if ($m_ads->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $m_ads->img_name; ?>" alt="<?php echo $m_ads->img_name; ?>" title="jobs" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($m_ads->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($m_ads->ad_type == 'business'){
									 if ($m_ads->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $m_ads->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- sig ads for services -->
						
						<?php foreach ($sig_ads_services as $m_ads_services){
							/*currency symbol*/ 
														if ($m_ads_services->currency == 'pound') {
															$currency = '£';
														}
														else if ($m_ads_services->currency == 'euro') {
															$currency = '€';
														}	
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 services">
							<?php if ($m_ads_services->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $m_ads_services->img_name; ?>" alt="<?php echo $m_ads_services->img_name; ?>" title="services" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads_services->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($m_ads_services->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<h3 class="home_price"><?php echo $currency.number_format($m_ads_services->price); ?></h3>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads_services->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($m_ads_services->ad_type == 'business'){
									 if ($m_ads_services->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $m_ads_services->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						
						<!-- sig ads for motor point -->
						<?php foreach ($sig_ads_motor as $motor_val){
							/*currency symbol*/ 
														if ($motor_val->currency == 'pound') {
															$currency = '£';
														}
														else if ($motor_val->currency == 'euro') {
															$currency = '€';
														}	
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 motorpoint">
							<?php if ($motor_val->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $motor_val->img_name; ?>" alt="<?php echo $motor_val->img_name; ?>" title="services" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $motor_val->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($motor_val->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<h3 class="home_price"><?php echo $currency.number_format($motor_val->price); ?></h3>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $motor_val->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($motor_val->ad_type == 'business'){
									 if ($motor_val->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $motor_val->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						
						<!-- sig ads for cloths and lifestyles -->
						<?php foreach ($sig_ads_cloths as $cloth_val){
							/*currency symbol*/ 
														if ($cloth_val->currency == 'pound') {
															$currency = '£';
														}
														else if ($cloth_val->currency == 'euro') {
															$currency = '€';
														}	
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 cloths_lifestyles">
							<?php if ($cloth_val->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $cloth_val->img_name; ?>" alt="<?php echo $cloth_val->img_name; ?>" title="services" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $cloth_val->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($cloth_val->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<h3 class="home_price"><?php echo $currency.number_format($cloth_val->price); ?></h3>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $cloth_val->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($cloth_val->ad_type == 'business'){
									 if ($cloth_val->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $cloth_val->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						
						<!-- sig ads for find a property -->
						<?php foreach ($sig_ads_property as $prop_val){
							/*currency symbol*/ 
														if ($prop_val->currency == 'pound') {
															$currency = '£';
														}
														else if ($prop_val->currency == 'euro') {
															$currency = '€';
														}	
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 findproperty">
							<?php if ($prop_val->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $prop_val->img_name; ?>" alt="<?php echo $prop_val->img_name; ?>" title="services" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $prop_val->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($prop_val->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<h3 class="home_price"><?php echo $currency.number_format($prop_val->price); ?></h3>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $prop_val->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($prop_val->ad_type == 'business'){
									 if ($prop_val->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $prop_val->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						
						<!-- most valued ads for home and kitchen -->
						<?php foreach ($sig_ads_khome as $khome_val){
							/*currency symbol*/ 
														if ($khome_val->currency == 'pound') {
															$currency = '£';
														}
														else if ($khome_val->currency == 'euro') {
															$currency = '€';
														}	
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 homekitchen">
							<?php if ($khome_val->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $khome_val->img_name; ?>" alt="<?php echo $khome_val->img_name; ?>" title="services" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $khome_val->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($khome_val->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<h3 class="home_price"><?php echo $currency.number_format($khome_val->price); ?></h3>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $khome_val->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($khome_val->ad_type == 'business'){
									 if ($khome_val->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $khome_val->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						
						<!-- sig ads for pets -->
						<?php foreach ($sig_ads_pets as $m_ads_pets){
							/*currency symbol*/ 
														if ($m_ads_pets->currency == 'pound') {
															$currency = '£';
														}
														else if ($m_ads_pets->currency == 'euro') {
															$currency = '€';
														}	
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 pets">
							<?php if ($m_ads_pets->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $m_ads_pets->img_name; ?>" alt="<?php echo $m_ads_pets->img_name; ?>" title="pets" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads_pets->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($m_ads_pets->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<h3 class="home_price"><?php echo $currency.number_format($m_ads_pets->price); ?></h3>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads_pets->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($m_ads_pets->ad_type == 'business'){
									 if ($m_ads_pets->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $m_ads_pets->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
						
						<!-- sig ads for ezone -->
						<?php foreach ($sig_ads_ezone as $m_ads_ezone){
							/*currency symbol*/ 
														if ($m_ads_ezone->currency == 'pound') {
															$currency = '£';
														}
														else if ($m_ads_ezone->currency == 'euro') {
															$currency = '€';
														}	
							?>
						<div class="col-xs-12 col-sm-4 col-md-3 ezone">
							<?php if ($m_ads_ezone->urgent_package != 0) { ?>
							<div class="most_valued_badge">
							</div>
							<?php	} ?>
							<div class="img-hover">
								<img src="<?php echo base_url(); ?>pictures/<?php echo $m_ads_ezone->img_name; ?>" alt="<?php echo $m_ads_ezone->img_name; ?>" title="ezone" class="img-responsive">
								<div class="overlay"><a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads_ezone->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
							</div>
							<div class="info-gallery">
								<h3><?php echo substr($m_ads_ezone->deal_tag,0,20); ?></h3>
								<hr class="separator">
								<h3 class="home_price"><?php echo $currency.number_format($m_ads_ezone->price); ?></h3>
								<a href="<?php echo base_url(); ?>description_view/details/<?php echo $m_ads_ezone->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
								<?php
									if($m_ads_ezone->ad_type == 'business'){
									 if ($m_ads_ezone->bus_logo != '') { ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $m_ads_ezone->bus_logo; ?>" /></b>
								</div>
								<?php }
									else{ ?>
								<div class="bus_logo">
									<span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" /></b>
								</div>
								<?php } 
									}
									?>
								<div class="sig_price">
									<span></span><b>
									<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="row text_center">
						<a href="significant_deals_view" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>VIEW ALL SIGNIFICANT DEALS</span></a>
					</div>
				</div>
			</div>
		</div>
		
		<section class="content_info">
			<div class="padding-bottom">
				<div class="container">
					<div class="titles recen_ad">
						<h2>MOST<span> VALUED </span>DEALS</h2>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<a href="mostvalued_deals_view">
							<img src="<?php echo base_url(); ?>img/most_value.jpg" alt="most_value" title="Most Value Deals" class="recentad_heig img-responsive">
							</a>
						</div>
						<div class="col-sm-9">
							<div id="boxes-carousel2">
								<?php foreach ($mostvalued_ads as $b_ads) {
									/*currency symbol*/ 
										if ($b_ads->currency == 'pound') {
											$currency = '£';
										}
										else if ($b_ads->currency == 'euro') {
											$currency = '€';
										}	
									?>
								<div>
									<?php if ($b_ads->urgent_package != 0) { ?>
									<div class="bus_rec_badge">
									</div>
									<?php } ?>
									<div class="img-hover">
										<img src="<?php echo base_url(); ?>pictures/<?php echo $b_ads->img_name; ?>" alt="<?php echo $b_ads->img_name; ?>" title="business-image1" class="img-responsive">
										<div class="overlay"><a href="description_view/details/<?php echo $b_ads->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
									</div>
									<?php if ($b_ads->package_type == 2) { ?>
									<div class="info-gallery">
										<h3><?php echo substr($b_ads->deal_tag,0,20); ?></h3>
										<hr class="separator">
										<?php
											if ($b_ads->ad_type != 'consumer') { 
											if ($b_ads->bus_logo != '') { ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $b_ads->bus_logo; ?>" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	}
											else{ ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	} 	}
											?>
										<?php if ($b_ads->package_type == 2) { ?>
										<div class="business_crown">
											<span></span><b>
											<img src="<?php echo base_url(); ?>img/icons/thumb.png" class="pull-right" alt="thumb" title="Right Deal"></b>
										</div>
										<?php	 } ?>
										<?php if ($b_ads->category_id != '1') { ?>
										<h3 class="home_price"><?php echo $currency.number_format($b_ads->price); ?></h3>
										<?php } ?>
										<a href="description_view/details/<?php echo $b_ads->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
									</div>
									<?php }else{ ?>
									<div class="info-gallery">
										<h3><?php echo substr($b_ads->deal_tag,0,20); ?></h3>
										<hr class="separator">
										<?php if ($b_ads->ad_type != 'consumer') { 
											if ($b_ads->bus_logo != '') { ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $b_ads->bus_logo; ?>" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	}
											else{ ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	}	}
											?>
										<?php if ($b_ads->package_type == 3) { ?>
										<div class="business_crown">
											<span></span><b>
											<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
										</div>
										<?php	 } ?>
										<?php if ($b_ads->category_id != '1') { ?>
										<h3 class="home_price"><?php echo $currency.number_format($b_ads->price); ?></h3>
										<?php } ?>
										<a href="description_view/details/<?php echo $b_ads->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
									</div>
									<?php	} ?>
								</div>
								<?php	} ?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="titles recen_ad">
						<h2><span>BUSINESS </span>DEALS</h2>
					</div>
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<a href="business_deals_view">
							<img src="<?php echo base_url(); ?>img/business_deals.jpg" alt="business_deals" title="Business Deals" class="recentad_heig img-responsive">
							</a>
						</div>
						<div class="col-sm-9 col-xs-12">
							<div id="boxes-carousel">
								
								<?php foreach ($business_ads as $b_ads) {
									/*currency symbol*/ 
										if ($b_ads->currency == 'pound') {
											$currency = '£';
										}
										else if ($b_ads->currency == 'euro') {
											$currency = '€';
										}	
									?>
								<div>
									<?php if ($b_ads->urgent_package != 0) { ?>
									<div class="bus_rec_badge">
									</div>
									<?php } ?>
									<div class="img-hover">
										<img src="<?php echo base_url(); ?>pictures/<?php echo $b_ads->img_name; ?>" alt="<?php echo $b_ads->img_name; ?>" title="business-image1" class="img-responsive">
										<div class="overlay"><a href="description_view/details/<?php echo $b_ads->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
									</div>
									<?php if ($b_ads->package_type == 2) { ?>
									<div class="info-gallery">
										<h3><?php echo substr($b_ads->deal_tag,0,20); ?></h3>
										<hr class="separator">
										<?php if ($b_ads->bus_logo != '') { ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $b_ads->bus_logo; ?>" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	}
											else{ ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	}
											?>
										<?php if ($b_ads->package_type == 2) { ?>
										<div class="business_crown">
											<span></span><b>
											<img src="<?php echo base_url(); ?>img/icons/thumb.png" class="pull-right" alt="thumb" title="Right Deal"></b>
										</div>
										<?php	 } ?>
										<?php if ($b_ads->category_id != '1') { ?>
										<h3 class="home_price"><?php echo $currency.number_format($b_ads->price); ?></h3>
										<?php } ?>
										<a href="description_view/details/<?php echo $b_ads->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
									</div>
									<?php }else{ ?>
									<div class="info-gallery">
										<h3><?php echo substr($b_ads->deal_tag,0,20); ?></h3>
										<hr class="separator">
										<?php if ($b_ads->bus_logo != '') { ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $b_ads->bus_logo; ?>" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	}
											else{ ?>
										<div class="bus_logo"><span></span><b><img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/trader.png" alt="business_logo1" title="business-logo1" /></b></div>
										<?php	}
											?>
										<?php if ($b_ads->package_type == 3) { ?>
										<div class="business_crown">
											<span></span><b>
											<img src="<?php echo base_url(); ?>img/icons/crown.png" class="pull-right" alt="Crown" title="Best Deal"></b>
										</div>
										<?php	 } ?>
										<?php if ($b_ads->category_id != '1') { ?>
										<h3 class="home_price"><?php echo $currency.number_format($b_ads->price); ?></h3>
										<?php } ?>
										<a href="description_view/details/<?php echo $b_ads->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
									</div>
									<?php	} ?>
								</div>
								<?php	} ?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="titles recen_ad">
						<h2><span>RECENT </span>DEALS</h2>
					</div>
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<a href="recent_deals_view">
							<img src="<?php echo base_url(); ?>img/recentad.jpg" alt="recentad" title="Recent Deals" class="recentad_heig img-responsive">
							</a>
						</div>
						<div class="col-sm-9 col-xs-12">
							<div id="boxes-carousel1">
								
								<?php 
									foreach ($free_ads as $free_val) {
										/*currency symbol*/ 
											if ($free_val->currency == 'pound') {
												$currency = '£';
											}
											else if ($free_val->currency == 'euro') {
												$currency = '€';
											}	
									 ?>
								<div>
									<?php if ($free_val->urgent_package != 0) { ?>
									<div class="bus_rec_badge">
									</div>
									<?php } ?>
									<div class="img-hover">
										<img src="<?php echo base_url(); ?>pictures/<?php echo $free_val->img_name; ?>" alt="<?php echo $free_val->img_name; ?>" class="img-responsive">
										<div class="overlay"><a href="description_view/details/<?php echo $free_val->ad_id; ?>" ><i class="fa fa-link"></i></a></div>
									</div>
									<?php if ($free_val->package_type == 2) { ?>
									<div class="info-gallery">
										<h3><?php echo substr($free_val->deal_tag,0,20); ?></h3>
										<hr class="separator">
										<?php if ($free_val->category_id != '1') { ?>
										<h3 class="home_price"><?php echo $currency.number_format($free_val->price); ?></h3>
										<?php } ?>
										<a href="description_view/details/<?php echo $free_val->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
										<div class="price">
											<?php if ($free_val->package_type == 3) { ?>
											<span></span><b><img src="<?php echo base_url(); ?>img/icons/crown.png" alt="crown" title="Best Deal"></b>
											<?php	} ?>
											<?php if ($free_val->package_type == 2) { ?>
											<span></span><b><img src="<?php echo base_url(); ?>img/icons/thumb.png" alt="thumb" title="Right Deal"></b>
											<?php	} ?>
										</div>
									</div>
									<?php }else{ ?>
									<div class="info-gallery">
										<h3><?php echo substr($free_val->deal_tag,0,20); ?></h3>
										<hr class="separator">
										<?php if ($free_val->category_id != '1') { ?>
										<h3 class="home_price"><?php echo $currency.number_format($free_val->price); ?></h3>
										<?php } ?>
										<a href="description_view/details/<?php echo $free_val->ad_id; ?>" class="btn_v btn-3 btn-3d fa fa-arrow-right"><span>View Details</span></a>
										<div class="price">
											<?php if ($free_val->package_type == 3) { ?>
											<span></span><b><img src="<?php echo base_url(); ?>img/icons/crown.png" alt="crown" title="Best Deal"></b>
											<?php	} ?>
										</div>
									</div>
									<?php } ?>
								</div>
								<?php	}
									?>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div  id="jssor_1">
							<div data-u="loading">
								<div class="slide_j1"></div>
								<div class="slide_j2"></div>
							</div>
							<div data-u="slides" class="slide_j3">
								<?php foreach ($business_logos as $bval) { ?>
								<div style="display: none;">
									<img data-u="image" src="<?php echo base_url(); ?>pictures/business_logos/<?php echo $bval->bus_logo; ?>" alt="<?php echo base_url(); ?>pictures/<?php echo $bval->bus_logo; ?>" title="Business logo" />
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
	
	<script>
		jQuery(document).ready(function ($) {
			
			var jssor_1_options = {
			  $AutoPlay: true,
			  $Idle: 0,
			  $AutoPlaySteps: 4,
			  $SlideDuration: 1600,
			  $SlideEasing: $Jease$.$Linear,
			  $PauseOnHover: 4,
			  $SlideWidth: 115,
			  $Cols: 8
			};
			
			var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
			
			function ScaleSlider() {
				var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
				if (refSize) {
					refSize = Math.min(refSize, 1124);
					jssor_1_slider.$ScaleWidth(refSize);
				}
				else {
					window.setTimeout(ScaleSlider, 40);
				}
			}
			ScaleSlider();
			$(window).bind("load", ScaleSlider);
			$(window).bind("resize", ScaleSlider);
			$(window).bind("orientationchange", ScaleSlider);
		});
	</script>
	
	<link href="modern-ticker/css/modern-ticker.css" type="text/css" rel="stylesheet">
	<script src="modern-ticker/js/jquery.modern-ticker.min.js" type="text/javascript"></script> 
	
	<script>$(function(){$(".ticker1").modernTicker({effect:"scroll",scrollType:"continuous",scrollStart:"inside",scrollInterval:20,transitionTime:500,autoplay:true});$(".ticker2").modernTicker({effect:"fade",displayTime:4e3,transitionTime:300,autoplay:true});$(".ticker3").modernTicker({effect:"type",typeInterval:10,displayTime:4e3,transitionTime:300,autoplay:true});$(".ticker4").modernTicker({effect:"slide",slideDistance:100,displayTime:4e3,transitionTime:350,autoplay:true})})</script>
	<link rel="stylesheet" href="j-folder/css/j-forms.css">
	<script src="js/box-slider-all.jquery.min.js"></script>
	
	<script>
		$(function () {
			// This function runs before the slide transition starts
			var switchIndicator = function ($c, $n, currIndex, nextIndex) {
			  // kills the timeline by setting it's width to zero
			  $timeIndicator.stop().css('width', 0);
			  // Highlights the next slide pagination control
			  $indicators.removeClass('current').eq(nextIndex).addClass('current');
			};
		
			// This function runs after the slide transition finishes
			var startTimeIndicator = function () {
			  // start the timeline animation
			  $timeIndicator.animate({width: '100%'}, slideInterval);
			};
		
		
			var $box = $('#box')
			  , $indicators = $('.goto-slide')
			  , $effects = $('.effect')
			  , $timeIndicator = $('#time-indicator')
			  , slideInterval = 5000
			  , defaultOptions = {
					speed: 1200
				  , autoScroll: true
				  , timeout: slideInterval
				  , next: '#next'
				  , prev: '#prev'
				  , pause: '#pause'
				  , onbefore: switchIndicator
				  , onafter: startTimeIndicator
				}
			  , effectOptions = {
				  'blindLeft': {blindCount: 15}
				, 'blindDown': {blindCount: 15}
				, 'tile3d': {tileRows: 6, rowOffset: 80}
				, 'tile': {tileRows: 6, rowOffset: 80}
			  };
		
			// initialize the plugin with the desired settings
			$box.boxSlider(defaultOptions);
			// start the time line for the first slide
			startTimeIndicator();
		
			// Paginate the slides using the indicator controls
			$('#controls').on('click', '.goto-slide', function (ev) {
			  $box.boxSlider('showSlide', $(this).data('slideindex'));
			  ev.preventDefault();
			});
		
			// This is for demo purposes only, kills the plugin and resets it with
			// the newly selected effect
			$('#effect-list').on('click', '.effect', function (ev) {
			  var $effect = $(this)
				, fx = $effect.data('fx')
				, extraOptions = effectOptions[fx];
		
			  $effects.removeClass('current');
			  $effect.addClass('current');
			  switchIndicator(null, null, 0, 0);
			  $box
				.boxSlider('destroy')
				.boxSlider($.extend({effect: fx}, defaultOptions, extraOptions));
			  startTimeIndicator();
		
			  ev.preventDefault();
			});
		});
	</script>
	
	<script type="text/javascript">
		$(function(){
			$(".fdk_ad").click(function(){
				$("#fdbkads").val($(this).attr('id'));
			});
		});
	</script>
	
	<script src="j-folder/js/jquery.validate.min.js"></script>
	<script src="js/bootstrap-slider.js"></script>
	
	<script>
		$("#ex5a").slider({ id: "slider5a", min: 0, max: 20, value: 5 });
	</script>
	
	<script type="text/javascript">
		$(function(){
			$("#feedbackads").validate({
					// Specify the validation rules
				rules: {
					fbkcontname: {
						required: true
					},
					feedbackmsg: {
						required: true,
						minlength: 60
					},
					busemail: {
						required: true,
						email: true
					},
					feedbackno: {
						required: true
					}
				},
				
				// Specify the validation error messages
				messages: {
					fbkcontname: {
						required: "Please Enter contact name"
					},
					feedbackmsg: {
						required: "Please Enter feedback message",
						minlength: "message contains atleast 60 characters"
					},
					busemail: {
						required: "Please Enter valid mail id"
					},
					feedbackno: {
						required: "Please Enter Mobile Number"
					}
				},
				
				submitHandler: function(form) {
					return true;
				}
			});
		});
	</script>
	
	<!-- Modal -->
	<div class="modal dialog1 fade" id="sendnow" role="dialog">
		<div class="modal-dialog1">
			<form action="<?php echo base_url(); ?>description_view/feedbackforads" method="post" class="j-forms" id="feedbackads" >
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2>Send <span>NOW </span></h2>
					</div>
					<div class="modal-body">
						<div class="j-row">
							<div class="unit">
								<label class="label">Contact Name
								<sup data-toggle="tooltip" title="" data-original-title="Contact Name">
								<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
								</sup>
								</label>
								<div class="input">
									<label class="icon-right" for="name">
									<i class="fa fa-user"></i>
									</label>
									<input type="text" id="fbkcontname" name="fbkcontname" placeholder="Enter Contact Person Name ">
									<input type='hidden' class='curr_url' name='curr_url' value='<?php echo current_url();?>'>
									<input type="hidden" name="ad_id" id='fdbkads' value="">
								</div>
							</div>
							<div class="unit">
								<label class="label">Mobile Number
								<sup data-toggle="tooltip" title="" data-original-title="Mobile Number">
								<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
								</sup>
								</label>
								<div class="input">
									<label class="icon-right" for="phone">
									<i class="fa fa-phone"></i>
									</label>
									<input type="text" id="feedbackno" name="feedbackno" maxlength='10' onkeypress="return isNumber(event)" placeholder="Enter Your Mobile Number ">
								</div>
							</div>
							<div class="unit">
								<label class="label">Email
								<sup data-toggle="tooltip" title="" data-original-title="Email">
								<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
								</sup>
								</label>
								<div class="input">
									<label class="icon-right" for="email">
									<i class="fa fa-envelope-o"></i>
									</label>
									<input type="email" id="busemail" name="busemail" placeholder="Enter Your Email">
								</div>
							</div>
							<div class="unit">
								<label class="label">Message
								<sup data-toggle="tooltip" title="" data-original-title="Message">
								<img src="<?php echo base_url(); ?>img/icons/i.png" alt="Help" title="Help Label">
								</sup>
								</label>
								<div class="input">
									<textarea type="text" id="feedbackmsg" name="feedbackmsg" placeholder="Enter Your Feedback "></textarea>
								</div>
							</div>
							<div class="unit">													
								<button class="btn btn-primary " id='change_pwd'>Send Now</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>