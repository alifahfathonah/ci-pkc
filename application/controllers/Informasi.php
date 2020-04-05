<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // load model yang digunakan
        $this->load->model('informasi_model');

       // syntax, apakah pengakses sudah login ? 
       if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 1)
       {
           redirect(site_url('login'));
       }
    }

	public function index()
	{
        $data = array(
            'informasi' => $this->informasi_model->where(), 
        );

		$this->load->view('backend/informasi', $data);
	}


    public function update($id)
    {
        $this->informasi_model->update($id);
        return redirect(site_url('admin'));
    }
}
