<?php

/* Config file!

*/ 

error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0); // Do not buffer outputs, write directly

/* 

Define triton paths
*/
define('TRITON_INSTALL_PATH', __DIR__ . '/..');
define('TRITON_THEME_PATH', TRITON_INSTALL_PATH . '/theme/render.php');

/*
include bootstrapping funtions.
*/
include(TRITON_INSTALL_PATH . '/src/bootstrap.php');

/* 

Start the session */

session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

/* 

Create the triton variable. 
*/ 

$triton = array();

/*

Site wide settings. 
*/
$triton['lang']			= 'sv';
$triton['title_append'] = ' | Triton';

/* 
* Settings for the database 
*/

$triton['database']['dsn']            = 'mysql:host=localhost;dbname=maof14;';
$triton['database']['username']       = 'root'; // maof14
$triton['database']['password']       = ''; // 
$triton['database']['driver_options'] = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

/* Theme related settings

*/

$triton['stylesheet'] = 'css/style.css';
$triton['favicon'] = 'favicon.ico';

$triton['header'] = <<<EOD
<div class='container'>
<span class='sitetitle'>Triton</span>
<span class='siteslogan'>Web template</span>
</div>
EOD;

$menu = array(
	'home' => array('text' => 'Hem', 'url' => 'home.php'),
);

$triton['navmenu'] = CNavigation::GenerateMenu($menu, 'navmenu');

$triton['footer'] = <<<EOD
<footer>
<span class='sitefooter'>Copyright &copy; Mattias Olsson 2014</span>
</footer>
EOD;
