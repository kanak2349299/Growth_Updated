<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->include('admin/include/head.php'); ?>
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
          <!--  Owl carousel -->
          <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
              <a href="<?php echo base_url('admin/blogs') ?>">
              <div class="card border-0 zoom-in bg-light-danger shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img width="70" height="70" src="https://img.icons8.com/ios/70/057c6d/edit-text-file.png" alt="edit-text-file"/>
                    <p class="fw-semibold fs-4 text-black mt-2 mb-1">Total Blogs </p>
                    <h5 class="fw-semibold text-black mb-0"><?php echo $totalBlogs; ?></h5>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-12">
              <a href="<?php echo base_url('admin/contact-leads') ?>">
              <div class="card border-0 zoom-in bg-light-danger shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img width="70" height="70" src="https://img.icons8.com/ios/70/057c6d/secured-letter--v1.png" alt="secured-letter--v1"/>
                    <p class="fw-semibold fs-4 text-black mt-2 mb-1">Total Contact Enquiry </p>
                    <h5 class="fw-semibold text-black mb-0"><?php echo $totalContact; ?></h5>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-12">
              <a href="<?php echo base_url('admin/career-leads') ?>">
              <div class="card border-0 zoom-in bg-light-danger shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img width="70" height="70" src="https://img.icons8.com/ios/70/057c6d/secured-letter--v1.png" alt="money-bag"/>
                    <p class="fw-semibold fs-4 text-black mt-2 mb-1">Career Enquiry</p>
                    <h5 class="fw-semibold text-black mb-0"><?php echo $totalCareer; ?></h5>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-12">
              <a href="<?php echo base_url('admin/newsletter') ?>">
              <div class="card border-0 zoom-in bg-light-danger shadow-none">
                <div class="card-body">
                  <div class="text-center">
                   <img width="70" height="70" src="https://img.icons8.com/external-thin-kawalan-studio/70/057c6d/external-user-plus-users-thin-kawalan-studio.png" alt="external-user-plus-users-thin-kawalan-studio"/>
                    <p class="fw-semibold fs-4 text-black mt-2 mb-1">Newsletter Subscription </p>
                    <h5 class="fw-semibold text-black mb-0"><?php echo $totalNews; ?></h5>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    
    <!--  Mobilenavbar -->
    <?php echo $this->include('admin/include/mobnav.php'); ?>
    <!--  Import Js Files -->
    <?php echo $this->include('admin/include/footerjs.php'); ?>
    <script src="<?php echo base_url('back/dist/js/dashboard.js') ?>"></script>
  </body>
</html>