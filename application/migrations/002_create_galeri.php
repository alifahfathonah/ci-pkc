<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_galeri extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_galeri' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'nama_galeri' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'gambar_galeri' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_key('id_galeri', TRUE);
        $this->dbforge->create_table('galeri');
    }

    public function down()
    {
        $this->dbforge->drop_table('galeri');
    }
}