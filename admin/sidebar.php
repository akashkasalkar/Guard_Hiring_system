 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link" style="font-weight:bold; font-size:22px;">
    

      <span class="brand-text font-weight-light">OSGHS | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/download.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="admin-profile.php" class="d-block">Welcome : </a>
         
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          <li class="nav-item">
            <a href="./dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               </p>
            </a>
        
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./add_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
             </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Job Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="all-booking-request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All  Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pending_request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="accepted-booking-request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accepted Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rejected-booking-request.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Request</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Property
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_property.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Property</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_property.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Property</p>
                </a>
              </li>
             </ul>
          </li>
           
          <li class="nav-item">
            <a href="visitors_details.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                View Visitors
               </p>
            </a>
        
          </li>
          <li class="nav-item">
            <a href="view_user.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User details
               </p>
            </a>
        
          </li>
        
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Admin Setting
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
           
              </li>
              <li class="nav-item">
                <a href="./logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
             </ul>
          </li>   -->

       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>