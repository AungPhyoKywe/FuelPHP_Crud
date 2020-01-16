<?php

namespace Fuel\Migrations;

class add_column
{
    public function up()
    {
        \DBUtil::add_fields('person', array(

            'image' => array('constraint' => 200, 'type' => 'varchar'),
        ));

    }

    public function down()
    {
        \DBUtil::drop_fields('person', 'image');

    }
}
