<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<?php foreach($home as $h) : ?>
							<h1><?= $h['header2judul']; ?></h1>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php

                        foreach($data->result_array() as $i):

                              $about=$i;

                ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h3>Visi </h3>
								<p><?= $about['visi']; ?></p>
							</div>
						
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
									<img class="img-fluid rounded" src="<?= base_url('assets/img/about/') . $about['image']; ?>" alt="" />
								</div>
							</div>
						</div>
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
									<img class="img-fluid rounded" src="<?= base_url('assets/img/about/') . $about['image2']; ?>" alt="" />
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h3> Misi </h3>
								<p><?= $about['misi']; ?> </p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="title-box">
									<h1>Alamat Kami</h1>
									<div class="card" style="width: 18rem;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.0937472120976!2d106.6898780729538!3d-6.353808020278129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5a4df7856ab%3A0x1b4a60e4340a93db!2sPuri%20Serpong%202!5e0!3m2!1sid!2sid!4v1575924399831!5m2!1sid!2sid" width="1100" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

									</div>
								</div>
							</div>
						</div>
						<div class="card">
						  <div class="card-header">
						    Kontak Perusahaan
						  </div>
						  <div class="card-body">
						  	<?php foreach($home as $h) : ?>
						    <blockquote class="blockquote mb-0">
						      <p><?= $h['header2kontak']; ?></p>
						    </blockquote>
						<?php endforeach; ?>
						  </div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	
	