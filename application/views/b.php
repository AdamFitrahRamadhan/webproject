<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel = "stylesheet" type ="text/css"
    href="<?=base_url();?>asset/css/bootstrap.css">
    <link rel = "stylesheet" type ="text/css"
    href="<?=base_url();?>asset/css/style.css">

    <script type="text/javascript" src="<?=base_url();?>asset/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?=base_url();?>asset/js/bootstrap.js"></script>
  </head>
  <body background="malam.jpg">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url();?>asset/#" style="font-family:fantasy;">MARVEL STUDIOS</a>
    </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
        <li><a href="<?=base_url();?>index.php/User/index"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
        <li><a href="<?=base_url();?>index.php/User/profil"><span class="glyphicon glyphicon-facetime-video"></span> FILM</a></li>
        <li><a href="<?=base_url();?>index.php/User/kritik"><span class="glyphicon glyphicon-send"></span> NEWS</a></li>
  <li><a><?= $this->session->userdata('nama');?></a></li>
  </ul>
  

  <ul class="nav navbar-nav navbar-right">
  <li><a href="<?=base_url();?>index.php/Admin/message"><span class="glyphicon glyphicon-asterisk"></span>PESANAN</a></li>
    <li>
      <a href="<?= base_url();?>index.php/cart/">
        <i class="glyphicon glyphicon-envelope"></i>
        <span class="label label success">
          <?=$this->cart->total_items();?>
        </span>
      </a>
    </li>
  <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
          <li><a href="<?=base_url();?>index.php/User/LOGOUT"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
</ul>
</div>
</div>
</nav>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->


</div>
<div id="marvel">
</div>
<div id=2018>
  
</div>
<div class="ayo">
<div class="container jarak">

  <div class="row">
<br><br>
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          
          <h3 class="panel-title text-center">TAYANG HARI INI</h3>
</div>
        <div class="panel-body">
          
  <div class="col-lg-12">
    <div class="input-group">
      <span class="input-group-addon">
      </span>
      <input type="text" class="form-control" placeholder="kritik dan saran">
    </div>
  </div>
  <br>
<br>
<center>
 <li><a href=""><button type="button" class="btn btn-danger">KIRIM</button></a></li>
</center>
         </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal -->


</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
      var navigasi = $(".carousel").offset().top;
      var sticky = function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > navigasi)
        {
          $(".navbar-default").addClass("fix");
          $(".navbar-default .navbar-nav > li > a").addClass("a");
            $(".navbar-default .navbar-brand").addClass("b");
        }
        else {
          $(".navbar-default").removeClass("fix");
          $(".navbar-default .navbar-nav > li > a").removeClass("a");
          $(".navbar-default .navbar-brand").removeClass("b");
        }
      }
      sticky();
      $(window).scroll(function() {
        sticky();
      });
    });
</script>
