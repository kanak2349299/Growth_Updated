<footer class="bg-dark text-light">
		<div class="footer-shape">
			<div class="item"> <img src="<?php echo base_url('public/front/assets/img/shape/7.png')?>" alt="Shape"> </div>
		</div>
		<div class="container">
			<div class="f-items relative pt-40 pb-50 pt-xs-0 pb-xs-50">
				<div class="row">
					<div class="col-lg-2 col-md-6 footer-item">
						<div class="f-item link">
							<h4 class="widget-title">Quick Links</h4>
							<ul>
								<li class="nav"> <a href="<?php echo base_url('') ?>">Home</a> </li>
								<li class="nav"> <a href="<?php echo base_url('about') ?>">Company Profile</a> </li>
								<li class="nav"> <a href="<?php echo base_url('services') ?>">Services</a> </li>
								<li class="nav"> <a href="<?php echo base_url('blogs') ?>">Latest Blogs</a> </li>
								<li class="nav"> <a href="<?php echo base_url('career') ?>">Career</a> </li>
								<li class="nav"> <a href="<?php echo base_url('contact') ?>">Contact</a> </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 footer-item">
						<div class="f-item link">
							<h4 class="widget-title">Our Services</h4>
							<ul>
								<li class="nav"><a href="<?php echo base_url('sustainability-services') ?>">Sustainability Services</a></li>
								<li class="nav"><a href="<?php echo base_url('esg-compliance-services') ?>">ESG Compliance</a></li>
								<li class="nav"><a href="<?php echo base_url('energy-management-audit-services') ?>">Energy Management & Audit Services</a></li>
								<li class="nav"><a href="<?php echo base_url('continuous-improvement') ?>">Continuous Improvement</a></li>
								<li class="nav"><a href="<?php echo base_url('training-mentorship') ?>">Training & Mentoring</a></li>
								<li class="nav"><a href="<?php echo base_url('process-safety-management') ?>">Process Safety Management</a></li>
								<li class="nav"><a href="<?php echo base_url('project-management') ?>">Project Management</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 footer-item">
						<h4 class="widget-title">Newsletter</h4>
						<p> Join our subscribers list to get the latest news and special offers. </p>
						<div class="f-item newsletter">
							<form action="#" method="post" id="newsletterForm">
								<input type="text" placeholder="Your Email" class="form-control" name="email" id="email1">
								<button type="button" onclick="submitNewsletterForm()"> Subscribe</button>
							</form>
						</div>
							<h4 class="widget-title mt-4">Follow Us</h4>
						<ul class="footer-social">
							<li>
								<a href="https://www.linkedin.com/company/growth-om/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 footer-item">
						<h4 class="widget-title">Request for Enquiry</h4>
						<div class="">
							<form action="" method="post" id="requestForm">
								<input type="text" placeholder="Name" class="form-control form-control1 mb-2" name="name" id="name">
								<input type="email" placeholder="Email" class="form-control form-control1 mb-2" name="email" id="email">
								<input type="text" placeholder="Phone" class="form-control form-control1 mb-2" name="phone" id="phone">
								<input type="text" placeholder="Organization" class="form-control form-control1 mb-2" name="organization" id="organization">
								<input type="text" placeholder="Enquiry for" class="form-control form-control1 mb-2" name="enquiryfor" id="enquiryfor">
								<input type="hidden" placeholder="Website url" class="form-control form-control1 mb-2" name="website" id="website">
								<button type="button" class="btn btn-green" onclick="handleRequestForm()"> SUBMIT</button>
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Start Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>&copy; Copyright <?php echo date('Y') ?>. All Rights Reserved by <a href="#">Growth Investment & Development</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Bottom -->
	</footer>