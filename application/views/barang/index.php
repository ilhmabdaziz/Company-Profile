<!-- Start Events --> 
	<div id="events" class="events-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php foreach($home as $h) : ?>
					<div class="title-box">
						<h1><?= $h['header3judul']; ?></h1>
						<p><?= $h['header3ket']; ?></p>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
			<div class="row">
				<?php foreach( $barang as $brg) : ?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="<?= base_url('assets/img/barang/') . $brg['image']; ?>" alt="" />
						</div>
						<h1><?= $brg['jenis']; ?></h1>
						<p><?= $brg['detail']; ?> </p>
						<a href="<?= base_url('barang/barang_barang/') . $brg['id']; ?>"><?= $brg['jenis']; ?></a>
					</div>
				</div>
				<!-- <div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="<?= base_url(); ?>assets/images/event-img-02.jpg" alt="" />
						</div>
						<h2>3 June 2018 Main Ceremony </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="<?= base_url(); ?>product/rolling_grille">Rooling Grille</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="<?= base_url(); ?>assets/images/event-img-03.jpg" alt="" />
						</div>
						<h2>4 June 2018 Wedding party </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="<?= base_url(); ?>product/folding_gate">Folding Gate</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="<?= base_url(); ?>assets/images/event-img-01.jpg" alt="" />
						</div>
						<h2>2 June 2018 Engagement</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="<?= base_url(); ?>product/folding_door">Folding Door</a>
					</div>
				</div> -->
			<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- End Events