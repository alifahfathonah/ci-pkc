<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        // load model yang digunakan
        $this->load->model('user_model');
        $this->load->model('artikel_model');
        $this->load->model('galeri_model');
        $this->load->model('kontak_model');
        $this->load->model('subscribe_model');

       // syntax, apakah pengakses sudah login ? 
       if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 1)
       {
           redirect(site_url('login'));
       }
    }

    public function index()
    {
        $data = array(
            'total_artikel'     => $this->artikel_model->count(),
            'total_galeri'      => $this->galeri_model->count(),
            'total_kontak'      => $this->kontak_model->count(),
            'total_subscribe'   => $this->subscribe_model->count(),
         );
         
        $this->load->view('backend/index',$data);
    }
    
    public function profil_edit()
    {
        $this->load->view('backend/profil');
    }

    public function ubah_profil($id_user)
	{
		$data1 = array(
			'name_user' => $this->input->post('txt_name'), 
		);

		$data2 = array(
			'name_user' => $this->input->post('txt_name'), 
			'pass_user' => md5($this->input->post('txt_pass')), 
		);

		if (empty($this->input->post('txt_pass'))) {
			$this->db->update('user', $data1, array('id_user' => $id_user));
		} else {
			$this->db->update('user', $data2, array('id_user' => $id_user));
		}

		$data = $this->user_model->where($id_user);

		if ($data) {
			$data_session = array(
                'id_user' 		=> $data->id_user,
                'cabang_id' 	=> $data->cabang_id,
				'name_user' 	=> $data->name_user,
                'level_user'	=> $data->level_user,
				'status' 		=> "login"
			);
			
			// pembuatan session
			$this->session->set_userdata($data_session);

			// redirect kehalaman index
			redirect(site_url('admin'));
        } 
        else {
			redirect(site_url('login'));
		}
    }
}
