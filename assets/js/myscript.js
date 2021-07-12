const flashData = $('.flash-data').data('flashdata');
// console.log(flashData);
if( flashData ) {
	Swal.fire({
		title: 'SUCCESS ',
		text: 'Data Berhasil ' + flashData,
		icon: 'success'
	});
}

//tombol-hapus
$('.tombol-hapus').on('click', function(e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
  		title: 'Are you sure you want to delete ?',
  		text: "barang data will be deleted",
  		icon: 'warning',
  		showCancelButton: true,
 		confirmButtonColor: '#3085d6',
 		cancelButtonColor: '#d33',
		confirmButtonText: 'Delete!'
	}).then((result) => {
  		if (result.value) {
    		document.location.href = href;
  		}
	})


});

