<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="<?=base_url();?>asset/2/css/bootstrap.css" rel="stylesheet"type="text/css">
	<link href="<?=base_url();?>asset/2/css/style.css" rel="stylesheet"type="text/css">
	
	<script type="text/javascript"href="<?=base_url();?>asset/2/js/jquery.js"></script>
	<script type="text/javascript"href="<?=base_url();?>asset/2/js/bootstrap.js"></script>
	</head>
		
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
			    <div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					 </button>
					<a class="navbar-brand" href="<?=base_url();?>asset/2/#">Brand</a>
				</div>
				 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li class="active"><a href="<?=base_url();?>asset/2/#"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
					<li><a href="<?=base_url();?>index.php/user/profil"><span class="glyphicon glyphicon-user"></span>PROFIL</a></li>
					<li class="dropdown">
					<a href="<?=base_url();?>asset/2/#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-calendar"></span>ACARA <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="<?=base_url();?>asset/2/#"><span class="glyphicon glyphicon-calendar"></span>Action</a></li>
						<li><a href="<?=base_url();?>asset/2/#"><span class="glyphicon glyphicon-calendar"></span>Another action</a></li>
						<li><a href="<?=base_url();?>asset/2/#"><span class="glyphicon glyphicon-calendar"></span>Something else here</a></li>
						<li class="divider"></li>
						<li><a href="<?=base_url();?>asset/2/#"><span class="glyphicon glyphicon-calendar"></span>Separated link</a></li>
						<li class="divider"></li>
						<li><a href="<?=base_url();?>asset/2/#"><span class="glyphicon glyphicon-calendar"></span>One more separated link</a></li>
					  </ul>
					</li>
				</ul>
				
				
				 <ul class="nav navbar-nav navbar-right">
					<li><a href="<?=base_url();?>asset/2/#">Login</a></li>
					<li><a href="<?=base_url();?>asset/2/#">Daftar</a></li>
				</ul>
				</div>
			</div>
		</nav>
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?=base_url();?>asset/2/Screenshot1.png" alt="...">
      <div class="carousel-caption">
        gambar1
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url();?>asset/2/Screenshot5.png" alt="...">
      <div class="carousel-caption">
        gambar2
      </div>
    </div>
	<div class="item active">
      <img src="<?=base_url();?>asset/2/Screenshot1.png" alt="...">
      <div class="carousel-caption">
        gambar3
      </div>
    </div>
	 <div class="item">
      <img src="<?=base_url();?>asset/2/Screenshot5.png" alt="...">
      <div class="carousel-caption">
        gambar4
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="<?=base_url();?>asset/2/#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="<?=base_url();?>asset/2/#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
		
<div class="container jarak">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
			 <div class="panel-heading">
				<h3 class="panel-title">KATEGORI</h3>
			 </div>
			  <div class="panel-body">
              

<?php
	$this->load->view($konten);
?>







			  </div>
			</div>
			
			
			
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
			 <div class="panel-heading">Profil</div>
			  <div class="panel-body">
				<img src="<?=base_url();?>asset/2/cropped-20151222201203-270x270.jpg" alt="..." class="img-circle">
			  </div>
			</div>
			
		<div class="panel panel-danger">
			 <div class="panel-heading">Contac</div>
			  <div class="panel-body">
				<p class="text-center"><span class="glyphicon glyphicon-phone"></span><strong>Phone</strong> 93824292</p>
				
				<p class="text-justify text-danger"><span class="glyphicon glyphicon-home"></span><strong class="text-uppercase"><abbr title="Addres">Alamat</abbr></strong> Jl.danau ranaau G5/E26</p>
			  </div>
		</div>
	</div>
</div>
		
	</body>
</html>