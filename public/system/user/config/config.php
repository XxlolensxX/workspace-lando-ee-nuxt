<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '6.0.3';
$config['encryption_key'] = '3dea667032ebb8b87d345bc86e8fe93e9df553de';
$config['session_crypt_key'] = 'a591a2a24dc9b101531434d416e84813a06deb9a';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'database',
		'database' => 'custompls',
		'username' => 'custompls',
		'password' => 'custompls',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'y';
$config['allow_php'] = 'y';

// EOF