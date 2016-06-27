<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

include("../vendor/autoload.php");
define('APPROOT', '../App/');

error_reporting(1);

$error_reporting       = E_ALL;
//$error_reporting       = E_ALL ^ E_NOTICE;
//错误提示
ini_set('error_reporting', $error_reporting);
//or

//时区
ini_set('date.timezone','Asia/Shanghai');
\App\Bootstrap::Run();
