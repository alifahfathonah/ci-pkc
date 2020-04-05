<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model 
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table  = "galeri";

    // function untuk mengambil seluruh data pada table database
	public function all()
	{
        return $this->db->order_by('id_galeri','DESC')->get($this->_table)->result();
	}
	
	// function untuk nampilkan galeri pada welcome.php dengan limit
    public function limit($limit)
	{
        return $this->db->order_by('id_galeri','DESC')->limit($limit)->get($this->_table)->result();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_galeri' => $id))->row();
    }

	public function store()
	{
        // insert data ke dalam table komisariat
        $data = array(
            'nama_galeri'      => ucwords($this->input->post('txt_nama')), 
            'gambar_galeri'    => $this->_uploadImage(),
        );
        
        $this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		if (!empty($_FILES["img_galeri"]["name"])) {
			$data = $this->db->get_where($this->_table,array('id_galeri' => $id))->row();

			unlink("./asset/gambar/galeri/$data->gambar_galeri");

			$data = array(
                'nama_galeri'      => ucwords($this->input->post('txt_nama')), 
                'gambar_galeri'    => $this->_uploadImage(),
            );
		} else {
            $data = array(
                'nama_galeri'   => ucwords($this->input->post('txt_nama')),
            );
		}

		$this->db->update($this->_table, $data, array('id_galeri' => $id));
	}

	public function delete($id)
	{

        $data = $this->db->get_where($this->_table,array('id_galeri' => $id))->row();

		unlink("./asset/gambar/galeri/$data->gambar_galeri");

        $this->db->delete($this->_table, array('id_galeri' => $id)); 
	}

    // fungsi membuat upload image yang hanya dapat diakses di class ini 
    private function _uploadImage()
	{
		$config['upload_path']          = './asset/gambar/galeri';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('img_galeri')) {
			$gbr = $this->upload->data();
			
			// Compress Image
			$config['image_library']='gd2';
			$config['source_image']='./asset/gambar/galeri/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 640;
			$config['height']= 420;
			$config['new_image']= './asset/gambar/galeri/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

	        return $this->upload->data("file_name");
	    }
	    
	}

	// function untuk menghitung total data keseluruhan
	public function count()
	{
        return $this->db->order_by('id_galeri','DESC')->get($this->_table)->num_rows();
	}

	// funtion untuk membuat pagination
	public function paginate($number,$offset)
	{
		return $this->db->order_by('id_galeri','DESC')->get($this->_table,$number,$offset)->result();		
	}
}
