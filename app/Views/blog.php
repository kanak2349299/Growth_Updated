<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php' ?>
</head>

<body class="home-solar">
    
	<?php include 'includes/header.php' ?>
	<?php
	$blogTitle = isset($det->title) ? (string) $det->title : 'Blog';
	$blogWriter = isset($det->writer) ? (string) $det->writer : 'Growth Investment & Development';
	$blogDate = isset($det->blogdate) ? date('d M, Y', strtotime((string) $det->blogdate)) : '';
	$blogImage = '';
	if (!empty($det->image)) {
	    $blogImageFile = basename((string) $det->image);
	    $blogImagePath = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'blogs' . DIRECTORY_SEPARATOR . $blogImageFile;
	    if (is_file($blogImagePath)) {
	        $blogImage = base_url('uploads/blogs/' . rawurlencode($blogImageFile));
	    }
	}
	?>
	
	<div class="breadcrumb-area bg-cover shadow dark text-center text-light mt-150" style="background-image: url('<?php echo base_url($frontAssetBase . "img/banner/10.jpg") ?>')">
        <div class="breadcrum-shape">
            <img src="<?php echo base_url($frontAssetBase . "img/shapes/breadcrumb.png") ?>" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?php echo esc($blogTitle) ?></h1>
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
                                <?php if ($blogImage !== ''): ?>
                                <div class="thumb">
                                    <a href="<?php echo esc($blogImage) ?>"><img src="<?php echo esc($blogImage) ?>" alt="<?php echo esc($blogTitle) ?>"></a>
                                </div>
                                <?php endif; ?>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <?php if ($blogDate !== ''): ?>
                                            <li>
                                                <a><i class="fas fa-calendar-alt"></i> <?php echo esc($blogDate) ?></a>
                                            </li>
                                            <?php endif; ?>
                                            <li>
                                                <a><i class="fas fa-user-circle"></i>By <?php echo esc($blogWriter) ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contentblog text-justify">
                                        <?php echo $det->blogdetails ?? '' ?>
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
                                    <?php foreach ($allblogs as $bg): ?>
                                        <?php
                                        $recentImage = '';
                                        if (!empty($bg->image)) {
                                            $recentImageFile = basename((string) $bg->image);
                                            $recentImagePath = FCPATH . 'uploads' . DIRECTORY_SEPARATOR . 'blogs' . DIRECTORY_SEPARATOR . $recentImageFile;
                                            if (is_file($recentImagePath)) {
                                                $recentImage = base_url('uploads/blogs/' . rawurlencode($recentImageFile));
                                            }
                                        }
                                        ?>
                                        <li>
                                            <div class="thumb">
                                                <?php if ($recentImage !== ''): ?>
                                                <a href="<?php echo esc(base_url('blog/' . $bg->blogslug)) ?>">
                                                    <img src="<?php echo esc($recentImage) ?>" alt="<?php echo esc((string) $bg->title) ?>">
                                                </a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="info">
                                                <div class="meta-title">
                                                    <span class="post-date"><?php echo esc(date('d M, Y', strtotime((string) $bg->blogdate))) ?></span>
                                                </div>
                                                <a href="<?php echo esc(base_url('blog/' . $bg->blogslug)) ?>"><?php echo esc((string) $bg->title) ?></a>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
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