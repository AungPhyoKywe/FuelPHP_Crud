<?php

namespace Fuel\Migrations;

class create_users
{
    public function up()
    {
        \DBUtil::create_table('users', array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
            'email' => array('constraint' => 100, 'type' => 'varchar'),
            'password' => array('constraint' => 100, 'type' => 'varchar'),
            'created_at' => array('type' => 'timestamp', 'default' => \DB::expr('CURRENT_TIMESTAMP')),
            'updated_at' => array('type' => 'timestamp', 'default' => \DB::expr('CURRENT_TIMESTAMP')),

        ), array('id'), false, 'InnoDB', 'utf8_unicode_ci');

    }

    public function down()
    {
        \DBUtil::drop_table('users');
    }
}
