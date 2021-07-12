<?php

class All_model extends CI_Model{

    public function about()
    {

            $hasil=$this->db->query("SELECT * FROM about");

            return $hasil;

    }
    public function home()
    {
    	$hasil=$this->db->query("SELECT * FROM home");
    	return $hasil;
    }
    public function getAllBarang($keyword = null)
    {
    	if ($keyword){
    		$this->db->like('harga', $keyword);
    	}
    	return $this->db->get('barang')->result_array();
    }   
   
    public function tambahDataBarang()
    {
    	$data =[
			"jenis" => $this->input->post('jenis', true),
			"detail" => $this->input->post('detail', true),
			// "image" => $this->input->post('image', true),
			"ket" => $this->input->post('ket', true),
			"harga" => $this->input->post('harga', true)

		];
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
					$old_image = $data['barang']['image'];
					if ($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/img/barang/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->insert('barang', $data);
    }
    public function getBarangById($id)
    {

    	return $this->db->get_where('barang', ['id' => $id])->row_array();

    }
    public function ubahDataBarang()
    {
		

    }
    public function hapusDataBarang($id)
    {
    	$this->db->delete('barang', ['id' => $id]);
    }
    public function cariDataBarang()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('jenis', $keyword);
		// $this->db->or_like('harga', $keyword);
		return $this->db->get('barang')->result_array();
	}
	

	

	

}




