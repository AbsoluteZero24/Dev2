<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'mysql',
	'username' => 'root',
	'password' => 'secret',
	'database' => 'db_follow_up',
	'dbdriver' => 'mysql',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'autoinit' => TRUE,
	'stricton' => FALSE,
	'failover' => array()
);


/* End of file database.php */
/* Location: ./application/config/database.php */
