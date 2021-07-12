<?php 
 	defined('BASEPATH') OR exit('No direct script access allowed');

	class About extends CI_Controller 
	{
		public function __construct(){

            parent::__construct();

            $this->load->model('All_model');
            $this->load->model('Home_model');

      	}
		public function index()
		{
			$data['judul'] = 'Edit About';
			$x['data']=$this->All_model->about();
			$data['home']=$this->Home_model->getAllHome();
			$this->load->view('templates/header', $data);
			$this->load->view('about/index', $x);
			$this->load->view('templates/footer');
		}
		public function edit_about()
		{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		
		
		$data['about'] = $this->db->get('about')->result_array();
		$data['poto'] = $this->db->get('about',['image'])->row_array();
		

		$data['judul'] = 'Edit About';

		$this->form_validation->set_rules('visi', 'Visi', 'required|trim');
		$this->form_validation->set_rules('misi', 'Misi', 'required|trim');

		if($this->form_validation->run() == false){
		$this->load->view('templates/ua_header', $data);
		$this->load->view('templates/ua_sidebar', $data);
		$this->load->view('templates/ua_topbar', $data);
		$this->load->view('about/edit_about', $data);
		$this->load->view('templates/ua_footer');
		} else {

			$id = 1;
			$visi = $this->input->post('visi');
			$misi = $this->input->post( 'misi');

			//cek jika ada gambar yang akan di upload
			$upload_image = $_FILES['image']['name'];
			$upload_image2 = $_FILES['image2']['name'];

			

			if ($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '0';
				$config['upload_path'] = './assets/img/about/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					$old_image = $data['poto']['image'];
					if ($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/img/about/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			if ($upload_image2){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '0';
				$config['upload_path'] = './assets/img/about/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image2')){
					$old_image = $data['poto']['image2'];
					if ($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/img/about/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image2', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			

			
			$this->db->set('visi', $visi);
			$this->db->where('id', $id);
			$this->db->update('about');

			$this->db->set('misi', $misi);
			$this->db->where('id', $id);
			$this->db->update('about');
			

			$this->session->set_flashdata('flash', 'Diubah');
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your about has been updated!
			// 	</div>');
				redirect('about/edit_about');
			}
		}
	}