<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
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

        // load library
        $this->load->library("PHPExcel");

        // syntax, apakah pengakses sudah login ? 
        if ($this->session->userdata('status') != "login" and $this->session->userdata('level_user') != 3) {
            redirect(site_url('login'));
        }
    }

    // funtion untuk mengarahkan ke view
    public function index()
    {
        $data = array(
            'nama_cabang'       => $this->cabang_model->where($this->session->userdata('cabang_id')),
        );

        $this->load->view('cabang/anggota/index', $data);
    }

    // fungsi untuk menampilkan data ke dalam datatable
    public function data()
    {
        $results    = $this->anggota_model->all($this->session->userdata('cabang_id'));
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_anggota;
            $row[]  = $list->nama_rayon;
            $row[]  = $list->nama_komisariat;
            $row[]  = $list->telepon_anggota;
            $row[]  = $list->status_anggota;
            $row[]  = '
                <center>
                    <a href="' . site_url('anggota/edit/') . $list->id_anggota . '" class="btn btn-xs btn-warning">edit</a>
                    <a onclick="deleteData(' . $list->id_anggota . ')" class="btn btn-xs btn-danger">hapus</a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    public function create()
    {
        $data = array(
            'nama_cabang'       => $this->cabang_model->where($this->session->userdata('cabang_id')),
            'data_komisariat'   => $this->komisariat_model->all($this->session->userdata('cabang_id')),
            'data_rayon'        => $this->rayon_model->all($this->session->userdata('cabang_id')),
        );

        $this->load->view('cabang/anggota/create', $data);
    }

    public function insert()
    {
        $this->anggota_model->store();

        return redirect(site_url('anggota'));
    }

    public function edit($id)
    {
        $data = array(
            'nama_cabang'       => $this->cabang_model->where($this->session->userdata('cabang_id')),
            'data_komisariat'   => $this->komisariat_model->all($this->session->userdata('cabang_id')),
            'data_rayon'        => $this->rayon_model->all($this->session->userdata('cabang_id')),
            'anggota'           => $this->anggota_model->where($id),
        );

        $this->load->view('cabang/anggota/edit', $data);
    }

    public function update($id)
    {
        $this->anggota_model->update($id);

        return redirect(site_url('anggota'));
    }

    public function delete($id)
    {
        $this->anggota_model->delete($id);
    }

    // function untuk redirect kehalaman detail
    public function detail()
    {
        $this->load->view('korcab/anggota/detail');
    }

    // function untuk mengambilkan data anggota sesuai dengan jenjang kaderisasinya 
    public function data_detail($jenjang)
    {
        if ($jenjang == "semua") {
            $results    = $this->anggota_model->korcab_all();
        } elseif ($jenjang == "MAPABA") {
            $results    = $this->anggota_model->korcab_where($jenjang);
        } elseif ($jenjang == "PKD") {
            $results    = $this->anggota_model->korcab_where($jenjang);
        } elseif ($jenjang == "PKL") {
            $results    = $this->anggota_model->korcab_where($jenjang);
        } elseif ($jenjang == "PKN") {
            $results    = $this->anggota_model->korcab_where($jenjang);
        }

        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = $no++;
            $row[]  = $list->nama_anggota;
            $row[]  = $list->tempat_anggota . ', ' . $list->tgl_anggota;
            $row[]  = $list->nama_rayon;
            $row[]  = $list->nama_komisariat;
            $row[]  = $list->nama_cabang;
            $row[]  = $list->email_anggota;
            $row[]  = $list->telepon_anggota;
            $row[]  = $list->status_anggota;

            $data[] = $row;
        }

        $output = array("data" => $data);
        echo json_encode($output);
    }

    // funtion untuk print kartu anggota
    public function kartu($id)
    {
        $data = array(
            'header_cabang'     => $this->cabang_model->all(),
            'kartu_anggota'     => $this->anggota_model->korcab_id($id),
        );

        $this->load->view('korcab/anggota/kartu', $data);
    }

    public function import()
    {
        $data = array(
            'nama_cabang'       => $this->cabang_model->where($this->session->userdata('cabang_id')),
            'daftar_komisariat' => $this->komisariat_model->all($this->session->userdata('cabang_id')),
            'daftar_rayon'      => $this->rayon_model->all($this->session->userdata('cabang_id')),
        );

        $this->load->view('cabang/anggota/import', $data);
    }


    public function do_upload()
    {
        $config['upload_path'] = './asset/uploads/';
        $config['allowed_types'] = 'xlsx|xls';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_import')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name']; //Nama File
            $this->anggota_model->upload_data($filename);
            unlink('./asset/uploads/' . $filename);
            redirect(site_url('anggota'), 'refresh');
        }
    }
}
