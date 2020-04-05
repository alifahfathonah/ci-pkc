<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        // load model yang digunakan
        $this->load->model('user_model');

        // syntax, apakah pengakses sudah login ? 
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
    }

	public function admin()
	{
		echo "ini adalah halaman admin website";
	}

	public function korcab()
	{
        $data = array(
            'cabang_level' => $this->user_model->where_level() 
        );

		$this->load->view('korcab/index',$data);
	}

	public function cabang($cabang_id)
	{
		echo "ini adalah halaman admin pc ".$cabang_id;
	}
}
