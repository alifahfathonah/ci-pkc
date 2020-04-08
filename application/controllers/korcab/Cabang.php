<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cabang extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();

      if ($this->session->userdata('level_user') != 2) {
         redirect(site_url('auth'));
      }
   }

   public function data($id_cabang)
   {
      $data = array(
         'header_cabang'     => $this->cabang_model->all(),
         'profil_cabang'     => $this->cabang_model->where($id_cabang),
         'total_komisariat'  => $this->komisariat_model->count($id_cabang),
         'total_rayon'       => $this->rayon_model->count($id_cabang),
         'total_anggota'     => $this->anggota_model->count($id_cabang),
         'total_alumni'      => $this->alumni_model->count($id_cabang),
         'total_mapaba'      => $this->anggota_model->total_mapaba($id_cabang),
         'total_pkd'         => $this->anggota_model->total_pkd($id_cabang),
         'total_pkl'         => $this->anggota_model->total_pkl($id_cabang),
         'total_pkn'         => $this->anggota_model->total_pkn($id_cabang),
         'total_kopri'       => $this->anggota_model->total_kopri_biasa($id_cabang),
         'total_sig'         => $this->anggota_model->total_sig($id_cabang),
         'total_skk'         => $this->anggota_model->total_skk($id_cabang),
         'total_skkn'        => $this->anggota_model->total_skkn($id_cabang),
      );

      $this->load->view('korcab/v_cabang', $data);
   }
}

/* End of file korcab/cabang.php */
