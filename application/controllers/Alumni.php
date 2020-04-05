<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
        $this->load->model('cabang_model');
        $this->load->model('alumni_model');
        
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

		$this->load->view('cabang/alumni/index', $data);
    }

    // fungsi untuk menampilkan data ke dalam datatable
	public function data()
    {
        $results    = $this->alumni_model->all($this->session->userdata('cabang_id'));
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_alumni;
            $row[]  = $list->telepon_alumni;
            $row[]  = $list->asal_alumni;
            $row[]  = '
                <center>
                    <a onclick="editForm('.$list->id_alumni.')" class="btn btn-xs btn-warning">ubah</a>
                    <a onclick="deleteData('.$list->id_alumni.')" class="btn btn-xs btn-danger">hapus</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    // function untuk insert data dari controller yang terhubung ke model (database)
    public function insert()
	{
		$this->alumni_model->store();
    }
    
    public function edit($id)
	{
		$edit = $this->alumni_model->where($id);
		echo json_encode($edit);
	}

	public function update($id)
	{
		$this->alumni_model->update($id);
	}

	public function delete($id)
	{
		$this->alumni_model->delete($id);
	}
}