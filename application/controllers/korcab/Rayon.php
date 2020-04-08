<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rayon extends CI_Controller
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

      $this->load->view('korcab/v_rayon', $parsing);
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->rayon_model->korcab_all();
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_rayon;
         $row[]  = '<center>' . $list->nama_komisariat . '</center>';
         $row[]  = '<center>' . $list->nama_cabang . '</center>';
         $row[]  = '<center>' . $list->telepon_rayon . '</center>';
         if ($list->status_rayon == "Definitif") {
            $row[]  = '<center><span class="badge badge-primary">' . $list->status_rayon . '</span></center>';
         } else {
            $row[]  = '<center><span class="badge badge-danger">' . $list->status_rayon . '</span></center>';
         }

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }
}

/* End of file korcab/Rayon.php */
