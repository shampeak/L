<?php
ini_set('display_errors','Off');
//error_reporting(E_ALL ^ E_NOTICE);
define('APPROOT', '../App/');

include("../vendor/autoload.php");


//时区
ini_set('date.timezone','Asia/Shanghai');

$_GET['z'] = 'w/index';
\App\Bootstrap::Run();
