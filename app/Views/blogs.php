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
                    <h1>Blogs</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url('') ?>"><i class="fas fa-home"></i> Home</a></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
		<!-- Start Blog -->
	<div class="home-blog-area default-padding bottom-less bg-gray">
		
		<div class="container">
			<div class="row">
			    <?php
			    foreach($allblogs as $bg)
			    {
			        ?>
				<!-- Single Item -->
				<div class="col-xl-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
					<div class="blog-style-one">
						<div class="thumb"> <a href="<?php echo base_url('blog/'.$bg->blogslug) ?>"><img src="<?php echo base_url('uploads/blogs/'.$bg->image)?>" alt="<?php echo $bg->title ?>"></a> </div>
						<div class="info">
							<div class="blog-meta">
								<ul>
									<li> <span>By </span> <a href="<?php echo base_url('blog/'.$bg->blogslug) ?>"><?php echo $bg->writer ?></a> </li>
									<li> <?php echo date('d M, Y',strtotime($bg->blogdate))  ?> </li>
								</ul>
							</div>
							<h4>
<a href="<?php echo base_url('blog/'.$bg->blogslug) ?>"><?php echo $bg->title ?></a>
</h4> <a href="<?php echo base_url('blog/'.$bg->blogslug) ?>" class="btn-simple"><i class="fas fa-angle-right"></i> Read more</a> </div>
					</div>
				</div>
				<!-- End Single Item -->
				<?php
			    }
			    ?>
			</div>
		</div>
	</div>
	<!-- End Blog  -->
	<?php include 'includes/footer.php' ?>
	<?php include 'includes/footerjs.php' ?>
</body>

</html>	