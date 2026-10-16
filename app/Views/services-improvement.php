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
                    <h1><?php echo $servicetitle ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url('') ?>"><i class="fas fa-home"></i> Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="services-details-area overflow-hidden default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">
                    
                    <div class="col-xl-8 col-lg-7 pl-50 pl-md-15 pl-xs-15">
                        <div class="thumb">
                            <img src="<?php echo base_url('public/front/assets/img/growth/Continuous Improvement.png') ?>" alt="Thumb">
                        </div>
                        <h4>Continuous Improvement</h4>
                        <p class="text-justify">
                            We provide integrated services in continuous improvement and Lean management, where we help companies achieve a sustainable increase in productivity, and reduce waste by applying the principles of continuous improvement and Lean management.
                        </p>
                        
                    </div>

                    <?php include 'service-sidebar.php' ?>

                </div>
            </div>
        </div>
    </div>
	<?php include 'includes/footer.php' ?>
	<?php include 'includes/footerjs.php' ?>
</body>

</html>	