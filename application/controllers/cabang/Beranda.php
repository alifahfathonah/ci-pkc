<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();

      if ($this->session->userdata('level_user') != 3) {
         redirect(site_url('auth'));
      }
   }

   public function index()
   {
      $id_cabang_parsing = $this->session->userdata('cabang_id');

      $total_pkn      = $this->anggota_model->total_pkn($id_cabang_parsing);
      $total_pkl      = $total_pkn + $this->anggota_model->total_pkl($id_cabang_parsing);
      $total_pkd      = $total_pkn + $total_pkl + $this->anggota_model->total_pkd($id_cabang_parsing);
      $total_skkn     = $this->anggota_model->total_skkn($id_cabang_parsing);
      $total_skk      = $total_skkn + $this->anggota_model->total_skk($id_cabang_parsing);
      $total_sig      = $total_skk + $this->anggota_model->total_sig($id_cabang_parsing);


      $data = array(
         'cabang'            => $this->cabang_model->where($id_cabang_parsing),
         'total_komisariat'  => $this->komisariat_model->count($id_cabang_parsing),
         'total_rayon'       => $this->rayon_model->count($id_cabang_parsing),
         'total_anggota'     => $this->anggota_model->count($id_cabang_parsing),
         'total_mapaba'      => $this->anggota_model->count($id_cabang_parsing),
         'total_pkd'         => $total_pkd,
         'total_pkl'         => $total_pkl,
         'total_pkn'         => $total_pkn,
         'total_kopri'       => $this->anggota_model->total_kopri($id_cabang_parsing),
         'total_sig'         => $total_sig,
         'total_skk'         => $total_skk,
         'total_skkn'        => $total_skkn,
      );

      $this->load->view('cabang/v_index', $data);
   }

   // mengubah profil cabang
   public function profil_ubah($id_cabang)
   {
      $this->cabang_model->update($id_cabang);
   }
}

/* End of file cabang/Beranda.php */
