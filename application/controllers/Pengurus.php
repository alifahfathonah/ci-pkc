<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

    // funtion yang pertama kali di eksekusi
	public function __construct()
	{
		parent::__construct();

		// load model yang digunakan
        $this->load->model('pengurus_model');
        
        // syntax, apakah pengakses sudah login ? 
        if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 1)
        {
			redirect(site_url('login'));
		}
	}

	// funtion untuk mengarahkan ke view
	public function index()
	{   
		$this->load->view('backend/pengurus/index');
	}

    // fungsi untuk menampilkan data ke dalam datatable
	public function data()
    {
        $results    = $this->pengurus_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = '
				<center>
				    <img src="'.site_url('asset/gambar/pengurus/').$list->gambar_pengurus.'" width="90" height="100">
				</center>
            ';
            $row[]  = $list->nama_pengurus;
            $row[]  = $list->jabatan_pengurus;
            $row[]  = '
                <center>
                    <a href="'.site_url('pengurus/edit/').$list->id_pengurus.'" class="btn btn-xs btn-warning">edit</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function edit($id)
	{
		$data = array(
			'pengurus' 		=> $this->pengurus_model->where($id),
        );
        
		$this->load->view('backend/pengurus/edit',$data);
	}

	public function update($id)
	{
		$this->pengurus_model->update($id);
		return redirect(site_url('pengurus'));
	}

}
