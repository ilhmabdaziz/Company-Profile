<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
	class Barang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('All_model');
		$this->load->model('Home_model');
		$this->load->library('form_validation');
		// $this->load->helper(array('form', 'url'));

	}
	public function index()
		{
			$data['judul'] = 'Edit Barang';
			$data['barang'] = $this->All_model->getAllBarang();
			$data['home']=$this->Home_model->getAllHome();
			$this->load->view('templates/header', $data);
			$this->load->view('barang/index', $data);
			$this->load->view('templates/footer');
		}
	
	public function edit_barang()
	{
		$data['judul'] = 'Edit Barang';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		$data['barang'] = $this->All_model->getAllBarang();

		if( $this->input->post('keyword') ){
			$data['barang'] = $this->All_model->cariDataBarang();
		}

		//load library
		// $this->load->library('pagination');
		//initialize
		// $this->pagination->initialize('config');

		//ambil data searching
		// if ($this->input->post('submit')) {
		// 	// echo $this->input->post('keyword');
		// 	$data['keyword'] = $this->input->post('keyword');
		// } else {
		// 	$data['keyword'] = null;
		// }


		// $data['barang'] = $this->All_model->getAllBarang();

		$this->load->view('templates/ua_header', $data);
		$this->load->view('templates/ua_sidebar', $data);
		$this->load->view('templates/ua_topbar', $data);
		$this->load->view('barang/edit_barang', $data);
		$this->load->view('templates/ua_footer');
	}
	public function tambah_barang()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		$data['judul'] = 'Form Tambah Data Barang';

		// $data['barang'] = $this->db->get('barang')->result_array();
		


		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('detail', 'Detail', 'required');
		$this->form_validation->set_rules('ket', 'Ket', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

		if ( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('barang/tambah_barang', $data);
			$this->load->view('templates/ua_footer');
		}else {

			$upload_image = $_FILES['image']['name'];
			
			// var_dump($upload_image);
			// die;
			$this->All_model->tambahDataBarang();

			$this->session->set_flashdata('flash', 'Ditambahkan');
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your about has been added!
			// 	</div>');
			redirect('barang/edit_barang');
		}
	}
	public function detail_barang($id)
	{
		$data['judul'] = 'Detail Data Barang';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');

		$data['barang'] = $this->All_model->getBarangById($id);
			

			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('barang/detail_barang', $data);
			$this->load->view('templates/ua_footer');
	}
	public function ubah_barang()
	{
		$data['judul'] = 'Form Ubah Data Barang';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		// $data['brg'] = $this->All_model->getAllBarang($data['start']);
		// $id = $this->uri->segment(3);
		$id = $this->uri->segment(3);
		$data['brg'] = $this->All_model->getBarangById($id);
		// $data['barang'] = $this->db->get('barang')->result_array();
		$data['poto'] = $this->db->get('barang',['image'])->row_array();
				

		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('detail', 'Detail', 'required');
		$this->form_validation->set_rules('ket', 'Ket', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');


		if ( $this->form_validation->run() == false ){
			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('barang/ubah_barang', $data);
			$this->load->view('templates/ua_footer');
		} else {

			//cek jika ada gambar yang akan di upload

			$upload_image = $_FILES['image']['name'];
			// var_dump($upload_image);
			// die;
			


			if ($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '0';
				$config['upload_path'] = './assets/img/barang/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					// $old_image = $data['poto']['image'];
					// if ($old_image != 'default.jpg'){
					// 	unlink(FCPATH . 'assets/img/barang/' . $old_image);
					// }


					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
				$data =[
					// "id" => $this->input->post('id'),
					"jenis" => $this->input->post('jenis', true),
					"detail" => $this->input->post('detail', true),
					"ket" => $this->input->post('ket'),
					"harga" => $this->input->post('harga', true)

					];
			


				$this->db->where('id', $this->input->post('id') );
				$this->db->update('barang', $data);
			


			// $this->All_model->ubahDataBarang();

			$this->session->set_flashdata('flash', 'Diubah');
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your about has been updated!
			// 	</div>');
				redirect('barang/edit_barang');
		}
	}
	public function hapus_barang($id)
	{
		$this->All_model->hapusDataBarang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your about has been delleted!
		// 		</div>');
		redirect('barang/edit_barang');
	}
	public function barang_barang($id)
	{
			$data['judul'] = 'barang';
			$data['barang'] = $this->All_model->getBarangById($id);
			$data['home'] = $this->Home_model->getAllHome();
			$this->load->view('templates/header', $data);
			$this->load->view('barang/barang_barang', $data);
			$this->load->view('templates/footer');
	}
	
	// public function cari()
	// {
	// 	$data['judul'] = 'Edit Barang';
	// 	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	// 	$this->load->model('Menu_model', 'menu');
	// 	$data['barang'] = $this->All_model->cariAllBarang();

		

	// 	$this->load->view('templates/ua_header', $data);
	// 	$this->load->view('templates/ua_sidebar', $data);
	// 	$this->load->view('templates/ua_topbar', $data);
	// 	$this->load->view('barang/edit_barang', $data);
	// 	$this->load->view('templates/ua_footer');
	// }
}















