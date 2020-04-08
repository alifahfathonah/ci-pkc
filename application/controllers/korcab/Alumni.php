<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
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

      $this->load->view('korcab/v_alumni', $parsing);
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->alumni_model->korcab();
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_alumni;
         $row[]  = '<center>' . $list->telepon_alumni . '</center>';
         $row[]  = '<center>' . $list->asal_alumni . '</center>';
         $row[]  = '<center>' . $list->nama_cabang . '</center>';

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }
}

/* End of file korcab/Alumni.php */
