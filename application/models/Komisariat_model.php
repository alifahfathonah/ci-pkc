<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komisariat_model extends CI_Model
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table     = "komisariat";

    // function untuk mengambil seluruh data pada table database
    public function all($id_cabang)
    {
        return $this->db->order_by('id_komisariat', 'DESC')->get_where($this->_table, array('cabang_id' => $id_cabang))->result();
    }

    // function untuk mengambil seluruh data pada table database untuk korcab
    public function korcab_all()
    {
        $this->db->select('*')->from($this->_table)
            ->join('cabang', 'cabang.id_cabang=komisariat.cabang_id');
        return $this->db->order_by('id_komisariat', 'DESC')->get()->result();
    }

    public function where($id)
    {
        return $this->db->get_where($this->_table, array('id_komisariat' => $id))->row();
    }

    public function store()
    {
        // insert data ke dalam table komisariat
        $data = array(
            'nama_komisariat'       => ucwords($this->input->post('txt_nama', TRUE)),
            'cabang_id'             => $this->session->userdata('cabang_id', TRUE),
            'alamat_komisariat'     => $this->input->post('txt_alamat', TRUE),
            'email_komisariat'      => $this->input->post('txt_email', TRUE),
            'telepon_komisariat'    => $this->input->post('txt_telepon', TRUE),
            'berdiri_komisariat'    => $this->input->post('txt_berdiri', TRUE),
            'status_komisariat'     => $this->input->post('txt_status', TRUE),
        );

        $this->db->insert($this->_table, $data);
    }

    public function update($id)
    {
        $data = array(
            'nama_komisariat'       => ucwords($this->input->post('txt_nama', TRUE)),
            'alamat_komisariat'     => $this->input->post('txt_alamat', TRUE),
            'email_komisariat'      => $this->input->post('txt_email', TRUE),
            'telepon_komisariat'    => $this->input->post('txt_telepon', TRUE),
            'berdiri_komisariat'    => $this->input->post('txt_berdiri', TRUE),
            'status_komisariat'     => $this->input->post('txt_status', TRUE),
        );

        return $this->db->where('id_komisariat', $id)->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_komisariat' => $id));
    }

    // fungsi untuk menghitung total jumlah komisariat sesuai dengan cabangnya
    public function count($id_cabang)
    {
        if ($id_cabang != 1) {
            return $this->db->where('cabang_id', $id_cabang)->get($this->_table)->num_rows();
        } else {
            return $this->db->get($this->_table)->num_rows() - 1;
        }
    }
}
