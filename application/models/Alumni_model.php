<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_model extends CI_Model 
{
    // inisiasi variabel untuk digunakan didalam class
    private $_table     = "alumni";

    // function untuk mengambil seluruh data pada table database
	public function all($id_cabang)
	{
        return $this->db->order_by('id_alumni','DESC')->get_where($this->_table,array('cabang_id' => $id_cabang))->result();
    }
    
    public function korcab()
	{
        $this->db->select('*')->from($this->_table)
                    ->join('cabang','cabang.id_cabang=alumni.cabang_id');
        return $this->db->order_by('id_alumni','DESC')->get()->result();
    }

    public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_alumni' => $id))->row();
    }

    // function untuk insert data ke database
	public function store()
	{
        // insert data ke dalam table komisariat
        $data = array(
            'nama_alumni'       => ucwords($this->input->post('txt_nama')), 
            'telepon_alumni'    => $this->input->post('txt_telepon'), 
            'asal_alumni'       => ucwords($this->input->post('txt_asal')), 
            'cabang_id'         => $this->session->userdata('cabang_id'), 
        );
        
        $this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		$data = array(
            'nama_alumni'       => ucwords($this->input->post('txt_nama')), 
            'telepon_alumni'    => $this->input->post('txt_telepon'), 
            'asal_alumni'       => ucwords($this->input->post('txt_asal')), 
        );

		$this->db->where('id_alumni', $id)->update($this->_table, $data);
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id_alumni' => $id)); 
	}
}