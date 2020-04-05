<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_alumni extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                    'id_alumni' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'nama_alumni' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '255',
                    ),
                    'telepon_alumni' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'constraint' => '15',
                    ),
                    'asal_alumni' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    ),
                    'cabang_id' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                    ),
                ));
                $this->dbforge->add_key('id_alumni', TRUE);
                $this->dbforge->create_table('alumni');
        }

        public function down()
        {
                $this->dbforge->drop_table('alumni');
        }
}