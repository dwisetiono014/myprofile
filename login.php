<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/dist/css/skins/_all-skins.min.css');?>">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url('index.php/login');?>">Selamat Dwi</a>
    <a href="<?php echo base_url('index.php/login');?>"><b>Aplikasi</b>Manegement <b>System</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form action="<?php echo base_url('index.php/dashboard');?>" method="POST">
      <div class="form-group has-feedback">
        <label for="username">Username</label>
        <input type="username" class="form-control" placeholder="Username" id="username" name="username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" placeholder="Password" id="inputPassword" name="password"> 
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
        <!-- /.col -->
        <div>
          <!-- <button name="login" style="width:100px; margin:auto;" type="submit" class="btn btn-primary btn-block btn-flat" value="LOGIN">Masuk</button> -->
          <button name="login" style="width:100px; margin:auto;" type="submit" class="btn btn-primary btn-block" value="Login">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <form action="Registrasi.php">
      <div><span>Belum punya akun? Yuk Registrasi!</span></div>
          <div> <button name="registrasi"  type="submit" class="btn btn-primary btn-block btn-flat" value="LOGIN">Registrasi</button></div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>

<div style="position:absolute; top:0; left:0;">
    <div><span>Kembali ke Halaman Utama</span></div>
    <div>
        <a href="<?php echo base_url('index.php/list');?>" style="height:auto; font-size:10px; margin-left:5px;" class="btn btn-primary btn-lg active"  aria-pressed="true" > <i class="fa fa-arrow-left"></i></a>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('Assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('Assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('Assets/plugins/iCheck/icheck.min.js');?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
