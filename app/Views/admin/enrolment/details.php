<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->include('admin/include/head.php'); ?>
    <style>
        .form_header_title {
    font-style: normal;
    font-weight: 800;
    font-size: 16px;
    line-height: 26px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    color: #057c6d;
    padding-bottom:5px;
    border-bottom: 1px solid #057c6d;
    margin-bottom: 1rem;
    margin-top: 1rem;
}
td {
  max-width: 200px; /* Set your desired max width */
  word-wrap: break-word; /* Ensures the content wraps to the next line */
  white-space: normal; /* Allows text to wrap to the next line */
}
th {
  max-width: 200px; /* Set your desired max width */
  word-wrap: break-word; /* Ensures the content wraps to the next line */
  white-space: normal; /* Allows text to wrap to the next line */
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
                    <!--<a href="<?php echo base_url('admin/add-category') ?>" class="btn btn-primary">Add New</a>-->
                  </div>
                </div>
              </div>
            </div>
            </div>
          <div class="card">
                <div class="card-body">
                    <?php echo $this->include('admin/include/flash.php'); ?>
                 <!-- start Tab with Flex Utilities -->


                  <!-- Nav tabs -->
                  <ul class="nav nav-pills flex-column flex-sm-row mt-4" role="tablist">
                    <li class="nav-item flex-sm-fill text-sm-center">
                      <a class="nav-link active" data-bs-toggle="tab" href="#navpill-11" role="tab">
                        <span>Step 1</span>
                      </a>
                    </li>
                    <?php
                    if($det->steps=='Step 2' || $det->steps=='Step 3')
                    {
                        ?>
                    <li class="nav-item flex-sm-fill text-sm-center">
                      <a class="nav-link" data-bs-toggle="tab" href="#navpill-22" role="tab">
                        <span>Step 2</span>
                      </a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php
                    if($det->steps=='Step 3')
                    {
                        ?>
                    <li class="nav-item flex-sm-fill text-sm-center">
                      <a class="nav-link" data-bs-toggle="tab" href="#navpill-33" role="tab">
                        <span>Step 3</span>
                      </a>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content border mt-2">
                    <!--**************************STEP***********************************  -->
                    <div class="tab-pane active p-3" id="navpill-11" role="tabpanel">
                      <div class="row">
                        <div class="col-md-12">
                          <h5 class="form_header_title">APPLICATION FOR ENROLMENT</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>Preferred start date</th>
                                  <td><?php 
                                  if($det->startDate!='0000-00-00')  
                                  {
                                  echo date('M d, Y',strtotime($det->startDate)) ;
                                  } 
                                  ?></td>
                              </tr>
                              <tr>
                                  <th>Have you ever studied with Pegasus International College before?</th>
                                  <td><?php echo $det->studies ?></td>
                              </tr>
                          </table></div>
                          
                          <h5 class="form_header_title">PERSONAL DETAILS</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>Surname</th>
                                  <td><?php echo $det->surname ?></td>
                                  <th>Given names</th>
                                  <td><?php echo $det->givenname ?></td>
                              </tr>
                              <tr>
                                  <th>Date Of Birth</th>
                                  <td><?php echo date('M d, Y',strtotime($det->dob)) ?></td>
                                  <th>Gender</th>
                                  <td><?php echo $det->gender ?></td>
                              </tr>
                              <tr>
                                  <th>Home phone</th>
                                  <td><?php echo $det->homephone ?></td>
                                  <th>Work Phone</th>
                                  <td><?php echo $det->workphone ?></td>
                              </tr>
                              <tr>
                                  <th>Mobile</th>
                                  <td><?php echo $det->mobile ?></td>
                                  <th>Email ID</th>
                                  <td><?php echo $det->emailid ?></td>
                              </tr>
                              <tr>
                                  <th colspan="4" class="text-center bg-light-green"> Address </th>
                              </tr>
                              <tr>
                                  <th colspan="2">Building/Property Name</th>
                                  <td colspan="2"><?php echo $det->building ?></td>
                              </tr>
                              <tr>
                                  <th>Flat/unit </th>
                                  <td><?php echo $det->flat ?></td>
                                  <th>Street or Lot Number</th>
                                  <td><?php echo $det->streetno ?></td>
                              </tr>
                              <tr>
                                  <th>Street name </th>
                                  <td><?php echo $det->streetname ?></td>
                                  <th>Suburb, locality or town</th>
                                  <td><?php echo $det->town ?></td>
                              </tr>
                              <tr>
                                  <th>State/territory </th>
                                  <td><?php echo $det->state ?></td>
                                  <th>Postcode</th>
                                  <td><?php echo $det->postcode ?></td>
                              </tr>
                              <tr>
                                  <th colspan="4" class="text-center bg-light-yellow">Postal Address </th>
                              </tr>
                              <tr>
                                  <th colspan="2">Building/Property Name</th>
                                  <td colspan="2"><?php echo $det->pbuilding ?></td>
                              </tr>
                              <tr>
                                  <th>Flat/unit </th>
                                  <td><?php echo $det->pflat ?></td>
                                  <th>Street or Lot Number</th>
                                  <td><?php echo $det->pstreetno ?></td>
                              </tr>
                              <tr>
                                  <th>Street name </th>
                                  <td><?php echo $det->pstreetname ?></td>
                                  <th>Suburb, locality or town</th>
                                  <td><?php echo $det->ptown ?></td>
                              </tr>
                              <tr>
                                  <th>State/territory </th>
                                  <td><?php echo $det->pstate ?></td>
                                  <th>Postcode</th>
                                  <td><?php echo $det->ppostcode ?></td>
                              </tr>
                          </table></div>
                          
                          <h5 class="form_header_title">LANGUAGE AND CULTURAL DIVERSITY</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>In which country were you born?</th>
                                  <td><?php echo $det->country ?> <?php if($det->country=='Other') {echo '('.$det->othercountry.')';} ?></td>
                              </tr>
                              <tr>
                                  <th>Do you speak a language other than English at home?</th>
                                  <td><?php echo $det->language ?> <?php if($det->language=='Other') {echo '('.$det->otherlanguage.')';} ?></td>
                              </tr>
                              <tr>
                                  <th>Are you of Aboriginal or Torres Strait Islander origin?</th>
                                  <td><?php echo $det->origin ?></td>
                              </tr>
                          </table></div>
                        </div>
                      </div>
                    </div>
                    <!--**************************STEP***********************************-->
                    <div class="tab-pane p-3" id="navpill-22" role="tabpanel">
                      <div class="row">
                        <div class="col-md-12">
                          <h5 class="form_header_title">DISABILITY</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>Do you consider yourself to have a disability, impairment, or long-term condition?</th>
                                  <td><?php echo $det->disability ?></td>
                              </tr>
                              <?php
                              if($det->disability=='Yes')
                              {
                                  ?>
                              <tr>
                                  <th>Disability Type</th>
                                  <td><?php echo $det->disabilityType ?></td>
                              </tr>
                              <?php
                              }
                              ?>
                          </table></div>
                          
                          <h5 class="form_header_title">SCHOOLING</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>What is your highest COMPLETED school level?</th>
                                  <td><?php echo $det->schooling ?></td>
                              </tr>
                             
                              <tr>
                                  <th>Are you still enrolled in secondary or senior secondary education?</th>
                                  <td><?php echo $det->education ?></td>
                              </tr>
                              <?php
                              if($det->education=='Yes')
                              {
                                  ?>
                              <tr>
                                  <th>Education Details</th>
                                  <td><?php echo $det->educationDet ?></td>
                              </tr>
                              <?php
                              }
                              ?>
                              
                          </table></div>
                          
                          <h5 class="form_header_title">PREVIOUS QUALIFICATIONS ACHIEVED</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>Have you SUCCESSFULLY completed any of the qualifications listed in question 15?</th>
                                  <td><?php echo $det->disability ?></td>
                              </tr>
                              <?php
                              if($det->disability=='Yes')
                              {
                                  ?>
                              <tr>
                                  <th>Qualification Type</th>
                                  <td><?php echo $det->qualificationType ?></td>
                              </tr>
                              <?php
                              }
                              ?>
                          </table></div>
                          
                          <h5 class="form_header_title">EMPLOYEMENT</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>Which BEST describes your current employment status?</th>
                                  <td><?php echo $det->employement ?></td>
                              </tr>
                          </table></div>
                          
                          <h5 class="form_header_title">STUDY REASON</h5>
                          
                          <div class="table-responsive"><table class="table table-bordered">
                              <tr>
                                  <th>We which BEST describes your main reason for undertaking this course/traineeship/apprenticeship?</th>
                                  <td><?php echo $det->studyReason ?></td>
                              </tr>
                          </table></div>
                        </div>
                        
                      </div>
                    </div>
                    <!--**************************STEP***********************************-->
                    <div class="tab-pane p-3" id="navpill-33" role="tabpanel">
                      <div class="row">
                        
                        <div class="col-md-12">
                          <h5 class="form_header_title">PASSPORT AND VISA DETAILS</h5>
                          
                          <div class="table-responsive">
                              <table class="table table-bordered">
                              <tr>
                                  <th colspan="2">Country of Passport</th>
                                  <td colspan="2"><?php echo $det->passportCountry ?></td>
                              </tr>
                              <tr>
                                  <th>Passport No</th>
                                  <td><?php echo $det->passportNo ?></td>
                                  <th>Passport Expiry Date</th>
                                  <td><?php if(!empty($det->passportExpiry)) {echo date('M d, Y',strtotime($det->passportExpiry));}  ?></td>
                              </tr>
                              <tr>
                                  <th>Visa Subclass</th>
                                  <td><?php echo $det->visaSubclass ?></td>
                                  <th>Visa Expiry Date</th>
                                  <td><?php if(!empty($det->visaExpiry)) {echo date('M d, Y',strtotime($det->visaExpiry));}  ?></td>
                              </tr>
                              <tr>
                                  <th colspan="2">Does your visa conditions permit you to study in Australia?</th>
                                  <td colspan="2"><?php echo $det->visaCondition ?></td>
                              </tr>
                          </table>
                          </div>
                          
                          <h5 class="form_header_title">VICTORIAN STUDENT NUMBER TO BE COMPLETED BY ALL VICTORIAN STUDENTS AGED UP TO 24 YEARS </h5>
                          
                          <div class="table-responsive">
                              <table class="table table-bordered">
                              <tr>
                                  <th colspan="2">VSN Number</th>
                                  <td colspan="2"><?php echo $det->vsnNo ?></td>
                              </tr>
                              <tr>
                                  <th colspan="2">Have you attended any Victorian school since 2009 or done any training with a vocational education and training (VET) registered training organisation or an Adult and Community Education provider in Victoria since 2011?</th>
                                  <td colspan="2">
                                      <?php echo $det->victorianSchool ?>
                                  <?php
                                  if($det->victorianSchool=='Yes - I have attended a Victorian school since 2009')
                                  {
                                      ?>
                                      <table class="table table-bordered mt-3">
                                          <tr>
                                              <td>1. <?php echo $det->schoolAttended0 ?></td>
                                          </tr>
                                      </table>
                                      <?php
                                  }
                                  ?>
                                  <?php
                                  if($det->victorianSchool=='Yes – I have participated in training at a TAFE or other training organisation since the beginning of 2011')
                                  {
                                      ?>
                                      <table class="table table-bordered mt-3">
                                          <tr>
                                              <td>1. <?php echo $det->schoolAttended1 ?></td>
                                          </tr>
                                          <tr>
                                              <td>2. <?php echo $det->schoolAttended2 ?></td>
                                          </tr>
                                          <tr>
                                              <td>3. <?php echo $det->schoolAttended3 ?></td>
                                          </tr>
                                      </table>
                                      <?php
                                  }
                                  ?>
                                  </td>
                              </tr>
                              <tr>
                                  
                              </tr>
                          </table>
                          </div>
                          
                          
                          <h5 class="form_header_title">UNIQUE STUDENT IDENTIFIER (USI) </h5>
                          
                          <div class="table-responsive">
                              <table class="table table-bordered">
                              <tr>
                                  <th colspan="2">USI No</th>
                                  <td colspan="2"><?php echo $det->usiNo ?></td>
                              </tr>
                              
                              <tr>
                                  <th colspan="2">If you do not have a USI, would you like us to apply for a USI on your behalf?</th>
                                  <td colspan="2"><?php echo $det->applyUsi ?></td>
                              </tr>
                              
                          </table>
                          </div>
                          
                          <!--*********APPLU USI*************-->
                          <?php if($det->applyUsi=="Yes"){ ?>
                          <h5 class="form_header_title">APPLYING ON YOUR BEHALF </h5>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                              <tr>
                                  <th>Town/City of Birth</th>
                                  <td><?php echo $det->oversearTown ?></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                              </tr>
                              <tr>
                                  <th colspan="6" class="text-center bg-light-green"> Australian Driver’s License </th>
                              </tr>
                              <tr>
                                  <th>State</th>
                                  <td><?php echo $det->driverState ?></td>
                                  <th>License Number</th>
                                  <td><?php echo $det->driverLicenseNo ?></td>
                                  <th></th>
                                  <td></td>
                              </tr>
                              <tr>
                                  <th colspan="64" class="text-center bg-light-yellow"> Medicare Card </th>
                              </tr>
                              <tr>
                                  <th>Medicare card number</th>
                                  <td><?php echo $det->medicareCardNo ?></td>
                                  <th>Card colour</th>
                                  <td><?php echo $det->medicareColor ?></td>
                                  <th>Card Expiry</th>
                                  <td><?php echo date('M d, Y',strtotime($det->medicareExpiry)) ?></td>
                              </tr>
                              <tr>
                                  <th colspan="64" class="text-center bg-light-green">Australian Passport </th>
                              </tr>
                              <tr>
                                  <th>Passport number</th>
                                  <td><?php echo $det->austPassportNo ?></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                  <th colspan="64" class="text-center bg-light-yellow">Non Australian Passport </th>
                              </tr>
                              <tr>
                                  <th>Passport number</th>
                                  <td><?php echo $det->NonAustPassportNo ?></td>
                                 <th>Country of issue</th>
                                 <td><?php echo $det->countryOfIssue ?></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                  <th colspan="64" class="text-center bg-light-green">Immicard </th>
                              </tr>
                              <tr>
                                  <th>Immicard NO</th>
                                  <td><?php echo $det->ImmicardNo ?></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                  <th colspan="64" class="text-center bg-light-yellow">Citizenship Certificate </th>
                              </tr>
                              <tr>
                                  <th>Stock number</th>
                                  <td><?php echo $det->citizenStockNo ?></td>
                                 <th>Acquisition date (day/month/year):</th>
                                 <td><?php echo date('d M Y',strtotime($det->citizenAcquisitionDate)) ?></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                  <th colspan="64" class="text-center bg-light-green">Certificate of Registration by Descent </th>
                              </tr>
                              <tr>
                                 <th>Acquisition date (day/month/year):</th>
                                 <td><?php echo date('d M Y',strtotime($det->descentAcquisitionDate)) ?></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                              </tr>
                          </table>
                          </div>
                          <?php } ?>
                          <!--*********APPLU USI*************-->
                          
                          <!--*****KIN*********-->
                          <h5 class="form_header_title">NEXT OF KIN/EMERGENCY CONTACT</h5>
                          
                          <div class="table-responsive">
                              <table class="table table-bordered">
                              <tr>
                                  <th>Name</th>
                                  <td><?php echo $det->kinName ?></td>
                                  <th>Relationship to you</th>
                                  <td><?php echo $det->kinRelation ?></td>
                              </tr>
                              
                              <tr>
                                  <th colspan="2">Address</th>
                                  <td colspan="2"><?php echo $det->kinAddress ?></td>
                              </tr>
                              
                              <tr>
                                  <th>Home phone</th>
                                  <td><?php echo $det->kinHomePhone ?></td>
                                  <th>Work phone</th>
                                  <td><?php echo $det->kinWorkPhone ?></td>
                              </tr>
                              
                              <tr>
                                  <th>Mobile</th>
                                  <td><?php echo $det->kinMobile ?></td>
                                  <th>Email</th>
                                  <td><?php echo $det->kinEmail ?></td>
                              </tr>
                            </table>
                          </div>
                          <!--*****KIN*********-->
                        </div>
                      </div>
                    </div>
                    <!--**************************STEP***********************************-->
                  </div>
              <!-- end Tab with Flex Utilities -->            
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
        function openDeleteModal(id)
    {
        var deleteId=document.getElementById('deleteId');
        deleteId.value=id;
        $('#deleteModal').modal('show');
    }
    </script>
  </body>
</html>