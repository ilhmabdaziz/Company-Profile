<?php

class Home_model extends CI_Model{
	public function getAllHome()
	{
		return $this->db->get('home')->result_array();
	}
	public function getAllSlide()
	{
		return $this->db->get('home_slide')->result_array();
	}
	public function getAllImage()
	{
		return $this->db->get('home_image')->result_array();
	}
	// public function cariDataHome()
	// {
	// 	$keyword = $this->input->post('keyword', true);
	// 	$this->db->like('ket', $keyword);
	// 	return $this->db->get('home_slide')->result_array();
	// }
	public function tambahDataSlide()
    {
    	$data =[
			"jenis" => $this->input->post('jenis', true),
			// "image" => $this->input->post('image', true),
			

		];
		//cek jika ada gambar yang akan di upload
			$upload_image = $_FILES['image']['name'];
			
			// var_dump($upload_image);
			// die;
			if ($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '0';
				$config['upload_path'] = './assets/img/home/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->insert('home_slide', $data);
    }
    public function hapusDataSlide($id)
    {
    	$this->db->delete('home_slide', ['id' => $id]);
    }
    public function getSlideById($id)
    {
    	return $this->db->get_where('home_slide', ['id' => $id])->row_array();
    }
    public function tambahDataImage()
    {
    	$data =[
			"jenis" => $this->input->post('jenis', true),
			"ket" => $this->input->post('ket', true)
			// "image" => $this->input->post('image', true),
			

		];
		//cek jika ada gambar yang akan di upload
			$upload_image = $_FILES['image']['name'];
			
			// var_dump($upload_image);
			// die;
			if ($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '0';
				$config['upload_path'] = './assets/img/home/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->insert('home_image', $data);
    }
    public function hapusDataImage($id)
    {
    	$this->db->delete('home_image', ['id' => $id]);
    }
    public function getImageById($id)
    {
    	return $this->db->get_where('home_image', ['id' => $id])->row_array();
    }
}