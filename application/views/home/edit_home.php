<div class="container">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul2; ?></h1>
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	 <form action="<?= base_url().'home/edit_home'; ?>" method="post">  
	<!-- <?= form_open_multipart('home/edit_home'); ?> -->
	<?php foreach ( $home as $h) : ?>
	<div class="form-group">
            <h5 class="h5 mb-1 text-gray-900"for="cv">Nama Cv</h5>
            <input type="text" name="cv"class="form-control" id="cv" value="<?= $h['nama_cv']; ?>">
             <small  class="form-text text-danger"><?= form_error('cv'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd1">Header 1</h5>
            <input type="text" name="hd1"class="form-control" id="hd1" value="<?= $h['header1']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd1'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd2">Header 2</h5>
            <input type="text" name="hd2"class="form-control" id="hd2" value="<?= $h['header2']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd2'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd3">Header 3</h5>
            <input type="text" name="hd3"class="form-control" id="hd3" value="<?= $h['header3']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd3'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd4">Header 4</h5>
            <input type="text" name="hd4"class="form-control" id="hd4" value="<?= $h['header4']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd4'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd5">Header 5</h5>
            <input type="text" name="hd5"class="form-control" id="hd5" value="<?= $h['header5']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd5'); ?></small>
    </div>

	<div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd1j">Header 1 Judul</h5>
            <input type="text" name="hd1j"class="form-control" id="hd1j" value="<?= $h['header1judul']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd1j'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd2j">Header 2 Judul</h5>
            <input type="text" name="hd2j"class="form-control" id="hd2j" value="<?= $h['header2judul']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd2j'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd2k">Header 2 Kontak Perusahaan</h5>
            <input type="text" name="hd2k"class="form-control" id="hd2k" value="<?= $h['header2kontak']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd2k'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd3j">Header 3 Judul</h5>
            <input type="text" name="hd3j"class="form-control" id="hd3j" value="<?= $h['header3judul']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd3j'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd3k">Header 3 Keterangan</h5>
            <input type="text" name="hd3k"class="form-control" id="hd3k" value="<?= $h['header3ket']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd3k'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd4j">Header 4 Judul</h5>
            <input type="text" name="hd4j"class="form-control" id="hd4j" value="<?= $h['header4judul']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd4j'); ?></small>
    </div>

    <div class="form-group">
            <h5 class="h5 mb-1 text-gray-900" for="hd4k">Header 4 Keterangan</h5>
            <input type="text" name="hd4k"class="form-control" id="hd4k" value="<?= $h['header4ket']; ?>">
             <small  class="form-text text-danger"><?= form_error('hd4k'); ?></small>
    </div>
    <button type="submit" class="btn btn-success float-right">ubah</button>
	<?php endforeach; ?>
	</form>
    <br></br>

    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url('home/tambah_slide'); ?>" class="btn btn-primary">Tambah Data Slide</a>
		</div>
	</div>
<!-- 
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
	</div> -->
	

	<div class="row mt-3">
		<div class="col-md-12">
			
			<h3>List Slide</h3>
			<ul class="card-group">
				<?php foreach( $home_slide as $hm ) : ?>
  					<div class="card" style="width: 18rem;">
					  <img src="<?= base_url('assets/img/home/') . $hm['image']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    
					    <a href="<?= base_url('home/hapus_slide/') . $hm['id']; ?>" class="btn btn-danger float-right tombol-hapus" tombol-hapus>Hapus</a>
					    <a href="<?= base_url('home/ubah_slide/') . $hm['id']; ?>" class="btn btn-success float-right">ubah</a>
					  </div>
					</div>
  				<?php endforeach; ?>
  			</ul>
		</div>
	</div>


	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url('home/tambah_image'); ?>" class="btn btn-primary">Tambah Data Image</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-12">
			
			<h3>List image</h3>
			<ul class="card-group">
				<?php foreach( $home_image as $i ) : ?>
  					<div class="card" style="width: 18rem;">
					  <img src="<?= base_url('assets/img/home/') . $i['image']; ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title"><?= $i['jenis']; ?></h5>
					    <h5 class="card-title"><?= $i['ket']; ?></h5> 
					    <a href="<?= base_url('home/hapus_image/') . $i['id']; ?>" class="btn btn-danger float-right tombol-hapus" tombol-hapus>Hapus</a>
					    <a href="<?= base_url('home/ubah_image/') . $i['id']; ?>" class="btn btn-success float-right">ubah</a>
					  </div>
					</div>
  				<?php endforeach; ?>
  			</ul>
		</div>
	</div>

</div> 