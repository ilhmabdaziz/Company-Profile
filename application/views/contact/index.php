<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h1>Contact</h1>
						<p>Java Constructor </p>
					</div>
				</div>
			</div>
			<?= $this->session->flashdata('message'); ?>
			<form class="user" method="post" action="<?= base_url(); ?>contact/message">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name"></input>
								<?= form_error('name','<small class="text-danger pl-3">', '</small>'); ?>
							</div>                                 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Email" id="email" name="email" class="form-control"></input>
								<?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Phone" id="phone" name="phone" class="form-control"></input>
								<?= form_error('phone','<small class="text-danger pl-3">', '</small>'); ?>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="product" name="product" placeholder="Product" autocomplete="off"></input>
								<?= form_error('product','<small class="text-danger pl-3">', '</small>'); ?>
								
							</div>                                 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="pesan" name="pesan" placeholder="Message"></textarea>
								<?= form_error('pesan','<small class="text-danger pl-3">', '</small>'); ?>
								<small>Enter order on the request form!</small>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-primary" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
					  </div>            
					</form>
				  </div>
				</div>
			</div>
		</form>
		<form class="form-inline">
	      <a href="<?= base_url(); ?>auth"><button class="btn btn-outline-primary" type="button" >Login</button>
	      </a>
	    </form>
		</div>
	</div>
	<!-- End Contact -->