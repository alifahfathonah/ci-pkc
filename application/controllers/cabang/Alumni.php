<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
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
      $this->load->view('cabang/v_alumni');
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->alumni_model->all($this->id_cabang);
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_alumni;
         $row[]  = '<center>' . $list->telepon_alumni . '</center>';
         $row[]  = $list->asal_alumni;
         $row[]  = '
               <center>
                  <a href="#" onclick="editForm(' . $list->id_alumni . ')" class="badge badge-success text-white"><i class="zmdi zmdi-edit"></i>&nbsp;Ubah</a>
                  <a href="#" onclick="deleteData(' . $list->id_alumni . ')" class="badge badge-danger text-white"><i class="zmdi zmdi-delete"></i>&nbsp;Hapus</a>
               </center>
           ';

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }

   public function insert()
   {
      $this->alumni_model->store();
   }

   public function edit($id)
   {
      $output = $this->alumni_model->where($id);
      $this->output->set_output(json_encode($output));
   }

   public function update($id)
   {
      $this->alumni_model->update($id);
   }

   public function delete($id)
   {
      $this->alumni_model->delete($id);
   }
}

/* End of file cabang/Alumni.php */
