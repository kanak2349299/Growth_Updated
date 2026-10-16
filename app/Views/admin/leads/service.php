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
                    <!--<a href="<?php echo base_url('admin/add-category') ?>" class="btn btn-primary">Add New</a>-->
                  </div>
                </div>
              </div>
            </div>
            </div>
          <div class="card">
                        <div class="card-body">
                            <?php echo $this->include('admin/include/flash.php'); ?>
                            <!--<div class=" m-t-40">-->
                            <div class="table-responsive m-t-40">
                                <table id="config-table" class="table border table-bordered ">
                                    <thead>
                                        <!-- start row -->
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Service</th>
                                            <th style="max-width:300px">Message</th>
                                            <th>Enquiry Date</th>
                                            <th>Action</th>
                                        </tr>
                                        <!-- end row -->
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sr=0;
                                        foreach($alldata as $ci)
                                        {
                                            $sr++;
                                            ?>
                                        <!-- start row -->
                                        <tr>
                                            <td><?php echo $sr ?></td>
                                            <td><?php echo $ci->name ?></td>
                                            <td><?php echo $ci->email ?></td>
                                            <td><?php echo $ci->phone ?></td>
                                            <td><?php echo $ci->service ?></td>
                                            <td style="max-width:300px;white-space:break-spaces"><?php echo $ci->message ?></td>
                                            <td><?php echo date('d M, Y',strtotime($ci->created)) ?></td>
                                            
                                            <td>
                                                <a class="btn mb-1 btn-sm waves-effect waves-light btn-danger" href="javascript:void()" onclick="openDeleteModal(<?php echo $ci->id ?>)">
                                                    <i class="ti ti-trash-x fs-4"></i> 
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- end row -->
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
            				<h5 class="modal-title" id="myModalLabel">Delete Enquiry</h5>
            				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            			</div>
            			<div class="modal-body">
            			    <h5>Are you sure you want to delete this Enquiry?</h5>
            				<form method="POST" action="<?php echo base_url('admin/delete-lead') ?>" class="needs-validation" novalidate>
            				    <input type="hidden" name="deleteId" id="deleteId">
            				    <input type="hidden" name="tablename" id="tablename" value="xyz_serviceEnquiry">
            				    <input type="hidden" name="redirect" id="redirect" value="service-leads">
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