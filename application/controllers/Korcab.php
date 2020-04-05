<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Korcab extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        // load model yang digunakan
        $this->load->model('user_model');
        $this->load->model('cabang_model');
        $this->load->model('komisariat_model');
        $this->load->model('rayon_model');
        $this->load->model('anggota_model');
        $this->load->model('alumni_model');

        // syntax, apakah pengakses sudah login ? 
        if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 2)
        {
			redirect(site_url('login'));
		}
    }

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
            'header_cabang'     => $this->cabang_model->all(),
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

		$this->load->view('korcab/index', $data);
	}

    public function profil_edit($id_user)
	{
        $data = array(
            'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar data cabang
        );

        $this->load->view('korcab/profil', $data);
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
				'name_user' 	=> $name_user,
                'level_user'	=> $level_user,
				'status' 		=> "login"
			);
			
			// pembuatan session
			$this->session->set_userdata($data_session);

			// redirect kehalaman index
			redirect(site_url('korcab'));
        } 
        else {
			redirect(site_url('login'));
		}
    }
    
    public function cabang($id_cabang)
	{
        $total_pkn      = $this->anggota_model->total_pkn($id_cabang);
        $total_pkl      = $total_pkn + $this->anggota_model->total_pkl($id_cabang);
        $total_pkd      = $total_pkn + $total_pkl + $this->anggota_model->total_pkd($id_cabang);
        $total_skkn     = $this->anggota_model->total_skkn($id_cabang);
        $total_skk      = $total_skkn + $this->anggota_model->total_skk($id_cabang);
        $total_sig      = $total_skk + $this->anggota_model->total_sig($id_cabang);

        $data = array(
            'header_cabang'     => $this->cabang_model->all(),
            'profil_cabang'     => $this->cabang_model->where($id_cabang),
            'total_komisariat'  => $this->komisariat_model->count($id_cabang),
            'total_rayon'       => $this->rayon_model->count($id_cabang),
            'total_anggota'     => $this->anggota_model->count($id_cabang),
            'total_mapaba'      => $this->anggota_model->count($id_cabang),
            'total_pkd'         => $total_pkd,
            'total_pkl'         => $total_pkl,
            'total_pkn'         => $total_pkn,
            'total_sig'         => $total_sig,
            'total_skk'         => $total_skk,
            'total_skkn'        => $total_skkn,
        );

        $this->load->view('korcab/cabang/index', $data);
    }
    
    public function komisariat()
	{
        $data = array(
            'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar data cabang
        );

        $this->load->view('korcab/komisariat/index', $data);
    }
    
    public function rayon()
	{
        $data = array(
            'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar data cabang
        );

        $this->load->view('korcab/rayon/index', $data);
    }
    
    public function anggota()
	{
        $data = array(
            'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar data cabang
        );

        $this->load->view('korcab/anggota/index', $data);
    }
    
    public function kopri()
	{
        $data = array(
            'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar data cabang
        );

        $this->load->view('korcab/kopri/index', $data);
    }
    
    public function alumni()
	{
        $data = array(
            'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar data cabang
        );

        $this->load->view('korcab/alumni/index', $data);
    }
    
    // fungsi untuk menampilkan data ke dalam datatable
	public function komisariat_data()
    {
        $results    = $this->komisariat_model->korcab_all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_komisariat;
            $row[]  = $list->nama_cabang;
            $row[]  = $list->telepon_komisariat;
            $row[]  = $list->status_komisariat;

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }
    
    // fungsi untuk menampilkan data ke dalam datatable
	public function rayon_data()
    {
        $results    = $this->rayon_model->korcab_all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_rayon;
            $row[]  = $list->nama_komisariat;
            $row[]  = $list->nama_cabang;
            $row[]  = $list->telepon_rayon;
            $row[]  = $list->status_rayon;

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }
    
    // fungsi untuk menampilkan data ke dalam datatable
	public function anggota_data()
    {
        $results    = $this->anggota_model->korcab_all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_anggota;
            $row[]  = $list->nama_rayon;
            $row[]  = $list->nama_komisariat;
            $row[]  = $list->nama_cabang;
            $row[]  = $list->telepon_anggota;
            if ($list->foto_anggota == "") {
                $row[]  = '
                    <center>
                        <a href="#" class="btn btn-xs btn-danger">No Print</a>
                    </center>
                ';
            }
            else {
                $row[]  = '
                    <center>
                        <a href="'.site_url('anggota/kartu/').$list->id_anggota.'" target="_blank" class="btn btn-xs btn-warning">Print</a>
                    </center>
                ';
            }

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    // fungsi untuk menampilkan data ke dalam datatable
	public function kopri_data()
    {
        $results    = $this->anggota_model->korcab_kopri();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_anggota;
            $row[]  = $list->nama_rayon;
            $row[]  = $list->nama_komisariat;
            $row[]  = $list->telepon_anggota;
            $row[]  = $list->kaderisasi_kopri;
            
            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }
    
    // fungsi untuk menampilkan data ke dalam datatable
	public function alumni_data()
    {
        $results    = $this->alumni_model->korcab();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_alumni;
            $row[]  = $list->telepon_alumni;
            $row[]  = $list->asal_alumni;
            $row[]  = $list->nama_cabang;

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }
}
