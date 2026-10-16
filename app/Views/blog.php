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
                    <h1><?php echo $det->title ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url('') ?>"><i class="fas fa-home"></i> Home</a></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
		<!-- Start Blog -->
	<div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                        <div class="blog-style-two item">

                            <div class="blog-item-box">
                                
                                <div class="thumb">
                                    <a ><img src="<?php echo base_url('uploads/blogs/'.$det->image) ?>" alt="<?php echo $det->title ?>"></a>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a ><i class="fas fa-calendar-alt"></i> <?php echo date('d M, Y',strtotime($det->blogdate)) ?></a>
                                            </li>
                                            <li>
                                                <a ><i class="fas fa-user-circle"></i>By <?php echo $det->writer ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contentblog text-justify">
                                        <?php echo $det->blogdetails ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                      

                       
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-50 mt-xs-50">
                        <aside>
                            
                            <div class="sidebar-item recent-post">
                                <h4 class="title">Recent Post</h4>
                                <ul>
                                    <?php
                    			    foreach($allblogs as $bg)
                    			    {
                    			        ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="<?php echo base_url('blog/'.$bg->blogslug) ?>">
                                                <img src="<?php echo base_url('uploads/blogs/'.$bg->image) ?>" alt="<?php echo $bg->title ?>">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date"><?php echo date('d M, Y',strtotime($bg->blogdate)) ?></span>
                                            </div>
                                            <a href="<?php echo base_url('blog/'.$bg->blogslug) ?>"><?php echo $bg->title ?></a>
                                        </div>
                                    </li>
                                    <?php
                    			    }
                    			    ?>
                                </ul>
                            </div>
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
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
	<!-- End Blog  -->
	<?php include 'includes/footer.php' ?>
	<?php include 'includes/footerjs.php' ?>
</body>

</html>	