<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_subscribe extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                    'id_subscribe' => array(
                        'type' => 'INT',
                        'constraint' => 11,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                    ),
                    'email_subscribe' => array(
                        'type' => 'VARCHAR',
                        'null' => TRUE,
                        'unique' => TRUE,
                        'constraint' => '255',
                    ),
                ));

                $this->dbforge->add_key('id_subscribe', TRUE);
                $this->dbforge->create_table('subscribe');
        }

        public function down()
        {
                $this->dbforge->drop_table('subscribe');
        }
}