<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="" class="text-nowrap logo-img mb-2 mt-1">
              <img src="<?php echo base_url('public/front/assets/img/logo.png') ?>" class="dark-logo" width="200" alt="" />
              <img src="<?php echo base_url('public/front/assets/img/logo.png') ?>" class="light-logo"  width="50" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8 text-muted"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('admin/dashboard') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              
              <!--Master-->
              <li class="sidebar-item  d-none">
                <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-adjustments"></i>
                  </span>
                  <span class="hide-menu">Master</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?php echo base_url('admin/media') ?>" class="sidebar-link">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Media</span>
                    </a>
                  </li>
                </ul>
            </li>
              
              
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('admin/blogs') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-brand-blogger"></i>
                  </span>
                  <span class="hide-menu">Blogs</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('admin/contact-leads') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Contact Enquiry</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('admin/service-leads') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Service Enquiry</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('admin/career-leads') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Career Enquiry</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('admin/newsletter') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Newsletter Subscription</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo base_url('admin/request') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Request For Enquiry</span>
                </a>
              </li>
              
            </ul>
          </nav>
          <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
              <div class="john-img">
                <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
              </div>
              <div class="john-title">
                <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                <span class="fs-2 text-dark">Designer</span>
              </div>
              <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="ti ti-power fs-6"></i>
              </button>
            </div>
          </div>  
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>