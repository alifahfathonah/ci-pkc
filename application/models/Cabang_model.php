<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cabang_model extends CI_Model
{
    // inisiasi variabel untuk digunakan didalam class
    private $_table  = "cabang";

    // fungsi untuk mengambil seluruh data table cabang
    public function all()
    {
        return $this->db->get($this->_table)->result();
    }

    // fungsi untuk mengambil satu data where pada database table cabang
    public function where($id)
    {
        return $this->db->get_where($this->_table, array('id_cabang' => $id))->row();
    }

    public function update($id_cabang)
    {
        $data = array(
            'alamat_cabang'     => $this->input->post('txt_alamat'),
            'email_cabang'      => $this->input->post('txt_email'),
            'telepon_cabang'    => $this->input->post('txt_telepon'),
            'berdiri_cabang'    => $this->input->post('txt_berdiri'),
        );

        $this->db->where('id_cabang', $id_cabang)->update($this->_table, $data);
    }

    public function count()
    {
        return $this->db->get($this->_table)->num_rows();
    }
}
