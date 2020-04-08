<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();

      if ($this->session->userdata('level_user') != 2) {
         redirect(site_url('auth'));
      }
   }

   public function index()
   {
      $parsing = array(
         'header_cabang' => $this->cabang_model->all(),
      );
      $this->load->view('korcab/v_anggota', $parsing);
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data($jenjang = "semua")
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

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_anggota;
         $row[]  = '<center>' . $list->nama_rayon . '</center>';
         $row[]  = '<center>' . $list->nama_komisariat . '</center>';
         $row[]  = '<center>' . $list->nama_cabang . '</center>';
         $row[]  = '
                    <center>
                        <a href="' . site_url('korcab/anggota/detail/' . $list->id_anggota) . '" class="badge badge-warning">Detail</a>
                    </center>
                ';

         $data[] = $row;
      }
      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }

   // funtion untuk show data anggota
   public function detail($id_user)
   {
      $parsing['header_cabang'] = $this->cabang_model->all();
      $parsing['anggota'] = $this->anggota_model->korcab_id($id_user);
      $this->load->view('korcab/v_anggota_detail', $parsing);
   }

   // funtion untuk print kartu anggota
   public function kartu($id)
   {
      $data = array(
         'header_cabang'     => $this->cabang_model->all(),
         'kartu_anggota'     => $this->anggota_model->korcab_id($id),
      );

      $this->load->view('korcab/v_anggota_kartu', $data);
   }
}

/* End of file korcab/Anggota.php */
