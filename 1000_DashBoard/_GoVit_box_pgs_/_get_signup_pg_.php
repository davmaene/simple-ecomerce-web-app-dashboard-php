<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>les 1000s | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dist/css/myCssStyle.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index.php"><b>1000Services</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="#" method="post" id="form_signup">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First name" id="fstName" name="fstName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-check text-success mr-1 hdn" id="chk_fn_fstName"></span>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last name" id="lstName" name="lstName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-check text-success mr-1 hdn" id="chk_fn_lstName"></span>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="emailfrom" name="emailfrom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-check text-success mr-1 hdn" id="chk_fn_emailfrom"></span>
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- <button type="button"></button> -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Phone number" id="phonenumber" name="phonenumber">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-check text-success mr-1 hdn" id="chk_fn_phonenumber"></span>
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password_1" name="password_1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-check text-success mr-1 hdn" id="chk_fn_password_1"></span>
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="password_2" name="password_2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-check text-success mr-1 hdn" id="chk_fn_password_2"></span>
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <label class="hdn fa fa-exclamation-triangle text-danger" id="hdn_label">
          <!-- <span id="for_mssg_o"></span> -->
        </label>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" class="btn btn-primary btn-block" id="btn_signup">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- <a href="_get_login_pg_.php" class="text-center">I already have a membership</a> -->
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/govitsignupscript.js"></script>
</body>
</html>
