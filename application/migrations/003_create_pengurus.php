<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_pengurus extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_pengurus' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'jabatan_pengurus' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'nama_pengurus' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'gambar_pengurus' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_key('id_pengurus', TRUE);
        $this->dbforge->create_table('pengurus');
    }

    public function down()
    {
        $this->dbforge->drop_table('pengurus');
    }
}