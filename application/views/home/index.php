<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<?php foreach ( $slide as $hm ) : ?>
				<div id="slide" class="slide" data-ride="carousel">
					
				  <div class="carousel-inner">
				    <div class="carousel-item active"data-interval="10000">
				      <img src="<?= base_url('assets/img/home/') . $hm['image']; ?>" class="d-block w-100" alt="...">
				    </div>
				    <!-- <div class="carousel-item">
				      <img src="<?= base_url('assets/img/home/') . $hm['image']; ?>" class="d-block w-100" alt="...">
				    </div> -->
				    <!-- <div class="carousel-item">
				      <img src="<?= base_url(); ?>assets/images/rolling_door/rolling3.jpg" class="d-block w-100" alt="...">
				    </div> -->
				  </div>
					
				  <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a> -->
				  
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start Family -->
	<div id="family" class="family-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<?php foreach ($home as $h) : ?>
						<h1><?= $h['header1judul']; ?></h1>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ( $image as $img) : ?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="<?= base_url('assets/img/home/') . $img['image']; ?>" alt="" />
						</div>
						<div class="family-info">
							<h3><?= $img['jenis']; ?></h3>
							<p>{ <?= $img['ket']; ?>}</p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- End Family