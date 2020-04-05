<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kopri extends CI_Controller 
{
    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
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
    
    // funtion untuk mengarahkan ke view
	public function index()
	{   
        $data = array(
            'nama_cabang'       => $this->cabang_model->where($this->session->userdata('cabang_id')),
        );

		$this->load->view('cabang/kopri/index', $data);
    }
    
    // fungsi untuk menampilkan data ke dalam datatable
	public function data()
    {
        $results    = $this->anggota_model->kopri($this->session->userdata('cabang_id'));
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
            $row[]  = '
                <center>
                    <a href="'.site_url('anggota/edit/').$list->id_anggota.'" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData('.$list->id_anggota.')" class="btn btn-xs btn-danger">hapus</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }
}