<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model {

    // inisiasi variabel untuk digunakan didalam class
    private $table  = "informasi";

    public function where()
    {
        return $this->db->get($this->table)->row();
    }

    public function update($id)
    {
        $data = array(
            'alamat_informasi' => $this->input->post('txt_alamat'), 
            'email_informasi' => $this->input->post('txt_email'), 
            'telepon_informasi' => $this->input->post('txt_telepon'), 
            'facebook_informasi' => $this->input->post('txt_facebook'), 
            'instagram_informasi' => $this->input->post('txt_instagram'),
        );

        $this->db->where('id_informasi', $id)->update($this->table, $data);
    }
}
