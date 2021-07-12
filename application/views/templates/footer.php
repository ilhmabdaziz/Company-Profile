	<!-- Start Footer -->
	<br>
	<br>
	
	</br>
	</br>
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; Java Constructor 2020 </p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src=" <?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/myscript.js"></script>

    <!-- INI JS HOME DLL-->
    <script src="<? base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<? base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="<? base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<? base_url(); ?>assets/js/jquery.pogo-slider.min.js"></script> 
	<script src="<? base_url(); ?>assets/js/slider-index.js"></script>
	<script src="<? base_url(); ?>assets/js/smoothscroll.js"></script>
	<script src="<? base_url(); ?>assets/js/form-validator.min.js"></script>
    <script src="<? base_url(); ?>assets/js/contact-form-script.js"></script>
    <script src="<? base_url(); ?>assets/js/custom.js"></script>


   	 <!-- INI LOGIN -->
     <!-- Bootstrap core JavaScript-->
	  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	  <!-- Core plugin JavaScript-->
	  <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	  <!-- Custom scripts for all pages-->
	  <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

	  <!-- rupiah -->
	  <!-- <script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
		</script> -->
  </body>
</html>