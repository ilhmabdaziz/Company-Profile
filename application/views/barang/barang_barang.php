<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h1><?= $barang['jenis']; ?></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-8 col-md-6 col-sm-12">

								<h1>Product : <?= $barang['jenis']; ?></h1>
								<p><?= $barang['ket']; ?> </p>
								<small  class="form-text text-danger">harga barang permeter</small>

								<h3>Rp : <?= number_format($barang['harga']) ?></h3>

							</div>

							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
									<img class="img-fluid rounded" src="<?= base_url('assets/img/barang/') . $barang['image']; ?>" alt="" />

								</div>
							</div>
						</div>

						<a href="<?= base_url('barang'); ?>" class="btn btn-primary">Kembali</a>
						<a href="<?= base_url('contact'); ?>" class="btn btn-primary float-right">Pesan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	