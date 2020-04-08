<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
        $this->load->model('subscribe_model');
        
        // syntax, apakah pengakses sudah login ? 
        if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 1)
        {
			redirect(site_url('login'));
		}
	}

	// funtion untuk mengarahkan ke view
	public function index()
	{   
		$this->load->view('backend/subscribe/index');
	}

    // fungsi untuk menampilkan data ke dalam datatable
	public function data()
    {
        $results    = $this->subscribe_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->email_subscribe;

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    // funtion untuk insert data subscribes
	public function insert()
	{   
        $this->subscribe_model->insert();

		return redirect('welcome');
	}
}
