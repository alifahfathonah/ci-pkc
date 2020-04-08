<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
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
      // membuat variabel baru
      $id_cabang_parsing = $this->session->userdata('cabang_id');

      // array parsing ke view
      $parsing = array(
         'header_cabang'     => $this->cabang_model->all(),
         'total_cabang'      => $this->cabang_model->count(),
         'total_komisariat'  => $this->komisariat_model->count($id_cabang_parsing),
         'total_rayon'       => $this->rayon_model->count($id_cabang_parsing),
         'total_anggota'     => $this->anggota_model->count($id_cabang_parsing),
         'total_mapaba'      => $this->anggota_model->total_mapaba($id_cabang_parsing),
         'total_alumni'      => $this->alumni_model->count($id_cabang_parsing),
         'total_pkd'         => $this->anggota_model->total_pkd($id_cabang_parsing),
         'total_pkl'         => $this->anggota_model->total_pkl($id_cabang_parsing),
         'total_pkn'         => $this->anggota_model->total_pkn($id_cabang_parsing),
         'total_kopri'       => $this->anggota_model->total_kopri($id_cabang_parsing),
         'total_kopri_biasa' => $this->anggota_model->total_kopri_biasa($id_cabang_parsing),
         'total_sig'         => $this->anggota_model->total_sig($id_cabang_parsing),
         'total_skk'         => $this->anggota_model->total_skk($id_cabang_parsing),
         'total_skkn'        => $this->anggota_model->total_skkn($id_cabang_parsing),
      );

      // load view
      $this->load->view('korcab/v_index', $parsing);
   }
}

/* End of file korcab/Beranda.php */
