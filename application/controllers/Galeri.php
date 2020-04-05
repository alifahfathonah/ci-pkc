<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        // load model yang digunakan
        $this->load->model('galeri_model');

       // syntax, apakah pengakses sudah login ? 
       if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 1)
       {
           redirect(site_url('login'));
       }
    }

    public function index()
    {
        $this->load->view('backend/galeri/index');
    }

    // fungsi untuk menampilkan data ke dalam datatable
	public function data()
    {
        $results    = $this->galeri_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = '
				<center>
				    <img src="'.site_url('asset/gambar/galeri/').$list->gambar_galeri.'" width="80" height="50">
				</center>
            ';
            $row[]  = $list->nama_galeri;
            $row[]  = '
                <center>
                    <a href="'.site_url('galeri/edit/').$list->id_galeri.'" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData('.$list->id_galeri.')" class="btn btn-xs btn-danger">hapus</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }
    
    public function create()
	{
		$this->load->view('backend/galeri/create');
	}
    
    public function insert()
	{
        $this->galeri_model->store();
        
        return redirect(site_url('galeri'));
	}

	public function edit($id)
	{
		$data = array(
			'galeri' 		=> $this->galeri_model->where($id),
		);
		$this->load->view('backend/galeri/edit',$data);
	}

	public function update($id)
	{
		$this->galeri_model->update($id);
		return redirect(site_url('galeri'));
	}

	public function delete($id)
	{
		$this->galeri_model->delete($id);
	}
}
