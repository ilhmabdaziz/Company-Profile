<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<?php foreach($home as $h) : ?>
					<div class="title-box">
						<h1><?= $h['header4judul']; ?></h1>
						<p><?= $h['header4ket']; ?></p>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
			<div class="row">
				<?php foreach ( $finished as $fns ) :  ?>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="title-box">
						<!-- <ul class="popup-gallery clearfix"> -->
							<li>
								<a src="<?= base_url('assets/img/finished/') . $fns['image']; ?>">
									<img class="img-fluid" src="<?= base_url('assets/img/finished/') . $fns['image']; ?>" alt="single image">
									<!-- <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span> -->
									<h3><?= $fns['jenis']; ?></h3>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- End Gallery -->