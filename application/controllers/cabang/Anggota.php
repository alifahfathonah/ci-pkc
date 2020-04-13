<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      if ($this->session->userdata('level_user') != 3) {
         redirect(site_url('auth'));
      }

      // load library
      $this->load->library("PHPExcel");

      $this->id_cabang = $this->session->userdata('cabang_id');
   }

   public function index()
   {
      $this->load->view('cabang/v_anggota');
   }

   // fungsi untuk menampilkan data ke dalam datatable
   public function data()
   {
      $results    = $this->anggota_model->all($this->id_cabang);
      $data       = array();
      $no         = 1;

      foreach ($results as $list) {
         $row    = array();

         $row[]  = '<center>' . $no++ . '</center>';
         $row[]  = $list->nama_anggota;
         $row[]  = '<center><small>' . $list->nama_rayon . '</small></center>';
         $row[]  = '<center><small>' . $list->nama_komisariat . '</small></center>';
         $row[]  = '<center><small>' . $list->telepon_anggota . '</small></center>';
         if ($list->status_anggota == "Aktif") {
            $row[]  = '<center><span class="badge badge-primary">' . $list->status_anggota . '</span></center>';
         } else {
            $row[]  = '<center><span class="badge badge-danger">' . $list->status_anggota . '</span></center>';
         }
         $row[]  = '
               <center>
                  <a href="' . site_url('cabang/anggota/edit/' . $list->id_anggota) . '" class="badge badge-success text-white"><i class="zmdi zmdi-edit"></i>&nbsp;Ubah</a>
                  <a href="#" onclick="deleteData(' . $list->id_anggota . ')" class="badge badge-danger text-white"><i class="zmdi zmdi-delete"></i>&nbsp;Hapus</a>
               </center>
           ';

         $data[] = $row;
      }

      $output = array("data" => $data);
      $this->output->set_output(json_encode($output));
   }

   public function create()
   {
      $config = array(
         array(
            'field' => 'txt_nama',
            'label' => 'Nama anggota',
            'rules' => 'required|trim',
            'errors' => array(
               'required' => '%s harus diisi.',
            )
         ),
         array(
            'field' => 'txt_tempat',
            'label' => 'Tempat lahir',
            'rules' => 'required|trim',
            'errors' => array(
               'required' => '%s harus diisi.',
            )
         ),
         array(
            'field' => 'txt_tgl',
            'label' => 'Tanggal lahir',
            'rules' => 'required|trim',
            'errors' => array(
               'required' => '%s harus diisi.',
            )
         ),
         array(
            'field' => 'txt_telepon',
            'label' => 'Telepon',
            'rules' => 'required|trim',
            'errors' => array(
               'required' => '%s harus diisi.',
            )
         ),
         array(
            'field' => 'txt_email',
            'label' => 'Email',
            'rules' => 'required|trim',
            'errors' => array(
               'required' => '%s harus diisi.',
            )
         )
      );
      $this->form_validation->set_rules($config);

      // jika gagal
      if ($this->form_validation->run() == FALSE) {
         $parsing['komisariats'] = $this->komisariat_model->all($this->id_cabang);
         $parsing['rayons']      = $this->rayon_model->all($this->id_cabang);

         $this->load->view('cabang/v_anggota_tambah', $parsing);
      }
      // jika berhasil
      else {
         // proses insert
         $this->anggota_model->store();

         // alert jika berhasil
         $this->session->set_flashdata('alert_anggota', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data anggota berhasil ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

         // redirect
         return redirect(site_url('cabang/anggota'));
      }
   }

   public function edit($id)
   {
      $parsing['komisariats'] = $this->komisariat_model->all($this->id_cabang);
      $parsing['rayons']      = $this->rayon_model->all($this->id_cabang);
      $parsing['anggota']     = $this->anggota_model->where($id);

      $this->load->view('cabang/v_anggota_ubah', $parsing);
   }

   public function update($id)
   {
      // proses update
      $this->anggota_model->update($id);

      // alert jika berhasil
      $this->session->set_flashdata('alert_anggota', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Selamat !</strong> data anggota berhasil diperbarui.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      // redirect
      return redirect(site_url('cabang/anggota'));
   }

   public function delete($id)
   {
      $this->anggota_model->delete($id);
   }

   public function import()
   {
      $parsing['komisariats'] = $this->komisariat_model->all($this->id_cabang);
      $parsing['rayons']      = $this->rayon_model->all($this->id_cabang);
      $parsing['cabang']      = $this->cabang_model->where($this->id_cabang);

      $this->load->view('cabang/v_anggota_import', $parsing);
   }

   public function import_proses()
   {
      $config['upload_path'] = './asset/uploads/';
      $config['allowed_types'] = 'xlsx|xls';

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('file_import')) {
         // alert jika gagal
         $this->session->set_flashdata('alert_anggota', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Ooopss !</strong> import excel data anggota telah gagal.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      } else {
         //Mengambil detail data yang di upload
         $upload_data = $this->upload->data();

         //Nama File
         $filename = $upload_data['file_name'];

         // proses insert database
         $this->anggota_model->upload_data($filename);

         // hapus upload file excel
         unlink('./asset/uploads/' . $filename);

         // alert jika berhasil
         $this->session->set_flashdata('alert_anggota', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Selamat !</strong> import excel data anggota berhasil ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

         // redirect
         return redirect(site_url('cabang/anggota'));
      }
   }
}

/* End of file cabang/Anggota.php */
