<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>DATA PKL BATAN BANDUNG</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>asset/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
    <div class="login-box">
      <div class="login-logo" >
        <img class="card-body" width='60' src=<?php echo base_url();?>asset/image/logo_batan.png >BAHJUM
      </div>
    </div>
  </div>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
        <div class="card-body">
          <form method="post" action="<?php echo site_url('Api/login'); ?>">
            <div class="form-group">
              <label for="username">Username</label>
              <input class="form-control" name="username" id="username" type="text" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" name="password" id="password" type="password" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" name="login" type="login">Login</button>
          </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo site_url('welcome/register')?>">Register an Account</a>
          <a class="d-block small" href="<?php echo site_url('welcome/lupapassword')?>">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
