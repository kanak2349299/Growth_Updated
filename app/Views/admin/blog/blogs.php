<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->include('admin/include/head.php'); ?>
    <style>
        .line-clamp3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;  
  overflow: hidden;
}
    </style>
  </head>
  <body>
    
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
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
                  <h4 class="fw-semibold mb-8"><?php echo $metatitle ?></h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted " href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></li>
                      <li class="breadcrumb-item" aria-current="page"><?php echo $metatitle ?></li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center ">  
                    <!--<img src="<?php echo base_url('back/dist/images/breadcrumb/ChatBc.png') ?>" alt="" class="img-fluid mb-n4">-->
                    <a href="<?php echo base_url('admin/add-blog') ?>" class="btn btn-primary">Add New</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          <div class="card">
            <div class="card-body">
             <?php echo $this->include('admin/include/flash.php'); ?>
             <div class="row">
                 <?php
                 foreach($alldata as $bg)
                 {
                     $plainText = strip_tags($bg->blogdetails);
                     ?>
                 <div class="col-lg-4">
                     <div class="card">
                        <img class="card-img-top img-responsive" src="<?php echo base_url('uploads/blogs/'.$bg->image) ?>" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title"><?php echo $bg->title ?></h4>
                              <div class="line-clamp3 mb-3"> <?php echo $plainText ?></div>
                           
                          <a href="<?php echo base_url('admin/edit-blog/'.$bg->id) ?>" class="btn btn-primary">Edit</a>
                          <a href="javascript:void(0)" class="btn btn-danger" onclick="openDeleteModal(<?php echo $bg->id ?>)">Delete</a>
                        </div>
                      </div>
                         </div>
                 <?php
                 }
                 ?>
             </div>
            </div>
         </div>
        </div>
      </div>
    </div>
    <!--Delete Modal-->
			<div id="deleteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            	<div class="modal-dialog">
            		<div class="modal-content">
            			<div class="modal-header">
            				<h5 class="modal-title" id="myModalLabel">Delete blog</h5>
            				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            			</div>
            			<div class="modal-body">
            			    <h5>Are you sure you want to delete this blog?</h5>
            				<form method="POST" action="<?php echo base_url('admin/delete-blog') ?>" class="needs-validation" novalidate>
            				    <input type="hidden" name="deleteId" id="deleteId">
                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Yes">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                </div>
            				</form>
            				
            				
            			</div>
            		</div>
            	</div>
            </div>
            <!-- End Delete Modal -->
    <!--  Mobilenavbar -->
    <?php echo $this->include('admin/include/mobnav.php'); ?>
    <!--  Import Js Files -->
    <?php echo $this->include('admin/include/footerjs.php'); ?>
    <script>
        function openDeleteModal(id)
    {
        var deleteId=document.getElementById('deleteId');
        deleteId.value=id;
        $('#deleteModal').modal('show');
    }
    </script>
  </body>
</html>