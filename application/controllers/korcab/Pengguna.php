<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    // funtion yang pertama kali di eksekusi
    public function __construct()
    {
        parent::__construct();

        // syntax, apakah pengakses sudah login ? 
        if ($this->session->userdata('level_user') != 2) {
            redirect(site_url('auth'));
        }
    }

    // funtion untuk mengarahkan ke view
    public function index()
    {
        $parsing = array(
            'header_cabang' => $this->cabang_model->all(),
        );

        $this->load->view('korcab/v_user', $parsing);
    }

    public function data()
    {
        $results    = $this->user_model->join();
        $data       = array();
        $no         = 1;

        foreach ($results as $list) {
            $row    = array();

            $row[]  = '<center>' . $no++ . '</center>';
            $row[]  = $list->name_user;
            $row[]  = '<center>' . $list->nama_cabang . '</center>';
            if ($list->level_user == 1) {
                $row[]  = '<center><span class="badge badge-success">Administrator Web</span></center>';
            } elseif ($list->level_user == 2) {
                $row[]  = '<center><span class="badge badge-primary">Pengurus Koordinator Cabang</span></center>';
            } elseif ($list->level_user == 3) {
                $row[]  = '<center><span class="badge badge-warning">Pengurus Cabang</span></center>';
            };
            $row[]  = '
                <center>
                    <a href="#" onclick="deleteData(' . $list->id_user . ')" class="badge badge-danger text-white">
                    <i class="zmdi zmdi-delete"></i>&nbsp;hapus
                    </a>
                </center>
            ';

            $data[] = $row;
        }

        $output = array("data" => $data);
        $this->output->set_output(json_encode($output));
    }

    public function insert()
    {
        $this->user_model->store();
    }

    public function edit($id)
    {
        $edit_kategori = $this->user_model->where($id);
        $this->output->set_output(json_encode($edit_kategori));
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
