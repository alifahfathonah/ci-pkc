<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	// funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
        $this->load->model("user_model");
        $this->load->model('cabang_model');
        
        // syntax, apakah pengakses sudah login ? 
        if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 2)
        {
			redirect(site_url('login'));
		}
	}

	// funtion untuk mengarahkan ke view
	public function index()
	{
        $data = array(
            'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar data cabang\
        );
        
		$this->load->view('korcab/user/index', $data);
	}

	public function data()
    {
        $results    = $this->user_model->join();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->name_user;
            $row[]  = $list->nama_cabang;
            if ($list->level_user == 1) {
                $row[]  = "Administrator Web";
            }
            elseif ($list->level_user == 2) {
                $row[]  = "Pengurus Koordinator Cabang";
            }
            elseif ($list->level_user == 3) {
                $row[]  = "Pengurus Cabang";
            };
            $row[]  = '
                <center>
                    <a onclick="deleteData('.$list->id_user.')" class="btn btn-xs btn-danger">hapus</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function insert()
	{
		$this->user_model->store();
	}

	public function edit($id)
	{
		$edit_kategori = $this->user_model->where($id);
		echo json_encode($edit_kategori);
	}

	public function update($id)
	{
		$this->user_model->update($id);
	}

	public function delete($id)
	{
		$this->user_model->delete($id);
	}
}
