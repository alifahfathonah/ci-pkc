<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kopri extends CI_Controller
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
         'header_cabang' => $this->cabang_model->all(), //untuk parsing daftar parsing cabang
      );

      $this->load->view('korcab/v_kopri', $parsing);
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->anggota_model->korcab_kopri();
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_anggota;
         $row[]  = '<center>' . $list->nama_rayon . '</center>';
         $row[]  = '<center>' . $list->nama_komisariat . '</center>';
         $row[]  = '<center>' . $list->telepon_anggota . '</center>';
         if ($list->kaderisasi_kopri == "SIG") {
            $row[]  = '<center><span class="badge badge-primary">' . $list->kaderisasi_kopri . '</span></center>';
         } else if ($list->kaderisasi_kopri == "SKK") {
            $row[]  = '<center><span class="badge badge-warning">' . $list->kaderisasi_kopri . '</span></center>';
         } else if ($list->kaderisasi_kopri == "SKKN") {
            $row[]  = '<center><span class="badge badge-success">' . $list->kaderisasi_kopri . '</span></center>';
         } else {
            $row[]  = '<center><span class="badge badge-secondary">' . $list->kaderisasi_kopri . '</span></center>';
         }

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }
}

/* End of file korcab/Kopri.php */
