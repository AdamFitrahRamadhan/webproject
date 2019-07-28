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

          <?php
            foreach ($tampil_film as $film) {
          ?>
            <div class="col-md-4">
              <a href="<?= base_url('index.php/user/detail_film/'.$film->id_film)?>" class="thumbnail">
                <img src="<?=base_url()?>asset/<?= $film->gambar_film;?>" style="width:100%">
                <div class="caption">
                  <?= $film->judul_film?>
                </div>
              </a>
            </div>
          <?php }?>
</div> 
         </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="gg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">GUARDIAN OF THE GALAXY</h4>
      </div>
      <div class="modal-body">
        <img src="<?=base_url();?>asset/gg.jpg" class="img-thumbnail"><center><h5 class="text-center">Studio: 2</h5>
              <h5 class="text-center">Tayang:jam | 16.00 | 18.00 | 20.00</h5>
             <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">PESAN TIKET</button></a></li>
            <br>
            <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-success">DETAIL</button></a></li>
              </span></center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="gg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">GUARDIAN OF THE GALAXY</h4>
      </div>
      <div class="modal-body">
        <img src="<?=base_url();?>asset/gg.jpg" class="img-thumbnail"><center><h5 class="text-center">Studio: 2</h5>
              <h5 class="text-center">Tayang:jam | 16.00 | 18.00 | 20.00</h5>
            <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">PESAN TIKET</button></a></li>
              <br>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-success">DETAIL</button></a></li>
              </span></center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="spiderman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">THE AMAZING SPIDERMAN 2</h4>
      </div>
      <div class="modal-body">
        <img src="<?=base_url();?>asset/spiderman1.jpg" class="img-thumbnail"><center><h5 class="text-center">Studio: 2</h5>
              <h5 class="text-center">Tayang:jam | 16.00 | 18.00 | 20.00</h5>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">PESAN TIKET</button></a></li>
              <br>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-success">DETAIL</button></a></li>
              </span></center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="iron" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">IRON MAN</h4>
      </div>
      <div class="modal-body">
        <img src="<?=base_url();?>asset/iron1.jpg" class="img-thumbnail"><center><h5 class="text-center">Studio: 2</h5>
              <h5 class="text-center">Tayang:jam | 16.00 | 18.00 | 20.00</h5>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">PESAN TIKET</button></a></li>
              <br>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-success">DETAIL</button></a></li>
              </span></center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="avengers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">AVENGERS AGE OF ULTRON</h4>
      </div>
      <div class="modal-body">
        <img src="<?=base_url();?>asset/avengers1.jpg" class="img-thumbnail"><center><h5 class="text-center">Studio: 2</h5>
              <h5 class="text-center">Tayang:jam | 16.00 | 18.00 | 20.00</h5>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">PESAN TIKET</button></a></li>
              <br>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-success">DETAIL</button></a></li>
              </span></center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="antman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">ANT MAN</h4>
      </div>
      <div class="modal-body">
        <img src="<?=base_url();?>asset/antman1.jpg" class="img-thumbnail"><center><h5 class="text-center">Studio: 2</h5>
              <h5 class="text-center">Tayang:jam | 16.00 | 18.00 | 20.00</h5>
             <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">PESAN TIKET</button></a></li>
              <br>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-success">DETAIL</button></a></li>
              </span></center>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="thor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">THOR RAGNAROK</h4>
      </div>
      <div class="modal-body">
        <img src="<?=base_url();?>asset/thor1.jpg" class="img-thumbnail"><center><h5 class="text-center">Studio: 2</h5>
              <h5 class="text-center">Tayang:jam | 16.00 | 18.00 | 20.00</h5>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">PESAN TIKET</button></a></li>
              <br>
              <li><a href="<?=base_url();?>index.php/User/PESAN"><button type="button" class="btn btn-danger">DETAIL</button></a></li>
              </span></center>
      </div>
    </div>
  </div>
</div>
<div class="ayo1">
  <h3 style="text-align: center;color:red;font-size: 50px;"><b><u>coming soon</u></b></h3>
  <h2 class="text-center"><b>UPCOMING FILM IN 2018</b></h2>
              <div class="col-xs-6 col-md-4">
              <span class="thumbnail">
              <img src="<?=base_url();?>asset/captain1.jpg" alt="...">
              <h5 class="text-center">CAPTAIN MARVEL</h5>
            </span>
          </div>
              

              <div class="col-xs-6 col-md-4">
              <span class="thumbnail">
              <img src="<?=base_url();?>asset/black1.jpg">
              <h5 class="text-center">BLACK PANTER</h5>
              
            </div>

              <div class="col-xs-6 col-md-4">
              <span class="thumbnail">
              <img src="<?=base_url();?>asset/wasp1.jpg">
              <h5 class="text-center">ANT MAN AND THE WASP</h5>
            
              </span>
            </div>
</div>

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
