<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rayon extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      if ($this->session->userdata('level_user') != 3) {
         redirect(site_url('auth'));
      }

      $this->id_cabang = $this->session->userdata('cabang_id');
   }

   public function index()
   {
      $parsing['komisariats'] = $this->komisariat_model->all($this->id_cabang);
      $this->load->view('cabang/v_rayon', $parsing);
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->rayon_model->all($this->id_cabang);
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_rayon;
         $row[]  = '<center>' . $list->nama_komisariat . '</center>';
         $row[]  = '<center>' . $list->telepon_rayon . '</center>';
         if ($list->status_rayon == "Definitif") {
            $row[]  = '<center><span class="badge badge-primary">' . $list->status_rayon . '</span></center>';
         } else {
            $row[]  = '<center><span class="badge badge-warning">' . $list->status_rayon . '</span></center>';
         }
         $row[]  = '
               <center>
                  <a href="#" onclick="editForm(' . $list->id_rayon . ')" class="badge badge-success text-white"><i class="zmdi zmdi-edit"></i>&nbsp;Ubah</a>
                  <a href="#" onclick="deleteData(' . $list->id_rayon . ')" class="badge badge-danger text-white"><i class="zmdi zmdi-delete"></i>&nbsp;Hapus</a>
               </center>
           ';

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }

   public function insert()
   {
      $this->rayon_model->store();
   }

   public function edit($id)
   {
      $output = $this->rayon_model->where($id);
      $this->output->set_output(json_encode($output));
   }

   public function update($id)
   {
      $this->rayon_model->update($id);
   }

   public function delete($id)
   {
      $this->rayon_model->delete($id);
   }
}

/* End of file cabang/Rayon.php */
