<div class="container">

  <div class="row mt-3">
    <div class="col -md-6">
      
      <div class="card">
        <div class="card-header">
             <?= $judul ?>
        </div>
          <div class="card-body">
           
           
           
            <!-- sini -->
            <!-- <form action="" method="post"> -->
            <?= form_open_multipart('barang/ubah_barang');?>
            
          <div class="form-group">
            <input type="hidden" name="id" value="<?= $brg['id']; ?>">
              <label for="jenis">Jenis Barang</label>
              <input type="text" name="jenis"class="form-control" id="jenis" value="<?= $brg['jenis']; ?>">
               <small  class="form-text text-danger"><?= form_error('jenis'); ?></small> 
          </div>

          <div class="form-group">
            <label for="detail">Detail Barang</label>
            <input type="text" name="detail" class="form-control" id="detail" value="<?= $brg['detail']; ?>">
             <small  class="form-text text-danger"><?= form_error('detail'); ?></small> 
          </div>

          <div class="form-group row">

              <div class="col-sm-2">Picture</div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?= base_url('assets/img/barang/') . $brg['image']; ?>" class="img-thumbnail">
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
            <textarea type="text" name="ket"class="form-control" id="ket" rows="7" value="<?= $brg['ket']; ?>"><?= $brg['ket']; ?></textarea>
             <small  class="form-text text-danger"><?= form_error('ket'); ?></small> 
          </div>
          <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="text" name="harga"class="form-control" id="harga" value="<?= $brg['harga']; ?>">
             <small  class="form-text text-danger"><?= form_error('harga'); ?></small> 
          </div>

          <a href="<?= base_url('barang/edit_barang'); ?>" class="btn btn-primary">Kembali</a>
          <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
          
        
      </form>
          </div>
      </div>

      


    </div>
  </div>
  

</div>