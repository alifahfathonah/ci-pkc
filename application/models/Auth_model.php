<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

	// inisiasi variabel untuk digunakan didalam class
	private $table  = "user";

	// funtion untuk cek apakah username, password dan level tersedia atau tidak
	public function cek_login($name_user, $pass_user, $level_user)
	{
		$data = array(
			'name_user'    => $name_user,
			'pass_user'    => md5($pass_user),
			'level_user'   => $level_user
		);

		return $this->db->get_where($this->table, $data)->num_rows();
	}

	// funtion untuk mencari data dari database untuk dikembalikan menjadi session
	public function get_where_email($email = array())
	{
		return $this->db->get_where($this->table, $email)->row_array();
	}

	public function get_where_login($email, $password)
	{
		$data = array(
			'email_user' => $email,
			'pass_user'  => md5($password)
		);

		return $this->db->get_where($this->table, $data)->row();
	}
}
