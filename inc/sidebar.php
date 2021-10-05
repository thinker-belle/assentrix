<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link elevation-2">
    <img src="dist/img/rrlogo.png" alt="RRGroup Logo" class="brand-image img-rounded elevation-3"
         style="opacity: 1">
    <span class="brand-text font-weight-light">RRFC</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php?dashboard" class="nav-link <?php echo isset($_GET['dashboard'])? "active" : "" ; ?> ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="index.php?assetlookup" class="nav-link <?php echo isset($_GET['assetlookup'])? "active" : "" ; ?> ">
            <i class="nav-icon fas fa-crosshairs"></i>
            <p>Asset Lookup
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li> -->

        <li class="nav-item has-treeview <?php echo isset($_GET['administration'])? "menu-open" : "" ; ?> ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-university"></i>
            <p>
              Administration
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?administration&general" class="nav-link <?php echo isset($_GET['general'])? "active" : "" ; ?> ">
                <i class="nav-icon fas fa-cogs ml-2"></i>
                <p>General Settings</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?administration&users" class="nav-link <?php echo isset($_GET['users'])? "active" : "" ; ?> ">
              <i class="nav-icon fas fa-cogs ml-2"></i>
                <p>User Management</p>
              </a>

            </li>
            <li class="nav-item">
              <a href="index.php?administration&authorization" class="nav-link <?php echo isset($_GET['authorization'])? "active" : "" ; ?> ">
                <i class="nav-icon fas fa-cogs ml-2"></i>
                <p>User Authorization</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
            Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-desktop ml-2"></i>
                <p>Asset Inventory</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users ml-2"></i>
                <p>Employees</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Transactions
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-clone ml-2"></i>
                <p>Gatepass</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-clone ml-2"></i>
                <p>Accountability</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
