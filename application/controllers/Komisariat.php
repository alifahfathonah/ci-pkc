<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komisariat extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
        $this->load->model('cabang_model');
        $this->load->model('komisariat_model');
        
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
            'nama_cabang' => $this->cabang_model->where($this->session->userdata('cabang_id')), 
        );

		$this->load->view('cabang/komisariat/index', $data);
	}

    // fungsi untuk menampilkan data ke dalam datatable
	public function data()
    {
        $results    = $this->komisariat_model->all($this->session->userdata('cabang_id'));
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_komisariat;
            $row[]  = $list->email_komisariat;
            $row[]  = $list->telepon_komisariat;
            $row[]  = $list->status_komisariat;
            $row[]  = '
                <center>
                    <a onclick="editForm('.$list->id_komisariat.')" class="btn btn-xs btn-warning">ubah</a>
                    <a onclick="deleteData('.$list->id_komisariat.')" class="btn btn-xs btn-danger">hapus</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function insert()
	{
		$this->komisariat_model->store();
	}

	public function edit($id)
	{
		$edit_kategori = $this->komisariat_model->where($id);
		echo json_encode($edit_kategori);
	}

	public function update($id)
	{
		$this->komisariat_model->update($id);
	}

	public function delete($id)
	{
		$this->komisariat_model->delete($id);
	}
}
