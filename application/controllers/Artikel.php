<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        // load model yang digunakan
        $this->load->model('artikel_model');

       // syntax, apakah pengakses sudah login ? 
       if($this->session->userdata('status') != "login" AND $this->session->userdata('level_user') != 1)
       {
           redirect(site_url('login'));
       }
    }

    public function index()
    {
        $this->load->view('backend/artikel/index');
    }

    // fungsi untuk menampilkan data ke dalam datatable
	public function data()
    {
        $results    = $this->artikel_model->all();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = '
				<center>
				<img src="'.site_url('asset/gambar/').$list->gambar_artikel.'" width="80" height="50">
				</center>
            ';
            $row[]  = $list->nama_artikel;
            $row[]  = $list->hits_artikel;
            $row[]  = '
                <center>
                    <a href="'.site_url('artikel/edit/').$list->id_artikel.'" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData('.$list->id_artikel.')" class="btn btn-xs btn-danger">hapus</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

	public function create()
	{
		$this->load->view('backend/artikel/create');
	}
    
    public function insert()
	{
        $this->artikel_model->store();
        
        return redirect(site_url('artikel'));
	}

	public function edit($id)
	{
		$data = array(
			'artikel' 		=> $this->artikel_model->where($id),
		);
		$this->load->view('backend/artikel/edit',$data);
	}

	public function update($id)
	{
		$this->artikel_model->update($id);
		return redirect(site_url('artikel'));
	}

	public function delete($id)
	{
		$this->artikel_model->delete($id);
	}
}
