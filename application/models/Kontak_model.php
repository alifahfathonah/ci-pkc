<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
	// variabel yang hanya dapat diakses pada model ini
	private $_table 	= "kontak";

	// function untuk mengambil seluruh data pada table database
	public function all()
	{
		return $this->db->order_by('id_kontak','DESC')->get($this->_table)->result();
	}

	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_kontak' => $id))->row();
	}

	public function store()
	{
		$data = array(
			'nama_kontak'  	=> $this->input->post('txt_nama'),
			'email_kontak'  => $this->input->post('txt_email'),
			'pesan_kontak'  => $this->input->post('txt_pesan'),
		);

		$this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		$data = array(
			'nama_kontak'  	=> $this->input->post('txt_nama'),
			'email_kontak'  => $this->input->post('txt_email'),
			'pesan_kontak'  => $this->input->post('txt_pesan'),
			'balas_kontak'	=> $this->input->post('txt_balas'),
		);

		mail($this->input->post('txt_email'), "Balasan : PKC PMII KALTIMRA", $this->input->post('txt_balas'));

		$this->db->update($this->_table, $data, array('id_kontak' => $id));
	}

	public function count()
	{
		return $this->db->get($this->_table)->num_rows();
	}

}
