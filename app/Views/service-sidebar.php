<div class="col-xl-4 col-lg-5 mt-md-120 mt-xs-50 services-sidebar">
                        <!-- Single Widget -->
                            <div class="project-info mt-15" style="background-image: url('<?php echo base_url("public/front/assets/img/shapes/formshape.webp") ?>');">
                                <h4 class="title">Enquire Now</h4>
                                <form action="" method="POST" id="serviceForm" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input class="form-control" id="service" name="service"  value="<?php echo $servicetitle ?>" readonly>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3 comments">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" name="submit" id="submit" class="btn btn-sm btn-theme secondary animation" onclick="submitServiceForm()">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </div>
                           
                        </form>
                                
                            </div>
                        <!-- End Single Widget -->
                        <div class="single-widget bg-dark quick-contact-widget text-light" style="background-image: url('<?php echo base_url("public/front/assets/img/shape/15.png") ?>');">
                            <div class="content">
                                <h3>Need Help?</h3>
                                <p>
                                    We are happy to connect you with a team member for personalized support.
                                </p>
                                <h2>+968 98861823</h2>
                                <h4><a href="mailto:info@growth-i-d.com">info@growth-i-d.com</a></h4>
                                <a class="btn mt-30 circle btn-sm btn-gradient" href="<?php echo base_url('contact') ?>">Contact Us</a>
                            </div>
                        </div>
                    </div>