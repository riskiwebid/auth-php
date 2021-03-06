<?php require_once('functions/database.php'); ?>
<?php require_once('core/init.php'); ?>
<?php include 'functions/dashboard.php'; ?>
<?php include 'views/header.php'; ?>
<?php

/** jika session user tidak ada redirect ke halaman login  */
if ( !isset($_SESSION['user'])) {
  header('Location: signin.php');
}

?>

<div id="auth_php" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-10 mx-auto">
        <div class="jumbotron text-center bg-primary">
          <h1 class="text-white">Welcome back <?=ucfirst($user->name);?></h1>
          <h3 class="text-white">You are login successfull</h3>
          <p class="lead mt-4 text-white">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'views/footer.php'; ?>