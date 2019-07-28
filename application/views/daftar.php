<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?=base_url();?>/index2.html"><b>DAFTAR</b>Bioskop</a>
  </div>

  <div class="login-box-body">
 <?php if($this->session->flashdata('pesan')!=null):?>
  <div class="alert alert-success"><?= $this->session->flashdata('pesan'); ?>    
  </div> 
<?php endif?>
  <div class="register-box-body">
    <form action="<?=base_url('index.php/user/simpan');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
       <textarea class="form-control" name="alamat" placeholder="alamat">
         
       </textarea>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="telpon" name="telp">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="date" class="form-control" placeholder="TTL" name="ttl">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select class="form-control" name="jenkel">
          <option></option>
          <option value="L">LAKI LAKI</option>
          <option value="P">PEREMPUAN</option>
        </select>
        <span class=" form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="username" name="username">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input name="submit" type="submit" class="btn btn-primary btn-block btn-flat" value="Register">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
  
    <a href="<?=base_url('index.php/user/login')?>" class="text-center">I already have a membership</a>
    
  </div>

  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?=base_url();?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url();?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
