

    
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

          	
          	<div class="row">
          		<div class="col-lg-8">
          			<?= $this->session->flashdata('message'); ?>
          			

          			<?= form_open_multipart('about/edit_about');?>
          			<?php foreach($about as $a) : ?>
						<div class="form-group">
						    <label for="visi">Edit visi</label>
						    <textarea class="form-control" id="visi" name="visi" rows="5" value="<?= $a['visi']; ?>"><?= $a['visi']; ?></textarea>
						    <?= form_error('visi', '<small class="text-danger pl-3">', '</small'); ?>
						</div>
					
					<div class="form-group row">
					    <div class="col-sm-2">Picture</div>
					    <div class="col-sm-10">
					    	<div class="row">
					    		<div class="col-sm-3">
					    			<img src="<?= base_url('assets/img/about/') . $a['image']; ?>" class="img-thumbnail">
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
						    <label for="misi">Edit misi</label>
						    <textarea class="form-control" id="misi" name="misi" rows="3" value="<?= $a['misi']; ?>"><?= $a['misi']; ?></textarea>
						    <?= form_error('misi', '<small class="text-danger pl-3">', '</small'); ?>
					</div>
					<div class="form-group row">
					    <div class="col-sm-2">Picture</div>
					    <div class="col-sm-10">
					    	<div class="row">
					    		<div class="col-sm-3">
					    			<img src="<?= base_url('assets/img/about/') . $a['image2']; ?>" class="img-thumbnail">
					    		</div>
					    		<div class="col-sm-9">
						    		<div class="custom-file">
									  <input type="file" class="custom-file-input" id="image2" name="image2">
									  <label class="custom-file-label" for="image2">Choose file</label>
									</div>	
					    		</div>
					    	</div>
					    </div>

					</div>



					<div class="form-group row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
					</div>



          			</form>


          		</div>
          	<?php endforeach; ?>
          	</div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     