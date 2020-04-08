<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        // load model yang digunakan
        $this->load->model('user_model');
        $this->load->model('cabang_model');
        $this->load->model('komisariat_model');
        $this->load->model('rayon_model');
        $this->load->model('anggota_model');

        // syntax, apakah pengakses sudah login ? 
        if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 3)
        {
			redirect(site_url('login'));
		}
    }

    // fungsi untuk  mengarahakan ke view index.php pada folder cabang
	public function index()
	{
        $id_cabang_parsing = $this->session->userdata('cabang_id');

        $total_pkn      = $this->anggota_model->total_pkn($id_cabang_parsing);
        $total_pkl      = $total_pkn + $this->anggota_model->total_pkl($id_cabang_parsing);
        $total_pkd      = $total_pkn + $total_pkl + $this->anggota_model->total_pkd($id_cabang_parsing);
        $total_mapaba   = $total_pkn + $total_pkl + $total_pkd + $this->anggota_model->total_mapaba($id_cabang_parsing);
        $total_skkn     = $this->anggota_model->total_skkn($id_cabang_parsing);
        $total_skk      = $total_skkn + $this->anggota_model->total_skk($id_cabang_parsing);
        $total_sig      = $total_skk + $this->anggota_model->total_sig($id_cabang_parsing);
        

        $data = array(
            'nama_cabang'       => $this->cabang_model->where($id_cabang_parsing),
            'total_komisariat'  => $this->komisariat_model->count($id_cabang_parsing),
            'total_rayon'       => $this->rayon_model->count($id_cabang_parsing),
            'total_anggota'     => $this->anggota_model->count($id_cabang_parsing),
            'total_mapaba'      => $this->anggota_model->count($id_cabang_parsing),
            'total_pkd'         => $total_pkd,
            'total_pkl'         => $total_pkl,
            'total_pkn'         => $total_pkn,
            'total_sig'         => $total_sig,
            'total_skk'         => $total_skk,
            'total_skkn'        => $total_skkn,
        );

		$this->load->view('cabang/index', $data);
	}

    // fungsi untuk  mengarahakan ke view profil.php pada folder cabang
    public function pengaturan_edit($id_user)
	{
        $data = array(
            'nama_cabang' => $this->cabang_model->where($this->session->userdata('cabang_id')), 
        );

        $this->load->view('cabang/pengaturan', $data);
    }
    
    public function pengaturan_ubah($id_user)
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
			redirect(site_url('cabang'));
        } 
        else {
			redirect(site_url('login'));
		}
    }
    
    // fungsi untuk  mengarahakan ke view profil.php pada folder cabang
    public function profil_edit($id_cabang)
	{
        $data = array(
            'nama_cabang' => $this->cabang_model->where($this->session->userdata('cabang_id')), 
            'data_cabang' => $this->cabang_model->where($id_cabang), 
        );

        $this->load->view('cabang/profil', $data);
    }

    public function profil_ubah($id_cabang)
    {
        $this->cabang_model->update($id_cabang);

        return redirect(site_url('cabang/profil_edit/'.$this->session->userdata('cabang_id')));
    }
}
