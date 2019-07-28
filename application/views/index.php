<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel = "stylesheet" type ="text/css"
    href ="css/bootstrap.css">
    <link rel = "stylesheet" type ="text/css"
    href ="css/style.css">

    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
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
      <a class="navbar-brand" href="#" style="font-family:fantasy;">MARVEL STUDIOS</a>
    </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
        <li><a href="#marvel"><span class="glyphicon glyphicon-facetime-video"></span> MARVEL FILM</a></li>
        <li><a href="#2018"><span class="glyphicon glyphicon-film"></span> NEWS FILM 2018</a></li>
        <li><a href="#news"><span class="glyphicon glyphicon-send"></span> NEWS</a></li>
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

  <div class="carousel-inner">
    <div class="item active">
      <img src="marvelku.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
</div>
<div id="marvel">
</div>
<div class="ayo">
<div class="container jarak">
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          
          <h3 class="panel-title text-center">MARVEL FILM</h3>
</div>
        <div class="panel-body">
          
            <div class="col-xs-6 col-md-4">
              <a href="#gg" class="thumbnail" data-toggle="modal" data-toggle="tooltip" data-plcement="left" title="Tooltip on left">
              <img src="gg1.jpg" alt="...">
              <h5 class="text-center">GUARDIAN OF THE GALAXY</h5>
              </a>
            </div>
            
        

            <div class="col-xs-6 col-md-4">
              <a href="#spiderman" class="thumbnail" data-toggle="modal" data-toggle="tooltip" data-plcement="left" title="Tooltip on left">
              <img src="spiderman1.jpg" alt="...">
              <h5 class="text-center">THE AMAZING SPIDERMAN 2</h5>
              </a>
            </div>

            <div class="col-xs-6 col-md-4">
              <a href="#iron" class="thumbnail" data-toggle="modal" data-toggle="tooltip" data-plcement="left" title="Tooltip on left">
              <img src="iron1.jpg" alt="...">
              <h5 class="text-center">IRON MAN</h5>
              </a>
            </div>

            <div class="col-xs-6 col-md-4">
              <a href="#avengers" class="thumbnail" data-toggle="modal" data-toggle="tooltip" data-plcement="left" title="Tooltip on left">
              <img src="avengers1.jpg" alt="...">
              <h5 class="text-center">AVENGERS AGE OF ULTRON</h5>
              </a>
            </div>

            <div class="col-xs-6 col-md-4">
              <a href="#antman" class="thumbnail" data-toggle="modal" data-toggle="tooltip" data-plcement="left" title="Tooltip on left">
              <img src="antman1.jpg" alt="...">
              <h5 class="text-center">ANT MAN</h5>
              </a>
            </div>

              <div class="col-xs-6 col-md-4">
              <a href="#thor" class="thumbnail" data-toggle="modal" data-toggle="tooltip" data-plcement="left" title="Tooltip on left">
              <img src="thor1.jpg" alt="...">
              <h5 class="text-center">THOR RAGNAROK</h5>
              </a>
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
        <img src="gg.jpg" class="img-thumbnail"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</center>
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
        <img src="gg.jpg" class="img-thumbnail"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</center>
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
        <img src="spiderman1.jpg" class="img-thumbnail"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</center>
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
        <img src="iron1.jpg" class="img-thumbnail"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</center>
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
        <img src="avengers1.jpg" class="img-thumbnail"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</center>
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
        <img src="antman1.jpg" class="img-thumbnail"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</center>
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
        <img src="thor1.jpg" class="img-thumbnail"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</center>
      </div>
    </div>
  </div>
</div>
<div id=2018>
  
</div><br>
<div class="ayo1">
  <h2 class="text-center"><b>UPCOMING FILM IN 2018</b></h2>
              <div class="col-xs-6 col-md-4">
              <span class="thumbnail">
              <img src="captain1.jpg" alt="...">
              <h5 class="text-center">CAPTAIN MARVEL</h5>
              </span>
            </div>

              <div class="col-xs-6 col-md-4">
              <span class="thumbnail">
              <img src="black1.jpg">
              <h5 class="text-center">BLACK PANTER</h5>
              </span>
            </div>

              <div class="col-xs-6 col-md-4">
              <span class="thumbnail">
              <img src="wasp1.jpg">
              <h5 class="text-center">ANT MAN AND THE WASP</h5>
              </span>
            </div>
</div>
<div id="news">
</div><br><br>
<div class="ayo2">

<h4 class="text-center">NEWS</h4>

<div class="ayo3"></div>
Marvel Studios, LLC[1] (awalnya dikenal sebagai Marvel Film dari 1993 sampai 1996) adalah studio film Amerika yang berbasis di The Walt Disney Studios di Burbank, California dan merupakan anak perusahaan dari Walt Disney Studios, itu sendiri sebuah divisi yang dimiliki sepenuhnya dari The Walt Disney Company, dengan produser film Kevin Feige menjabat sebagai presiden.[3] Sebelumnya, studio adalah anak perusahaan dari Marvel Entertainment sampai The Walt Disney Company mereorganisasi perusahaan di Agustus 2015.

Didedikasikan untuk memproduksi film berdasarkan karakter Marvel Comics, studio telah terlibat dalam tiga waralaba film karakter Marvel telah melampaui satu miliar dolar dalam pendapatan di Amerika Utara: X-Men, Spider-Man, dan Marvel Cinematic Universe waralaba multi-film. X-Men dan Spider-Man dan waralaba Marvel lainnya berlisensi 20th Century Fox dan Sony Pictures. Film Marvel Studiossaat ini didistribusikan teatrikal oleh Walt Disney Studios Motion Pictures; Paramount Pictures untuk The Incredible Hulk, dan Columbia Pictures untuk Spider-Man: Homecoming dijadwalkan untuk rilis pada tanggal 7 Juli 2017.[4]

Marvel Studios telah merilis 14 film sejak tahun 2008 dalam Marvel Cinematic Universe, dari Iron Man (2008) ke Doctor Strange (2016). Film-film semua kesinambungan satu sama lain, bersama dengan One-Shots diproduksi oleh studio dan acara televisi yang diproduksi oleh Marvel Television.
</div>
<div class="ayo4">
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
