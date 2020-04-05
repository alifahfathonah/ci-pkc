<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_artikel extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                    'id_artikel' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'nama_artikel' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                    ),
                    'slug_artikel' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                    ),
                    'gambar_artikel' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                    ),
                    'isi_artikel' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                    'hits_artikel' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE
                    ),
                ));
                $this->dbforge->add_key('id_artikel', TRUE);
                $this->dbforge->create_table('artikel');
        }

        public function down()
        {
                $this->dbforge->drop_table('artikel');
        }
}