<?php
class Model_Person extends Orm\Model
{
    protected static $_properties = array(
        'id',
        'name' => array(
            'data_type' => 'varchar',
            'label' => 'Person Name',
            'validation' => array('required'),
        ),
        'age' => array(
            'data_type' => 'int',
            'label' => 'Person Age',
            'validation' => array('required'),
        ),
        'gender' => array(
            'data_type' => 'varchar',
            'label' => 'Person Gender',
            'validation' => array('required'),
        ),
        'image' => array(
            'data_type' => 'varchar',
            'label' => 'Person Image',
            'validation' => array('required'),
        ),
        'created_at',
        'updated_at'
    );

    protected static $_observers = array(
        'Orm\\Observer_Validation' => array(
            'events' => array('before_save')
        ),
        'Orm\\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => true,
        ),
        'Orm\\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => true,
        ),
    );

    protected static $_table_name = 'person';
}
