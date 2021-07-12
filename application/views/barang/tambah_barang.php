<div class="container">

  <div class="row mt-3">
    <div class="col -md-6">
      
      <div class="card">
        <div class="card-header">
             <h3><?= $judul; ?></h3>
        </div>
          <div class="card-body">
            
          <?= form_open_multipart('barang/tambah_barang'); ?>
           <!--  <form action="<?= base_url(); ?>barang/tambah_barang" method="post"> -->
         <div class="form-group">
            <label for="jenis">Jenis Barang</label>
            <input type="text" name="jenis"class="form-control" id="jenis">
             <small  class="form-text text-danger"><?= form_error('jenis'); ?></small> 
             
          </div>
          <div class="form-group">
            <label for="detail">Detail Barang</label>
            <input type="text" name="detail" class="form-control" id="detail">
             <small  class="form-text text-danger"><?= form_error('detail'); ?></small> 
          </div>
          <div class="form-group row">
              <div class="col-sm-2">Image</div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>  
                  </div>
                </div>
              </div>

          </div>

          <div class="form-group">
            <label for="ket">Keterangan Barang</label>
            <textarea type="text" name="ket"class="form-control" id="ket" rows="7"></textarea>
             <small  class="form-text text-danger"><?= form_error('ket'); ?></small> 
          </div>

          <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="text" name="harga"class="form-control" id="harga">
             <small  class="form-text text-danger"><?= form_error('harga'); ?></small> 
          </div>

          <a href="<?= base_url('barang/edit_barang'); ?>" class="btn btn-primary">Kembali</a>
          <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
          

      </form>
          </div>
      </div>

      


    </div>
  </div>
  

</div>