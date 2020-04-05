<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_informasi extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                    'id_informasi' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'alamat_informasi' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                    'email_informasi' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'telepon_informasi' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '15',
                    ),
                    'facebook_informasi' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                    ),
                    'instagram_informasi' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => 255,
                        'unsigned' => TRUE
                    ),
                ));
                $this->dbforge->add_key('id_informasi', TRUE);
                $this->dbforge->create_table('informasi');
        }

        public function down()
        {
                $this->dbforge->drop_table('informasi');
        }
}