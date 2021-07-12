<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct(){

            parent::__construct();

            $this->load->model('Home_model');

      	}
	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$data['slide']=$this->Home_model->getAllSlide();
		$data['image']=$this->Home_model->getAllImage();
		$data['home']=$this->Home_model->getAllHome();
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');

	}
	public function edit_home()
	{
		$data['judul'] = 'Edit Home';
		$data['judul2'] = 'Edit Tampilan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		$data['home_slide'] = $this->Home_model->getAllSlide();
		$data['home_image'] = $this->Home_model->getAllImage();
		$data['home'] = $this->Home_model->getAllHome();
		// $data['home_slide'] = $this->Home_model->cariDataHome();

		$this->form_validation->set_rules('cv', 'Cv', 'required|trim');
		$this->form_validation->set_rules('hd1', 'Hd1', 'required|trim');
		$this->form_validation->set_rules('hd2', 'Hd2', 'required|trim');
		$this->form_validation->set_rules('hd3', 'Hd3', 'required|trim');
		$this->form_validation->set_rules('hd4', 'Hd4', 'required|trim');
		$this->form_validation->set_rules('hd5', 'Hd5', 'required|trim');
		$this->form_validation->set_rules('hd1j', 'Hd1j', 'required|trim');
		$this->form_validation->set_rules('hd2j', 'Hd2j', 'required|trim');
		$this->form_validation->set_rules('hd2k', 'Hd2k', 'required|trim');
		$this->form_validation->set_rules('hd3j', 'Hd3j', 'required|trim');
		$this->form_validation->set_rules('hd3k', 'Hd3k', 'required|trim');
		$this->form_validation->set_rules('hd4j', 'Hd4j', 'required|trim');
		$this->form_validation->set_rules('hd4k', 'Hd4k', 'required|trim');

		
		if($this->form_validation->run() == false){
		$this->load->view('templates/ua_header', $data);
		$this->load->view('templates/ua_sidebar', $data);
		$this->load->view('templates/ua_topbar', $data);
		$this->load->view('home/edit_home', $data);
		$this->load->view('templates/ua_footer');
		} else {
			// $data =[
			//  	'nama_cv' => $this->input->post('nama_cv', true),
			//  	'nama_judul' => $this->input->post('nama_judul', true)
			//  ];

			$id = 1;
			$cv = $this->input->post('cv');
			$hd1 = $this->input->post('hd1');
			$hd2 = $this->input->post('hd2');
			$hd3 = $this->input->post('hd3');
			$hd4 = $this->input->post('hd4');
			$hd5 = $this->input->post('hd5');
			$hd1j = $this->input->post('hd1j');
			$hd2j = $this->input->post('hd2j');
			$hd2k = $this->input->post('hd2k');
			$hd3j = $this->input->post('hd3j');
			$hd3k = $this->input->post('hd3k');
			$hd4j = $this->input->post('hd4j');
			$hd4k = $this->input->post('hd4k');



			// $this->db->where('id', $this->input->post('id') );
			// $this->db->update('home', $data);
			
			$this->db->set('nama_cv', $cv);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header1', $hd1);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header2', $hd2);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header3', $hd3);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header4', $hd4);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header5', $hd5);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header1judul', $hd1j);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header2judul', $hd2j);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header2kontak', $hd2k);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header3judul', $hd3j);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header3ket', $hd3k);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header4judul', $hd4j);
			$this->db->where('id', $id);
			$this->db->update('home');

			$this->db->set('header4ket', $hd4k);
			$this->db->where('id', $id);
			$this->db->update('home');

			

			$this->session->set_flashdata('flash', 'Diubah');
			
				redirect('home/edit_home');
		}	
	}
	public function tambah_slide()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		$data['judul'] = 'Form Tambah Data Slide';

		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		
		

		if ( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('home/tambah_slide', $data);
			$this->load->view('templates/ua_footer');
		}else {

			// $upload_image = $_FILES['image']['name'];
			
			// var_dump($upload_image);
			// die;
			$this->Home_model->tambahDataSlide();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('home/edit_home');
		}
	}
	public function hapus_slide($id)
	{
		$this->Home_model->hapusDataSlide($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('home/edit_home');
	}

	public function ubah_slide()
	{
		$data['judul'] = 'Form Ubah Data Slide';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$id = $this->uri->segment(3);
		$data['hs'] = $this->Home_model->getSlideById($id);
		// $data['barang'] = $this->db->get('barang')->result_array();
		$data['poto'] = $this->db->get('home_slide',['image'])->row_array();

		$this->form_validation->set_rules('jenis', 'Jenis', 'required');


		if ($this->form_validation->run() == false){
			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('home/ubah_slide', $data);
			$this->load->view('templates/ua_footer');
		} else {


			// cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['image']['name'];
			
			// var_dump($upload_image);
			// die;
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '0';
				$config['upload_path'] = './assets/img/home/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					$old_image = $data['poto']['image'];
					// if ($old_image != 'default.jpg') {
					// 	unlink(FCPATH . 'assets/img/finished/' . $old_image);
					// }

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			 $data =[
			 	'jenis' => $this->input->post('jenis', true)
			 ];


			$this->db->where('id', $this->input->post('id') );
			$this->db->update('home_slide', $data);
			

			

			$this->session->set_flashdata('flash', 'Diubah');
			
				redirect('home/edit_home');

		}
	}

	public function tambah_image()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		$data['judul'] = 'Form Tambah Data Image';

		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('ket', 'Ket', 'required');
		
		

		if ( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('home/tambah_image', $data);
			$this->load->view('templates/ua_footer');
		}else {

			$upload_image = $_FILES['image']['name'];
			
			// var_dump($upload_image);
			// die;
			$this->Home_model->tambahDataImage();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('home/edit_home');
		}
	}
	public function hapus_image($id)
	{
		$this->Home_model->hapusDataImage($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('home/edit_home');
	}
	public function ubah_image()
	{
		$data['judul'] = 'Form Ubah Data Image';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$id = $this->uri->segment(3);
		$data['img'] = $this->Home_model->getImageById($id);
		// $data['barang'] = $this->db->get('barang')->result_array();
		$data['poto'] = $this->db->get('home_image',['image'])->row_array();

		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('ket', 'Ket', 'required');


		if ($this->form_validation->run() == false){
			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('home/ubah_image', $data);
			$this->load->view('templates/ua_footer');
		} else {


			// cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['image']['name'];
			
			// var_dump($upload_image);
			// die;
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '0';
				$config['upload_path'] = './assets/img/home/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					$old_image = $data['poto']['image'];
					// if ($old_image != 'default.jpg') {
					// 	unlink(FCPATH . 'assets/img/finished/' . $old_image);
					// }

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			 $data =[
			 	'jenis' => $this->input->post('jenis', true),
			 	'ket' => $this->input->post('ket', true)
			 ];


			$this->db->where('id', $this->input->post('id') );
			$this->db->update('home_image', $data);
			

			

			$this->session->set_flashdata('flash', 'Diubah');
			
				redirect('home/edit_home');

		}
	}
	
	
}