<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model 
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table  = "artikel";

    // function untuk mengambil seluruh data pada table database
	public function all()
	{
        return $this->db->order_by('id_artikel','DESC')->get($this->_table)->result();
    }
	
	// function untuk nampilkan galeri pada welcome.php dengan limit
    public function limit($limit)
	{
        return $this->db->order_by('id_artikel','DESC')->limit($limit)->get($this->_table)->result();
	}
	
	// function untuk menampilkan data artikel terbaru sebanyak limit
    public function terbaru()
	{
        return $this->db->order_by('id_artikel','DESC')->limit(7)->get($this->_table)->result();
	}
	
	// function untuk menampilkan data artikel terpopuler sebanyak limit
    public function terpopuler()
	{
        return $this->db->order_by('hits_artikel','DESC')->limit(7)->get($this->_table)->result();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_artikel' => $id))->row();
    }
	
	// function untuk mencari data berdasarkan slug
	public function where_slug($slug)
	{
		return $this->db->get_where($this->_table,array('slug_artikel' => $slug))->row();
    }

	public function store()
	{
        // insert data ke dalam table komisariat
        $data = array(
            'nama_artikel'      => ucwords($this->input->post('txt_nama')), 
            'slug_artikel'      => url_title($this->input->post('txt_nama'), 'dash', TRUE), 
            'gambar_artikel'    => $this->_uploadImage(), 
            'isi_artikel'       => $this->input->post('txt_isi'), 
            'hits_artikel'      => 0
        );
        
        $this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		if (!empty($_FILES["img_artikel"]["name"])) {
			$data = $this->db->get_where($this->_table,array('id_artikel' => $id))->row();

			unlink("./asset/gambar/$data->gambar_artikel");

			$data = array(
				'nama_artikel'      => ucwords($this->input->post('txt_nama')), 
                'slug_artikel'      => url_title($this->input->post('txt_nama'), 'dash', TRUE), 
                'gambar_artikel'    => $this->_uploadImage(), 
                'isi_artikel'       => $this->input->post('txt_isi'),
			);
		} else {
			$data = array(
				'nama_artikel'      => ucwords($this->input->post('txt_nama')), 
                'slug_artikel'      => url_title($this->input->post('txt_nama'), 'dash', TRUE),
                'isi_artikel'       => $this->input->post('txt_isi'),
			);
		}

		$this->db->update($this->_table, $data, array('id_artikel' => $id));
	}

	public function delete($id)
	{

        $data = $this->db->get_where($this->_table,array('id_artikel' => $id))->row();

		unlink("./asset/gambar/$data->gambar_artikel");

        $this->db->delete($this->_table, array('id_artikel' => $id)); 
	}

    // fungsi membuat upload image yang hanya dapat diakses di class ini 
    private function _uploadImage()
	{
		$config['upload_path']          = './asset/gambar';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		
	    if ($this->upload->do_upload('img_artikel')) {
			$gbr = $this->upload->data();
			
			// Compress Image
			$config['image_library']='gd2';
			$config['source_image']='./asset/gambar/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '100%';
			$config['width']= 400;
			$config['height']= 270;
			$config['new_image']= './asset/gambar/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

	        return $this->upload->data("file_name");
		}
	}

	// function untuk menghitung total data keseluruhan
	public function count()
	{
        return $this->db->order_by('id_artikel','DESC')->get($this->_table)->num_rows();
	}
	
	// funtion untuk membuat pagination
	public function paginate($number,$offset)
	{
		return $this->db->order_by('id_artikel','DESC')->get($this->_table,$number,$offset)->result();		
	}
}
