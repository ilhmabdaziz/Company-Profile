

    
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

            
            <div class="row">
              <div class="col-lg-8">
                

                <?= form_open_multipart('home/ubah_slide');?>
                  
                <div class="form-group row">
                  <input type="hidden" name="id" value="<?= $hs['id']; ?>">
              <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $hs['jenis']; ?>">
              </div>
          </div>
          
          <div class="form-group row">
              <div class="col-sm-2">Picture</div>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-6">
                    <img src="<?= base_url('assets/img/home/') . $hs['image']; ?>" class="img-thumbnail">
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


              <a href="<?= base_url('home/edit_home'); ?>" class="btn btn-primary">Kembali</a>         
              <button type="submit" class="btn btn-primary float-right">Ubah Finished</button>
              
            



                </form>


              </div>
            </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     