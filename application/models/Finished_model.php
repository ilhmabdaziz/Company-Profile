<?php

class Finished_model extends CI_Model{

	public function getAllFinished()
	{
    	return $this->db->get('finished')->result_array();
	}
	public function hapusDataFinished($id)
    {
    	$this->db->delete('finished', ['id' => $id]);
    }
    public function tambahDataFinished()
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
				$config['upload_path'] = './assets/img/finished/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->insert('finished', $data);
    }
    public function cariDataFinished()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('jenis', $keyword);
		return $this->db->get('finished')->result_array();
	}
	public function getFinishedById($id)
    {
    	return $this->db->get_where('finished', ['id' => $id])->row_array();
    }
}