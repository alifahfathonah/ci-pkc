<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Seeder extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        // load model yang digunakan
        $this->load->model('cabang_model');
        $this->load->model('komisariat_model');
        $this->load->model('rayon_model');
        $this->load->model('informasi_model');
        $this->load->model('pengurus_model');
        $this->load->model('user_model');
    }

    public function index($data=null) {

        if ($data == 'cabang') {
            // insert data seeder ke dalam table cabang
            $this->db->insert('cabang', ['nama_cabang' => ucwords('bukan cabang')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('samarinda')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('balikpapan')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('kutai kartanegara')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('kutai timur')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('paser')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('tarakan')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('bulungan')]);
        }
        elseif ($data == 'komisariat') {
            // insert data seeder ke dalam table komisariat
            $this->db->insert('komisariat', ['nama_komisariat' => ucwords('belum ada komisariat')]);
        }
        elseif ($data == 'rayon') {
            // insert data seeder ke dalam table rayon
            $this->db->insert('rayon', ['nama_rayon' => ucwords('belum ada rayon')]);
        }
        elseif ($data == 'pengurus') {
            // 1)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Ketua PKC Kaltimra',
                'nama_pengurus'     => ucwords('panji sukma nugraha'),
                'gambar_pengurus'   => 'avatar5.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);
            
            // 2)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Sekretaris PKC Kaltimra',
                'nama_pengurus'     => ucwords('abdul khohar'),
                'gambar_pengurus'   => 'avatar065.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);
            
            // 3)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Ketua Kopri PKC Kaltimra',
                'nama_pengurus'     => ucwords('siti youmi rohmah'),
                'gambar_pengurus'   => 'avatar3.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);
            
            // 4)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Sekretaris Kopri PKC Kaltimra',
                'nama_pengurus'     => ucwords('Nima Fadriawati'),
                'gambar_pengurus'   => 'avatar2.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);
        }
        elseif ($data == 'user') {
            // 1)
            $data_user = array(
                'name_user'     => 'admin',
                'pass_user'     => md5('admin'),
                'cabang_id'     => 1,
                'level_user'    => 1,
            );
            $this->db->insert('user', $data_user);

            // 2)
            $data_user = array(
                'name_user'     => 'kaltim',
                'pass_user'     => md5('kaltim'),
                'cabang_id'     => 1,
                'level_user'    => 2,
            );
            $this->db->insert('user', $data_user);
        }
        elseif ($data == 'informasi') {
             $data_info = array(
                'alamat_informasi'      => ucwords('jalan rapak indah gang ramadhan'),
                'email_informasi'       => 'admin@mail.com',
                'telepon_informasi'     => '085246805241',
                'facebook_informasi'    => 'https://www.facebook.com/adminpkcpmii/',
                'instagram_informasi'   => 'https://www.instagram.com/adminpkcpmii/',
            );
            $this->db->insert('informasi', $data_info);
        }
        elseif ($data == null) {
            // insert data seeder ke dalam table cabang
            $this->db->insert('cabang', ['nama_cabang' => ucwords('bukan cabang')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('samarinda')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('balikpapan')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('kutai kartanegara')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('kutai timur')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('paser')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('tarakan')]);
            $this->db->insert('cabang', ['nama_cabang' => ucwords('bulungan')]);

            // insert data seeder ke dalam table komisariat
            $this->db->insert('komisariat', ['nama_komisariat' => ucwords('belum ada komisariat')]);
            
            // insert data seeder ke dalam table rayon
            $this->db->insert('rayon', ['nama_rayon' => ucwords('belum ada rayon')]);

            /**
             * insert data seeder ke dalam table pengurus
             * */
            // 1)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Ketua PKC Kaltimra',
                'nama_pengurus'     => ucwords('panji sukma nugraha'),
                'gambar_pengurus'   => 'avatar5.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);
            
            // 2)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Sekretaris PKC Kaltimra',
                'nama_pengurus'     => ucwords('abdul khohar'),
                'gambar_pengurus'   => 'avatar065.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);
            
            // 3)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Ketua Kopri PKC Kaltimra',
                'nama_pengurus'     => ucwords('siti youmi rohmah'),
                'gambar_pengurus'   => 'avatar3.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);
            
            // 4)
            $data_pengurus = array(
                'jabatan_pengurus'  => 'Sekretaris Kopri PKC Kaltimra',
                'nama_pengurus'     => ucwords('Nima Fadriawati'),
                'gambar_pengurus'   => 'avatar2.jpg',
            );
            $this->db->insert('pengurus', $data_pengurus);

            /**
             * insert data seeder ke dalam table user
             * */
            // 1)
            $data_user = array(
                'name_user'     => 'admin',
                'pass_user'     => md5('admin'),
                'cabang_id'     => 1,
                'level_user'    => 1,
            );
            $this->db->insert('user', $data_user);

            // 2)
            $data_user = array(
                'name_user'     => 'kaltim',
                'pass_user'     => md5('kaltim'),
                'cabang_id'     => 1,
                'level_user'    => 2,
            );
            $this->db->insert('user', $data_user);

            /**
             * insert data seeder ke dalam table user
             * */
            $data_info = array(
                'alamat_informasi'      => ucwords('jalan rapak indah gang ramadhan'),
                'email_informasi'       => 'admin@mail.com',
                'telepon_informasi'     => '085246805241',
                'facebook_informasi'    => 'https://www.facebook.com/adminpkcpmii/',
                'instagram_informasi'   => 'https://www.instagram.com/adminpkcpmii/',
            );
            $this->db->insert('informasi', $data_info);
        }

        /**
         * view untuk notif data berhasil di seeder
         */
        echo "seeder success";
        
    }
}