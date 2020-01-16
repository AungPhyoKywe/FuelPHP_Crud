<?php

namespace Fuel\Migrations;

class create_person
{
    public function up()
    {
        \DBUtil::create_table('person', array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
            'name' => array('constraint' => 100, 'type' => 'varchar'),
            'age' =>array('constraint' => 100, 'type' => 'varchar'),
            'gender'=>array('constraint' => 100, 'type' => 'varchar'),
            'image'=>array('constraint' => 100, 'type' => 'varchar'),
            'created_at' => array('type' => 'timestamp', 'default' => \DB::expr('CURRENT_TIMESTAMP')),
            'updated_at' => array('type' => 'timestamp', 'default' => \DB::expr('CURRENT_TIMESTAMP')),

        ), array('id'), false, 'InnoDB', 'utf8_unicode_ci');

    }

    public function down()
    {
        \DBUtil::drop_table('person');
    }
}
