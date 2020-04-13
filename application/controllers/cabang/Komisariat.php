<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Komisariat extends CI_Controller
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
      $this->load->view('cabang/v_komisariat');
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->komisariat_model->all($this->id_cabang);
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_komisariat;
         $row[]  = $list->email_komisariat;
         $row[]  = '<center>' . $list->telepon_komisariat . '</center>';
         if ($list->status_komisariat == "Definitif") {
            $row[]  = '<center><span class="badge badge-primary">' . $list->status_komisariat . '</span></center>';
         } else {
            $row[]  = '<center><span class="badge badge-warning">' . $list->status_komisariat . '</span></center>';
         }
         $row[]  = '
               <center>
                  <a href="#" onclick="editForm(' . $list->id_komisariat . ')" class="badge badge-success text-white"><i class="zmdi zmdi-edit"></i>&nbsp;Ubah</a>
                  <a href="#" onclick="deleteData(' . $list->id_komisariat . ')" class="badge badge-danger text-white"><i class="zmdi zmdi-delete"></i>&nbsp;Hapus</a>
               </center>
           ';

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }

   public function insert()
   {
      $this->komisariat_model->store();
   }

   public function edit($id)
   {
      $output = $this->komisariat_model->where($id);
      $this->output->set_output(json_encode($output));
   }

   public function update($id)
   {
      $this->komisariat_model->update($id);
   }

   public function delete($id)
   {
      $this->komisariat_model->delete($id);
   }
}

/* End of file cabang/Komisariat.php */
