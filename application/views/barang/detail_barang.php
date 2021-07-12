<div class="container">
  <h3><?= $judul; ?></h3>
  <div class="row mt-3">
    <div class="col-md-6">
      
      
      <div class="card" style="width: 28rem;">
  <img src="<?= base_url('assets/img/barang/') . $barang['image']; ?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?= $barang['jenis']; ?></h5>
    
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Detail : <?= $barang['detail']; ?></li>
    <li class="list-group-item">Keterangan : <?= $barang['ket']; ?></li>
    <li class="list-group-item">Harga : Rp. <?= number_format($barang['harga']); ?></li>
    
  </ul>
  <div class="card-body">
    <a href="<?= base_url('barang/edit_barang'); ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
   
    </div>
  </div>
</div>