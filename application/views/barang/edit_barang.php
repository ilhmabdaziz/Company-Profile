<div class="container">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<!-- <?= $this->session->flashdata('message'); ?> -->

	


	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url('barang/tambah_barang'); ?>" class="btn btn-primary">Tambah Data Barang</a>
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
		<div class="col-md-6">
			
			<h3>List Barang</h3>
			<?php if( empty($barang) ) : ?>
				<div class="alert alert-danger" role="alert">
  					Data barang tidak di temukan.
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach( $barang as $pdct ) : ?>
  					<li class="list-group-item">
  						<?= $pdct['jenis'];  ?>
  						<a href="<?= base_url('barang/hapus_barang/') . $pdct['id']; ?>" class="badge badge-danger float-right tombol-hapus">Hapus</a>
  						<a href="<?= base_url('barang/ubah_barang/') . $pdct['id']; ?>" class="badge badge-success float-right">ubah</a>
  						<a href="<?= base_url('barang/detail_barang/') . $pdct['id']; ?>" class="badge badge-primary float-right">detail</a>
  					</li>
  				<?php endforeach; ?>
  			</ul>
		</div>


	</div>

</div> 