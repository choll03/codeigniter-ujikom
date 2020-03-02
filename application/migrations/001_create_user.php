<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_user extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 1,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'nama' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'username' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'password' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user');
    }

    public function down()
    {
        $this->dbforge->drop_table('blog');
    }
}