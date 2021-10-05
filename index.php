<!DOCTYPE html>
<html lang="en">
<?php include 'inc/header.php';?>
<body class="hold-transition sidebar-mini layout-fixed  layout-navbar-fixed">
  <div class="wrapper">
    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/sidebar.php'; ?>
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <?php include 'inc/contentheaders.php'; ?>
          </div>
        </div>
        <section class="content">
          <?php if(isset($_GET['dashboard'])): ?>
            <?php include 'pages/dashboard.html'; ?>
          <?php elseif(isset($_GET['assetlookup'])): ?>
            <?php include 'pages/assetlookup.php'; ?>
          <?php elseif(isset($_GET['general'])): ?>
            <?php include 'pages/generalsettings.php'; ?>
          <?php elseif(isset($_GET['users'])): ?>
            <?php elseif(isset($_GET['authorization'])): ?>
          <?php else:?>
            <?php include 'pages/dashboard.html'; ?>
          <?php endif;
          ?>
        </section>
      </div>
      <?php include 'inc/footer.php'; ?>
      <?php include 'inc/mainscript.php'; ?>
  </div>
</body>
</html>
