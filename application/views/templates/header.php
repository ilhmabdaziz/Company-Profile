<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title><?= $judul; ?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets//images/apple-touch-icon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();  ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css"> -->

    <!-- INI LOGIN -->
    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">


    <title><?= $judul; ?></title>
  </head>
  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
    <div class="preloader pulse">
      <i class="fa fa-heartbeat" aria-hidden="true"></i>
    </div>
    </div> -->
    <!-- end loader -->

  <header class="top-header">
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container">
        <?php foreach ( $home as $h) : ?>
  		 <a class="navbar-brand" href="<?= base_url(); ?>"><?= $h['nama_cv']; ?></a>
  		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		 </button>
  		 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    		 <div class="navbar-nav">
     		   <a class="nav-item nav-link" href="<?= base_url(); ?>"><?= $h['header1']; ?> <span class="sr-only">(current)</span></a>
           <a class="nav-item nav-link" href="<?= base_url(); ?>about"><?= $h['header2']; ?></a>
           <a class="nav-item nav-link" href="<?= base_url(); ?>barang"><?= $h['header3']; ?></a>
             <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?= base_url(); ?>product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url(); ?>product">All Unit</a>
                <a class="dropdown-item" href="<?= base_url(); ?>product/rolling_door">Rooling Door</a>
                <a class="dropdown-item" href="<?= base_url(); ?>product/rolling_grille">Rooling Grille</a>
                <a class="dropdown-item" href="<?= base_url(); ?>product/folding_gate">Folding Gate</a>
                <a class="dropdown-item" href="<?= base_url(); ?>product/folding_door">Folding Door</a>

              </div>
            </li> -->
           <a class="nav-item nav-link" href="<?= base_url(); ?>finished"><?= $h['header4']; ?></a>
           <a class="nav-item nav-link" href="<?= base_url(); ?>contact"><?= $h['header5']; ?></a>
      		<!--  <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
           <a class="nav-item nav-link" href="<?= base_url(); ?>peoples">Peoples</a> -->
      		

    		 </div>
  		</div>
      <?php endforeach; ?>
  	</div>
 </nav>
</header>