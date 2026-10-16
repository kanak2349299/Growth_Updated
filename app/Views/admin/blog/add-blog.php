<!DOCTYPE html>
<html lang="en">

<head>
	<?php echo $this->include('admin/include/head.php'); ?>
	<style>
	    .ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable, .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners {
    min-height: 250px;
}
	</style>
</head>

<body>
	<!--  Body Wrapper -->
	<div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
		<!-- Sidebar Start -->
		<?php echo $this->include('admin/include/sidebar.php'); ?>
			<!--  Sidebar End -->
			<!--  Main wrapper -->
			<div class="body-wrapper">
				<!--  Header Start -->
				<?php echo $this->include('admin/include/header.php'); ?>
					<!--  Header End -->
					<div class="container-fluid">
						<div class="card bg-light-info shadow-none position-relative overflow-hidden">
							<div class="card-body px-4 py-3">
								<div class="row align-items-center">
									<div class="col-9">
										<h4 class="fw-semibold mb-8">Add Blog</h4>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a class="text-muted " href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></li>
												<li class="breadcrumb-item" aria-current="page">Add Blog</li>
											</ol>
										</nav>
									</div>
									<div class="col-3"> </div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<?php echo $this->include('admin/include/flash.php'); ?>
									<form method="POST" action="<?php echo base_url('admin/create-blog') ?>" enctype="multipart/form-data">
										<div class="row">
											<div class="col-lg-8">
												<div class="mb-3 form-group">
													<label class="form-label">Blog Title <span class="text-danger">*</span></label>
													<div class="controls">
														<input name="title" id="title" required="" class="form-control" aria-invalid="true" onkeyup="generateSlug()"> </div>
												</div>
											</div>
										    <div class="col-lg-4">
												<div class="mb-3 form-group">
													<label class="form-label">Image <span class="text-danger">*</span></label>
													<div class="controls">
														<input type="file" name="image" id="image" required="" class="form-control" aria-invalid="true" > </div>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="mb-3 form-group">
													<label class="form-label">Slug <span class="text-danger">*</span></label>
													<div class="controls">
														<input name="slug" id="slug" required="" class="form-control" aria-invalid="true"> </div>
													<div class="form-control-feedback"> </div>
												</div>
											</div>
											
											
											<div class="col-lg-4">
												<div class="mb-3 form-group">
													<label class="form-label">Blog date <span class="text-danger">*</span></label>
													<div class="controls">
														<input type="date" name="blogdate" id="blogdate" required="" class="form-control" aria-invalid="true" > </div>
												</div>
											</div>
										
											
											<div class="col-lg-12">
												<div class="mb-3 form-group">
													<label class="form-label">Description</label>
													<div class="controls">
														<textarea name="description" id="description"   class="form-control" aria-invalid="true"></textarea>
													</div>
												</div>
											</div>
											
											<div class="col-lg-12">
												<div class="mb-3 form-group">
													<label class="form-label">Blog Writer Name<span class="text-danger">*</span></label>
													<div class="controls">
														<input name="writer" id="writer" required="" class="form-control" aria-invalid="true"> </div>
													<div class="form-control-feedback"> </div>
												</div>
											</div>
											
											
											
											<div class="col-lg-12 mb-3">
											
												<input type="submit" class="btn btn-primary" value="Save">
										</div>
									</form>
							</div>
						</div>
					</div>
			</div>
	</div>
	<!--  Mobilenavbar -->
	<?php echo $this->include('admin/include/mobnav.php'); ?>
		<!--  Import Js Files -->
		<?php echo $this->include('admin/include/footerjs.php'); ?>
			<script>
    CKEDITOR.replace('description');
</script>
			<script>
function generateSlug() {
    // Get the value of the blog title input
    var title = document.getElementById('title').value.trim();

    // Convert spaces to hyphens, remove special characters
    var slug = title.toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');

    // Update the slug input field
    document.getElementById('slug').value = slug;
}
</script>
</body>

</html>