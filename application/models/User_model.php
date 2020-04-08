<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table     = "user";

    // function untuk mengambil seluruh data pada table database
    public function all()
    {
        return $this->db->order_by('id_user', 'DESC')->get($this->_table)->result();
    }

    public function join()
    {
        $this->db->select('*')->from('user')->join('cabang', 'cabang.id_cabang=user.cabang_id');
        return $this->db->order_by('wkt_user', 'DESC')->get()->result();
    }

    public function where($id)
    {
        return $this->db->get_where($this->_table, array('id_user' => $id))->row();
    }

    public function store()
    {
        // insert data ke dalam table user
        $data = array(
            'id_user'       => rand(100000000, 999999999),
            'name_user'     => ucwords($this->input->post('txt_name', TRUE)),
            'email_user'    => $this->input->post('txt_email', TRUE),
            'cabang_id'     => $this->input->post('txt_cabang', TRUE),
            'pass_user'     => password_hash('123456', PASSWORD_DEFAULT),
            'level_user'    => $this->input->post('txt_level', TRUE),
            'wkt_user'      => date('Y-m-d H:i:s')
        );

        $this->db->insert($this->_table, $data);
    }

    public function update($id)
    {
        $data = array(
            'name_user'     => $this->input->post('txt_name'),
            'cabang_id'     => $this->input->post('txt_cabang'),
            'pass_user'     => md5($this->input->post('txt_pass')),
            'level_user'    => $this->input->post('txt_level'),
        );

        $this->db->where('id_user', $id)->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_user' => $id));
    }

    public function where_level()
    {
        return $this->db->order_by('id_user', 'DESC')->get_where($this->_table, array('level_user' => 3))->result();
    }

    public function update_profil($id_user)
    {
        $data = array(
            'name_user'     => $this->input->post('name_user'),
            'email_user'    => $this->input->post('email_user'),
        );

        $this->db->where('id_user', $id_user)->update($this->_table, $data);
    }

    public function update_password($id_user)
    {
        $data = array(
            'pass_user' => password_hash($this->input->post('pass2', TRUE), PASSWORD_DEFAULT),
        );

        $this->db->where('id_user', $id_user)->update($this->_table, $data);
    }
}
