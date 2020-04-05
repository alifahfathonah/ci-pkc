<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rayon_model extends CI_Model 
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table     = "rayon";

    // function untuk mengambil seluruh data pada table database
	public function all($id_cabang)
	{
        $this->db->select('*')->from($this->_table)
                    ->join('komisariat','komisariat.id_komisariat=rayon.komisariat_id')
                    ->join('cabang','cabang.id_cabang=rayon.cabang_id');
        return $this->db->order_by('id_rayon','DESC')->where('rayon.cabang_id', $id_cabang)->get()->result();
    }

    // function untuk mengambil seluruh data pada table database untuk korcab
	public function korcab_all()
	{
        $this->db->select('*')->from($this->_table)
                    ->join('komisariat','komisariat.id_komisariat=rayon.komisariat_id')
                    ->join('cabang','cabang.id_cabang=rayon.cabang_id');
        return $this->db->order_by('id_rayon','DESC')->get()->result();
    }
    
	public function where($id)
	{
		return $this->db->get_where($this->_table,array('id_rayon' => $id))->row();
    }

	public function store()
	{
        // insert data ke dalam table komisariat
        $data = array(
            'nama_rayon'       => ucwords($this->input->post('txt_nama')),
            'komisariat_id'    => $this->input->post('txt_komisariat'),
            'cabang_id'        => $this->session->userdata('cabang_id'), 
            'alamat_rayon'     => $this->input->post('txt_alamat'), 
            'email_rayon'      => $this->input->post('txt_email'), 
            'telepon_rayon'    => $this->input->post('txt_telepon'), 
            'berdiri_rayon'    => $this->input->post('txt_berdiri'), 
            'status_rayon'     => $this->input->post('txt_status'), 
        );
        
        $this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		$data = array(
            'nama_rayon'       => ucwords($this->input->post('txt_nama')),
            'komisariat_id'    => $this->input->post('txt_komisariat'),
            'cabang_id'        => $this->session->userdata('cabang_id'), 
            'alamat_rayon'     => $this->input->post('txt_alamat'), 
            'email_rayon'      => $this->input->post('txt_email'), 
            'telepon_rayon'    => $this->input->post('txt_telepon'), 
            'berdiri_rayon'    => $this->input->post('txt_berdiri'), 
            'status_rayon'     => $this->input->post('txt_status'), 
        );

		$this->db->where('id_rayon', $id)->update($this->_table, $data);
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id_rayon' => $id)); 
	}

    // fungsi untuk menghitung total jumlah komisariat sesuai dengan cabangnya
    public function count($id_cabang)
    {
        if ($id_cabang != 1) {
            return $this->db->where('cabang_id', $id_cabang)->get($this->_table)->num_rows();
        } 
        else {
            return $this->db->get($this->_table)->num_rows() - 1;
        }
    }
}
