<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_anggota extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                    'id_anggota' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'nama_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'tempat_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'tgl_anggota' => array(
                        'type' => 'DATE',
                    ),
                    'alamat_anggota' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                    'jk_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '5',
                    ),
                    'foto_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'email_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'unique' => TRUE,
                        'constraint' => '255',
                    ),
                    'telepon_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '15',
                    ),
                    'kampus_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'prodi_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'rayon_id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                    ),
                    'komisariat_id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                    ),
                    'cabang_id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                    ),
                    'angkatan_mapaba' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                    ),
                    'kaderisasi_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '50',
                    ),
                    'kaderisasi_korpri' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '50',
                    ),
                    'status_anggota' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '50',
                    ),
                ));
                $this->dbforge->add_key('id_anggota', TRUE);
                $this->dbforge->create_table('anggota');
        }

        public function down()
        {
                $this->dbforge->drop_table('anggota');
        }
}