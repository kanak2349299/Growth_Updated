<!-- Start Header Top -->
	<div class="top-bar-area top-bar-style-three text-light">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-7">
					<ul class="item-flex">
						<li> <i class="fas fa-envelope"></i> info@growthom.com </li>
						<li> <a href="tel:+96898861823"><i class="fas fa-phone-alt"></i> +968 98861823</a> </li>
					</ul>
				</div>
				<div class="col-lg-5 text-end">
					<div class="social">
						<ul>
							<li>
								<a href="https://www.linkedin.com/company/growth-om/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Header Top -->
	<!-- Header -->
	<header>
		<!-- Start Navigation -->
		<nav class="navbar mobile-sidenav navbar-style-three navbar-sticky navbar-default validnavs navbar-fixed white no-background">
			<div class="container d-flex justify-content-between align-items-center">
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button> 
					<a class="navbar-brand" href="<?php echo base_url('') ?>">
                    <img src="<?php echo base_url('public/front/assets/img/logo.png')?>" class="logo logo-display" alt="Logo">
                    <img src="<?php echo base_url('public/front/assets/img/logo.png')?>" class="logo logo-scrolled" alt="Logo">
                    </a> 
                </div>
                
				<!-- End Header Navigation -->
				<div class="navbar-right-part">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu"> <img src="<?php echo base_url('public/front/assets/img/logo.png')?>" alt="Logo">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-times"></i> </button>
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="dropdown"> <a href="<?php echo base_url('') ?>" class="<?php if($activemenu=='home') {echo 'active';} ?>" data-toggle="dropdown">Home</a> </li>
							<li class="dropdown"> <a href="<?php echo base_url('about') ?>" class="<?php if($activemenu=='about') {echo 'active';} ?>" data-toggle="dropdown">About Us</a> </li>
							<li class="dropdown"> <a href="<?php echo base_url('services') ?>" class="dropdown-toggle <?php if($activemenu=='services') {echo 'active';} ?>" data-toggle="dropdown" >Services</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('sustainability-services') ?>">Sustainability Services</a></li>
									<li><a href="<?php echo base_url('esg-compliance-services') ?>">ESG Compliance</a></li>
									<li><a href="<?php echo base_url('energy-management-audit-services') ?>">Energy Management & Audit Services</a></li>
									<li><a href="<?php echo base_url('continuous-improvement') ?>">Continuous Improvement</a></li>
									<li><a href="<?php echo base_url('training-mentorship') ?>">Training & Mentoring</a></li>
									<li><a href="<?php echo base_url('process-safety-management') ?>">Process Safety Management</a></li>
									<li><a href="<?php echo base_url('project-management') ?>">Project Management</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url('career') ?>" class="<?php if($activemenu=='career') {echo 'active';} ?>">Career</a></li>
							<li><a href="<?php echo base_url('contact') ?>" class="<?php if($activemenu=='contact') {echo 'active';} ?>">contact US</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
					<div class="attr-right d-none">
						<!-- Start Atribute Navigation -->
						<div class="attr-nav">
							<ul>
								<li class="button"><a href="#">Request a Quote</a></li>
							</ul>
						</div>
						<!-- End Atribute Navigation -->
					</div>
					<!-- Main Nav -->
				</div>
			</div>
			<!-- Overlay screen for menu -->
			<div class="overlay-screen"></div>
			<!-- End Overlay screen for menu -->
		</nav>
		<!-- End Navigation -->
	</header>
	<!-- End Header -->