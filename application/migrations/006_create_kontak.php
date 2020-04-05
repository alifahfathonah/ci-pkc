<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_kontak extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                    'id_kontak' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'nama_kontak' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'email_kontak' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'unique' => TRUE,
                        'constraint' => '255',
                    ),
                    'pesan_kontak' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                    'balas_kontak' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                ));
                $this->dbforge->add_key('id_kontak', TRUE);
                $this->dbforge->create_table('kontak');
        }

        public function down()
        {
                $this->dbforge->drop_table('kontak');
        }
}