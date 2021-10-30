<div class="row mb-0">
  <div class="col-sm-8">
    <h1 class="m-0 text-dark">
      <?php
      if(isset($_GET['dashboard'])) {
        echo "Dashboard";
      } elseif (isset($_GET['assetlookup'])) {
        echo "Asset Lookup";
      } elseif (isset($_GET['admin'])) {
        echo "Administration";
      } elseif (isset($_GET['users'])) {
        echo "User Management";
      } elseif (isset($_GET['authorization'])) {
        echo "User Authorization";
      }
      ?>
    </h1>
  </div>

  <?php if(isset($_GET['assetlookup'])): ?>
    <?php include 'inc/contentheadersearch.php'; ?>
  <?php endif; ?>
</div>
