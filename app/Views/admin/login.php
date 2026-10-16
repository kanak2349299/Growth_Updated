<!DOCTYPE html>
<html lang="en">
  <head>
      <?php echo $this->include('admin/include/head.php'); ?>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="<?php echo base_url('public/front/assets/img/favicon.ico') ?>" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="<?php echo base_url('public/front/assets/img/favicon.ico') ?>" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="<?php echo base_url() ?>" class="text-nowrap logo-img text-center d-block mb-2 w-100">
                    <img src="<?php echo base_url('public/front/assets/img/logo.png') ?>" width="220" alt="">
                  </a>
                  
                  <form method="POST" id="loginForm" action="<?php echo base_url('admin/login') ?>">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="" required>
                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" value="" required>
                    </div>
                    <!--<div class="d-flex align-items-center justify-content-between mb-4">-->
                    <!--  <div class="form-check">-->
                        
                    <!--  </div>-->
                    <!--  <a class="text-primary fw-medium" href="#">Forgot Password ?</a>-->
                    <!--</div>-->
                    <input type="submit" name="" class="btn btn-green w-100 py-8 mb-4 rounded-2" value="Sign In">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--  Import Js Files -->
    <?php echo $this->include('admin/include/footerjs.php'); ?>
    
		<script>  
        $('form#loginForm').submit(function(e){
    var form = $(this);
    let urls = form.attr('action');
    e.preventDefault();
    $.ajax({
      url:urls,
      type:"POST",
      data:form.serialize(),
      dataType :'JSON',
      success:function(data){
        if (data.status==1) {
          $('form#loginForm')[0].reset();
          toastr.success(data.msg);
          
          setTimeout(function() {
            window.location.href = 'admin/dashboard';
        }, 1000);
        
        }else{
          toastr.error(data.msg);
        }
      }
    });
  });
	</script>
  </body>
</html>