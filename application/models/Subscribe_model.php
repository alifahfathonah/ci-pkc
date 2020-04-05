<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_Model 
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table     = "subscribe";

    // function untuk mengambil seluruh data pada table database
	public function all()
	{
        return $this->db->order_by('id_subscribe','DESC')->get($this->_table)->result();
    }
    
    // function untuk memasukkan data pada database
	public function insert()
	{
        // insert data ke dalam table komisariat
        $data = array(
            'email_subscribe'      => $this->input->post('txt_email'),
        );
        
        $this->db->insert($this->_table, $data);
    }

    // function untuk menghitung total data keseluruhan
	public function count()
	{
        return $this->db->get($this->_table)->num_rows();
	}
    
}
