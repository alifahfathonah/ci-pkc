<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus_model extends CI_Model 
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table     = "pengurus";

    // function untuk mengambil seluruh data pada table database
	public function all()
	{
        return $this->db->get($this->_table)->result();
    }
    
	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_pengurus' => $id))->row();
    }

	public function update($id)
	{
        if (!empty($_FILES["img_pengurus"]["name"])) {
			$data = $this->db->get_where($this->_table,array('id_pengurus' => $id))->row();

			unlink("./asset/gambar/pengurus/$data->gambar_pengurus");

			$data = array(
                'nama_pengurus'       => ucwords($this->input->post('txt_nama')),
                'jabatan_pengurus'    => $this->input->post('txt_jabatan'), 
                'gambar_pengurus'     => $this->_uploadImage(),
            );
        } 
        else {
            $data = array(
                'nama_pengurus'       => ucwords($this->input->post('txt_nama')),
                'jabatan_pengurus'    => $this->input->post('txt_jabatan'),
            );
		}

        $this->db->update($this->_table, $data, array('id_pengurus' => $id));
	}

    // fungsi membuat upload image yang hanya dapat diakses di class ini 
    private function _uploadImage()
	{
		$config['upload_path']          = './asset/gambar/pengurus';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('img_pengurus')) {
            $gbr = $this->upload->data();
			
			// Compress Image
			$config['image_library']='gd2';
			$config['source_image']='./asset/gambar/pengurus/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 250;
			$config['height']= 300;
			$config['new_image']= './asset/gambar/pengurus/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
	        return $this->upload->data("file_name");
	    }
	    
	}
}
