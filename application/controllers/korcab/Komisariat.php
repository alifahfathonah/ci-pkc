<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Komisariat extends CI_Controller
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

      // $this->load->view('korcab/komisariat/index', $parsing);
      $this->load->view('korcab/v_komisariat', $parsing);
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->komisariat_model->korcab_all();
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_komisariat;
         $row[]  = '<center>' . $list->nama_cabang . '</center>';
         $row[]  = '<center>' . $list->telepon_komisariat . '</center>';
         if ($list->status_komisariat == "Definitif") {
            $row[]  = '<center><span class="badge badge-primary">' . $list->status_komisariat . '</span></center>';
         } else {
            $row[]  = '<center><span class="badge badge-danger">' . $list->status_komisariat . '</span></center>';
         }

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }
}

/* End of file korcab/komisariat.php */
