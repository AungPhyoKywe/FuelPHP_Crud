<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

return array(
	/**
	 * -------------------------------------------------------------------------
	 *  Default route
	 * -------------------------------------------------------------------------
	 *
	 */

	'_root_' => 'welcome/index',

	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */

	'_404_' => 'welcome/404',

	/**
	 * -------------------------------------------------------------------------
	 *  Example for Presenter
	 * -------------------------------------------------------------------------
	 *
	 *  A route for showing page using Presenter
	 *
	 */

	//'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),

    'add' => array('welcome/add', 'name' => 'add'),
    'delete/(:id)' => 'welcome/delete/$1',
    'edit/(:id)' => 'welcome/edit/$1',
    'update/(:id)' => 'welcome/update/$1',
    'login'=>'login/index',
    'logout'=>'login/logout',
    'register'=>'register/index'
);
