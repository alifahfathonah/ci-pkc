<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_model extends CI_Model
{

    // inisiasi variabel untuk digunakan didalam class
    private $_table     = "anggota";

    // function untuk mengambil seluruh data pada table database
    public function all($id_cabang)
    {
        $this->db->select('*')->from($this->_table)
            ->join('rayon', 'rayon.id_rayon=anggota.rayon_id')
            ->join('komisariat', 'komisariat.id_komisariat=anggota.komisariat_id')
            ->join('cabang', 'cabang.id_cabang=anggota.cabang_id');
        return $this->db->order_by('id_anggota', 'DESC')->where('anggota.cabang_id', $id_cabang)->get()->result();
    }

    // function untuk mengambil seluruh data anggota KOPRI pada table database 
    public function kopri($id_cabang)
    {
        $where = array(
            'anggota.cabang_id'     => $id_cabang,
            'anggota.jk_anggota'    => 'P'
        );

        $this->db->select('*')->from($this->_table)
            ->join('rayon', 'rayon.id_rayon=anggota.rayon_id')
            ->join('komisariat', 'komisariat.id_komisariat=anggota.komisariat_id')
            ->join('cabang', 'cabang.id_cabang=anggota.cabang_id');
        return $this->db->order_by('id_anggota', 'DESC')->where($where)->get()->result();
    }

    // function untuk mengambil seluruh data pada table database
    public function korcab_all()
    {
        $this->db->select('*')->from($this->_table)
            ->join('rayon', 'rayon.id_rayon=anggota.rayon_id')
            ->join('komisariat', 'komisariat.id_komisariat=anggota.komisariat_id')
            ->join('cabang', 'cabang.id_cabang=anggota.cabang_id');
        return $this->db->order_by('id_anggota', 'DESC')->get()->result();
    }

    public function korcab_where($where)
    {
        $this->db->select('*')->from($this->_table)
            ->join('rayon', 'rayon.id_rayon=anggota.rayon_id')
            ->join('komisariat', 'komisariat.id_komisariat=anggota.komisariat_id')
            ->join('cabang', 'cabang.id_cabang=anggota.cabang_id');
        return $this->db->order_by('id_anggota', 'DESC')->where('kaderisasi_anggota', $where)->get()->result();
    }

    public function korcab_kopri()
    {
        $this->db->select('*')->from($this->_table)
            ->join('rayon', 'rayon.id_rayon=anggota.rayon_id')
            ->join('komisariat', 'komisariat.id_komisariat=anggota.komisariat_id')
            ->join('cabang', 'cabang.id_cabang=anggota.cabang_id');
        return $this->db->order_by('id_anggota', 'DESC')->where('jk_anggota', 'P')->get()->result();
    }

    // funtion untuk pencarian data anggota pkc sesuai dengan ID
    public function korcab_id($id)
    {
        $this->db->select('*')->from($this->_table)
            ->join('rayon', 'rayon.id_rayon=anggota.rayon_id')
            ->join('komisariat', 'komisariat.id_komisariat=anggota.komisariat_id')
            ->join('cabang', 'cabang.id_cabang=anggota.cabang_id');
        return $this->db->where('id_anggota', $id)->get()->row();
    }

    public function where($id)
    {
        return $this->db->get_where($this->_table, array('id_anggota' => $id))->row();
    }

    public function store()
    {
        $data = array(
            'nama_anggota'      => ucwords($this->input->post('txt_nama')),
            'tempat_anggota'    => ucwords($this->input->post('txt_tempat')),
            'tgl_anggota'       => $this->input->post('txt_tgl'),
            'alamat_anggota'    => $this->input->post('txt_alamat'),
            'jk_anggota'        => $this->input->post('txt_jk'),
            'foto_anggota'      => $this->_uploadImage(),
            'email_anggota'     => $this->input->post('txt_email'),
            'telepon_anggota'   => $this->input->post('txt_telepon'),
            'kampus_anggota'    => ucwords($this->input->post('txt_kampus')),
            'prodi_anggota'     => ucwords($this->input->post('txt_prodi')),
            'rayon_id'          => $this->input->post('txt_rayon'),
            'komisariat_id'     => $this->input->post('txt_komisariat'),
            'cabang_id'         => $this->session->userdata('cabang_id'),
            'angkatan_mapaba'   => $this->input->post('txt_mapaba'),
            'kaderisasi_anggota' => $this->input->post('txt_kaderisasi'),
            'kaderisasi_kopri' => $this->input->post('txt_korpri'),
            'status_anggota'    => $this->input->post('txt_status'),
        );

        $this->db->insert($this->_table, $data);
    }

    public function update($id)
    {
        if (!empty($_FILES["img_anggota"]["name"])) {
            $data = $this->db->get_where($this->_table, array('id_anggota' => $id))->row();

            unlink("./asset/gambar/anggota/$data->foto_anggota");

            $data = array(
                'nama_anggota'      => ucwords($this->input->post('txt_nama')),
                'tempat_anggota'    => ucwords($this->input->post('txt_tempat')),
                'tgl_anggota'       => $this->input->post('txt_tgl'),
                'alamat_anggota'    => $this->input->post('txt_alamat'),
                'jk_anggota'        => $this->input->post('txt_jk'),
                'foto_anggota'      => $this->_uploadImage(),
                'email_anggota'     => $this->input->post('txt_email'),
                'telepon_anggota'   => $this->input->post('txt_telepon'),
                'kampus_anggota'    => ucwords($this->input->post('txt_kampus')),
                'prodi_anggota'     => ucwords($this->input->post('txt_prodi')),
                'rayon_id'          => $this->input->post('txt_rayon'),
                'komisariat_id'     => $this->input->post('txt_komisariat'),
                'cabang_id'         => $this->session->userdata('cabang_id'),
                'angkatan_mapaba'   => $this->input->post('txt_mapaba'),
                'kaderisasi_anggota' => $this->input->post('txt_kaderisasi'),
                'kaderisasi_kopri'  => $this->input->post('txt_korpri'),
                'status_anggota'    => $this->input->post('txt_status'),
            );
        } else {
            $data = array(
                'nama_anggota'      => ucwords($this->input->post('txt_nama')),
                'tempat_anggota'    => ucwords($this->input->post('txt_tempat')),
                'tgl_anggota'       => $this->input->post('txt_tgl'),
                'alamat_anggota'    => $this->input->post('txt_alamat'),
                'jk_anggota'        => $this->input->post('txt_jk'),
                'email_anggota'     => $this->input->post('txt_email'),
                'telepon_anggota'   => $this->input->post('txt_telepon'),
                'kampus_anggota'    => ucwords($this->input->post('txt_kampus')),
                'prodi_anggota'     => ucwords($this->input->post('txt_prodi')),
                'rayon_id'          => $this->input->post('txt_rayon'),
                'komisariat_id'     => $this->input->post('txt_komisariat'),
                'cabang_id'         => $this->session->userdata('cabang_id'),
                'angkatan_mapaba'   => $this->input->post('txt_mapaba'),
                'kaderisasi_anggota' => $this->input->post('txt_kaderisasi'),
                'kaderisasi_kopri'  => $this->input->post('txt_korpri'),
                'status_anggota'    => $this->input->post('txt_status'),
            );
        }

        $this->db->update($this->_table, $data, array('id_anggota' => $id));
    }

    public function delete($id)
    {
        $data = $this->db->get_where($this->_table, array('id_anggota' => $id))->row();

        unlink("./asset/gambar/anggota/$data->foto_anggota");

        return $this->db->delete($this->_table, array('id_anggota' => $id));
    }

    // fungsi membuat upload image yang hanya dapat diakses di class ini 
    private function _uploadImage()
    {
        $config['upload_path']          = './asset/gambar/anggota';
        $config['allowed_types']        = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img_anggota')) {

            return $this->upload->data("file_name");
        }
    }

    // fungsi untuk menghitung total jumlah komisariat sesuai dengan cabangnya
    public function count($id_cabang)
    {
        if ($id_cabang != 1) {
            return $this->db->where('cabang_id', $id_cabang)->get($this->_table)->num_rows();
        } else {
            return $this->db->get($this->_table)->num_rows();
        }
    }

    // fungsi untuk menghitung total mapaba anggota sesuai dengan cabangnya 
    public function total_mapaba($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'kaderisasi_anggota' => "MAPABA",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'kaderisasi_anggota' => "MAPABA",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    // fungsi untuk menghitung total pkd anggota sesuai dengan cabangnya cabangnya
    public function total_pkd($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'kaderisasi_anggota' => "PKD",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'kaderisasi_anggota' => "PKD",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    // fungsi untuk menghitung total pkl anggota sesuai dengan cabangnya cabangnya
    public function total_pkl($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'kaderisasi_anggota' => "PKL",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'kaderisasi_anggota' => "PKL",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    // fungsi untuk menghitung total pkn anggota sesuai dengan cabangnya cabangnya
    public function total_pkn($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'kaderisasi_anggota' => "PKN",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'kaderisasi_anggota' => "PKN",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    public function upload_data($filename)
    {
        ini_set('memory_limit', '-1');
        $inputFileName = './asset/uploads/' . $filename;
        try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file :' . $e->getMessage());
        }

        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        $numRows = count($worksheet);

        for ($i = 2; $i < ($numRows + 1); $i++) {
            $ins = array(
                "nama_anggota"          => ucwords($worksheet[$i]["A"]),
                "tempat_anggota"        => ucwords($worksheet[$i]["B"]),
                "tgl_anggota"           => $worksheet[$i]["C"],
                "alamat_anggota"        => $worksheet[$i]["D"],
                "jk_anggota"            => $worksheet[$i]["E"],
                "foto_anggota"          => $worksheet[$i]["F"],
                "email_anggota"         => $worksheet[$i]["G"],
                "telepon_anggota"       => $worksheet[$i]["H"],
                "kampus_anggota"        => ucwords($worksheet[$i]["I"]),
                "prodi_anggota"         => ucwords($worksheet[$i]["J"]),
                "rayon_id"              => $worksheet[$i]["K"],
                "komisariat_id"         => $worksheet[$i]["L"],
                "cabang_id"             => $worksheet[$i]["M"],
                "angkatan_mapaba"       => $worksheet[$i]["N"],
                "kaderisasi_anggota"    => strtoupper($worksheet[$i]["O"]),
                "kaderisasi_kopri"      => strtoupper($worksheet[$i]["P"]),
                "status_anggota"        => ucwords($worksheet[$i]["Q"])
            );

            $this->db->insert($this->_table, $ins);
        }
    }

    // fungsi untuk menghitung total anggota SIG sesuai dengan cabangnya 
    public function total_kopri($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'jk_anggota' => "P",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'jk_anggota' => "P",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    public function total_kopri_biasa($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "TIDAK ADA",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "TIDAK ADA",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    // fungsi untuk menghitung total anggota SIG sesuai dengan cabangnya 
    public function total_sig($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "SIG",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "SIG",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    // fungsi untuk menghitung total anggota SKK sesuai dengan cabangnya 
    public function total_skk($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "SKK",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "SKK",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }

    // fungsi untuk menghitung total anggota SKKN sesuai dengan cabangnya 
    public function total_skkn($id_cabang)
    {
        if ($id_cabang != 1) {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "SKKN",
                'cabang_id' => $id_cabang
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        } else {
            $where = array(
                'jk_anggota' => "P",
                'kaderisasi_kopri' => "SKKN",
            );

            return $this->db->where($where)->get($this->_table)->num_rows();
        }
    }
}
