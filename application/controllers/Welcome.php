<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
        $this->load->model('informasi_model');
        $this->load->model('pengurus_model');
        $this->load->model('anggota_model');
        $this->load->model('galeri_model');
		$this->load->model('artikel_model');
		
		// load library yang digunakan 
		$this->load->library('pagination');
	}

	public function index()
	{
		$total_pkn      = $this->anggota_model->total_pkn(1);
        $total_pkl      = $total_pkn + $this->anggota_model->total_pkl(1);
        $total_pkd      = $total_pkn + $total_pkl + $this->anggota_model->total_pkd(1);
				
		$data = array(
			'informasi' 		=> $this->informasi_model->where(), // data yang diload di seluruh halaman HTML
			'daftar_pengurus' 	=> $this->pengurus_model->all(),
			'total_mapaba' 		=> $this->anggota_model->count(1),
			'total_pkd' 		=> $total_pkd,
			'total_pkl' 		=> $total_pkl,
			'total_pkn' 		=> $total_pkn,
			'daftar_galeri' 	=> $this->galeri_model->limit(4),
			'daftar_artikel' 	=> $this->artikel_model->limit(2),
		);

		$this->load->view('frontend/index', $data);
	}
	
	public function artikel()
	{
		$config['base_url']		= site_url('welcome/artikel');
		$config['total_rows'] 	= $this->artikel_model->count();
		$config['per_page'] 	= 12;
		$from 					= $this->uri->segment(3);

		$config['full_tag_open'] = '<h3>';
		$config['full_tag_close'] = '</h3>';

		$this->pagination->initialize($config);

		$data = array(
			'informasi' 		=> $this->informasi_model->where(), // data yang diload di seluruh halaman HTML
			'daftar_artikel' 	=> $this->artikel_model->paginate($config['per_page'], $from),
		);

		$this->load->view('frontend/artikel', $data);
	}

	public function artikel_detail($slug)
	{
		// pengupdatean data hits ketika detail dibaca
		$hits 	= $this->artikel_model->where_slug($slug);

		$hit 	= array('hits_artikel' => $hits->hits_artikel+1, );

		$this->db->update('artikel', $hit, array('slug_artikel' => $slug));

		// penampungan data untuk diparsing
		$data = array(
			'informasi' 			=> $this->informasi_model->where(), // data yang diload di seluruh halaman HTML
			'artikel' 				=> $this->artikel_model->where_slug($slug),
			'artikel_terbaru'		=> $this->artikel_model->terbaru(),
			'artikel_terpopuler'	=> $this->artikel_model->terpopuler(),
		);

		$this->load->view('frontend/artikel_detail', $data);
	}
	
	public function galeri()
	{
		$config['base_url']		= site_url('welcome/galeri');
		$config['total_rows'] 	= $this->galeri_model->count();
		$config['per_page'] 	= 16;
		$from 					= $this->uri->segment(3);

		$config['full_tag_open'] = '<h3>';
		$config['full_tag_close'] = '</h3>';

		$this->pagination->initialize($config);

		$data = array(
			'informasi' 		=> $this->informasi_model->where(), // data yang diload di seluruh halaman HTML
			'daftar_galeri' 	=> $this->galeri_model->paginate($config['per_page'], $from),
		);

		$this->load->view('frontend/galeri', $data);
	}
	
	public function kontak()
	{
		$data = array(
			'informasi' 		=> $this->informasi_model->where(), // data yang diload di seluruh halaman HTML
		);

		$this->load->view('frontend/kontak', $data);
	}


}
