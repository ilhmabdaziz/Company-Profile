<div class="container">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	


	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url('finished/tambah_finished'); ?>" class="btn btn-primary">Tambah Data Finished</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
  					<input type="text" class="form-control" placeholder="Cari Data barang .." name="keyword" id="keyword" autocomplete="off" autofocus>
  					<div class="input-group-append">
    					<button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
  					</div>
				</div>
			</form>
		</div>
	</div>
	

	<div class="row mt-3">
		<div class="col-md-12">
			
			<h3>List Finished</h3>
			<?php if( empty($finished) ) : ?>
				<div class="alert alert-danger" role="alert">
  					Data finished tidak di temukan.
				</div>
			<?php endif; ?>
			<ul class="card-group">
				<?php foreach( $finished as $fns ) : ?>
  					<div class="card" style="width: 18rem;">
					  <img src="<?= base_url('assets/img/finished/') . $fns['image']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title"><?= $fns['jenis']; ?></h5>
					    <a href="<?= base_url('finished/hapus_finished/') . $fns['id']; ?>" class="btn btn-danger float-right tombol-hapus" tombol-hapus>Hapus</a>
					    <a href="<?= base_url('finished/ubah_finished/') . $fns['id']; ?>" class="btn btn-success float-right">ubah</a>
					  </div>
					</div>
  				<?php endforeach; ?>
  			</ul>
		</div>


	</div>

</div> 