<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php' ?>
</head>

<body class="home-solar">
    
	<?php include 'includes/header.php' ?>
	
	<div class="breadcrumb-area bg-cover shadow dark text-center text-light mt-150" style="background-image: url('<?php echo base_url("public/front/assets/img/banner/10.jpg") ?>')">
        <div class="breadcrum-shape">
            <img src="<?php echo base_url("public/front/assets/img/shapes/breadcrumb.png") ?>" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Career</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url('') ?>"><i class="fas fa-home"></i> Home</a></li>
                        <li>Career</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	 <!-- Start Contact Us  -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape d-none">
            <img src="<?php echo base_url('public/front/assets/img/shape/37.png') ?>" alt="Image Not Found">
        </div>
       
        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2>Join Our Team</h2>
                        <p>
                           Join our team and be part of a dynamic, innovative environment. Grow your career with exciting opportunities and collaborative work culture.
                        </p>
                        
                        <img src="<?php echo base_url('public/front/assets/img/shapes/joinus.webp') ?>" class="img-fluid">
                    </div>
                </div>
                
                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Career</h5>
                        <h2 class="heading">Excited to work with us?</h2>
                        <p>Share your CV and become a part of our dynamic team!</p>
                        <form action="" method="POST" id="careerForm" class="contact-form contact-form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <input class="form-control" id="website" name="website" placeholder="Website URL" type="hidden">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Resume</label>
                                        <input class="form-control" id="resume" name="resume" placeholder="Phone" type="file">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" name="submit" id="submit" onclick="submitCareerForm()">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <!-- End Contact -->

   
	<?php include 'includes/footer.php' ?>
	<?php include 'includes/footerjs.php' ?>
</body>

</html>	