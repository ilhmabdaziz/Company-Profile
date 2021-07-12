<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Finished extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Finished_model');
			$this->load->model('Home_model');
			$this->load->library('form_validation');
			// $this->load->helper(array('form', 'url'));
		}
		public function index()
		{
			$data['judul'] = 'Edit Finished';
			$data['finished'] = $this->Finished_model->getAllFinished();
			$data['home']=$this->Home_model->getAllHome();
			$this->load->view('templates/header', $data);
			$this->load->view('finished/index', $data);
			$this->load->view('templates/footer');
		}
		public function edit_finished()
		{
			$data['judul'] = 'Edit Finished';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->model('Menu_model', 'menu');
			$data['finished'] = $this->Finished_model->getAllFinished();
			$data['finished'] = $this->Finished_model->cariDataFinished();

			

			$this->load->view('templates/ua_header', $data);
			$this->load->view('templates/ua_sidebar', $data);
			$this->load->view('templates/ua_topbar', $data);
			$this->load->view('finished/edit_finished', $data);
			$this->load->view('templates/ua_footer');
		}
		public function hapus_finished($id)
		{
			$this->Finished_model->hapusDataFinished($id);
			$this->session->set_flashdata('flash', 'dihapus');
			redirect('finished/edit_finished');
		}
		public function tambah_finished()
		{
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->model('Menu_model', 'menu');
			$data['judul'] = 'Form Tambah Data Finished';

			$this->form_validation->set_rules('jenis', 'Jenis', 'required');
			
			

			if ( $this->form_validation->run() == FALSE ){
				$this->load->view('templates/ua_header', $data);
				$this->load->view('templates/ua_sidebar', $data);
				$this->load->view('templates/ua_topbar', $data);
				$this->load->view('finished/tambah_finished', $data);
				$this->load->view('templates/ua_footer');
			}else {

				// $upload_image = $_FILES['image']['name'];
				
				// var_dump($upload_image);
				// die;
				$this->Finished_model->tambahDataFinished();
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('finished/edit_finished');
			}
		}
		public function ubah_finished()
		{
			$data['judul'] = 'Form Ubah Data Finished';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

			$id = $this->uri->segment(3);
			$data['fns'] = $this->Finished_model->getFinishedById($id);
			// $data['barang'] = $this->db->get('barang')->result_array();
			$data['poto'] = $this->db->get('finished',['image'])->row_array();

			$this->form_validation->set_rules('jenis', 'Jenis', 'required');


			if ($this->form_validation->run() == false){
				$this->load->view('templates/ua_header', $data);
				$this->load->view('templates/ua_sidebar', $data);
				$this->load->view('templates/ua_topbar', $data);
				$this->load->view('finished/ubah_finished', $data);
				$this->load->view('templates/ua_footer');
			} else {


				// cek jika ada gambar yang akan diupload
				$upload_image = $_FILES['image']['name'];
				
				// var_dump($upload_image);
				// die;
				if($upload_image){
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '0';
					$config['upload_path'] = './assets/img/finished/';

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
				$this->db->update('finished', $data);
				

				

				$this->session->set_flashdata('flash', 'Diubah');
				
					redirect('finished/edit_finished');

			}
		}



	}