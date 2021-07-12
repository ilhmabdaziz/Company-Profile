<?php  

class Contact extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Home_model');
			// $this->load->library('form_validation');
			// $this->load->helper(array('form', 'url'));
		}
	public function index()
	{
		$data['judul'] = 'Halaman Contact';
		$data['home'] = $this->Home_model->getAllHome();
		
		$this->load->view('templates/header', $data);
		$this->load->view('contact/index', $data);
		$this->load->view('templates/footer');

	}

	public function message()
	{
		// if ($this->session->userdata('email')){
		// 	redirect('user');
		// }
		$data['home'] = $this->Home_model->getAllHome();
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('phone', 'Phone', 'required|trim');
		$this->form_validation->set_rules('product', 'Product', 'required|trim');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

		

		if( $this->form_validation->run() == false)
		{
			$data['judul'] = 'Contact';
			$this->load->view('templates/header', $data);
			$this->load->view('contact/index');
			$this->load->view('templates/footer');

		}else {
			 $email = $this->input->post('email', true);
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'phone' => htmlspecialchars($this->input->post('phone', true)),
				'product' => htmlspecialchars($this->input->post('product', true)),
				'pesan' => htmlspecialchars($this->input->post('pesan', true))
				
			];
			$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'javacons95@gmail.com',
			'smtp_pass' => 'karsonto',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"

			];

			// $isinya = '<h2>Java <span>Constructor</span></h2>'.
			// 		  '<p>Pride and Doors of Power.</p>'.
			// 		  '<br> Name = '.$data['name'].
			// 		  '<br> Email = '.$data['email'].
			// 		  '<br> Phone = '.$data['phone'].
			// 		  '<br> Product = '.$data['product'].
			// 		  '<br> Pesan = '.$data['pesan'];
					  
					  
			$isinya ='<!DOCTYPE html><html><head><title>Chards</title><style type="text/css">body {font-family: Arial;}td {padding: 10px;}table {margin: auto;margin-top: 10px;}</style></head><body bgcolor="#181a1c"><table border="0" width="500" cellpadding="0" cellspacing="0"><tr bgcolor="#19bd9b"><td colspan="3" align="center"><h2>Cv. Java Constructor<h2></td></tr><tr bgcolor="#e7e7e7"><td width="150">Name : </td><td width="250">'.$data['name'].'</td></tr><tr bgcolor="#e7e7e7"><td>Email : </td><td>'.$data['email'].'</td></tr><tr bgcolor="#e7e7e7"><td>Phone :</td><td>'.$data['phone'].'</td></tr><tr bgcolor="#e7e7e7"><td>Product : </td><td>'.$data['product'].'</td></tr><tr bgcolor="#e7e7e7"><td>Pesan : </td><td>'.$data['pesan'].'</td></tr><tr bgcolor="#19bd9b"><td colspan="3" align="center">All Rights Reserved. © <a href="http://localhost:8888/rolling/">Java Constructor</a></td></tr></table></body></html>';



			// Load library email dan konfigurasinya
		$this->email->initialize($config);
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('javacons95@gmail.com','JavaConstructor.info');

        // Email penerima
        $this->email->to('yeeacoba@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach($data['name']);

        // Subject email
        $this->email->subject('Pesanan '.$data['product']);

        
        $this->email->message($isinya);

        	$this->email->send();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your message has been send. Please wait your account
				</div>');
				redirect('contact');
		}
		
	}	
}