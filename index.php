<?php 

require 'vendor/autoload.php';
$smarty = new Smarty();

$debug = 0; //tukar jadi 1 kalau nk tgk error

//error display setting
if($debug == 1)
{
	ini_set(display_errors,$debug);
	error_reporting(E_ALL ^ E_NOTICE);	
}
else
{
	// ini_set(display_errors,$debug);
	error_reporting($debug);
}

$module = $_GET['module'];

//set default module
if(!isset($module) || $module == "")
{
	$module = "home";
}

// echo $module;

$header = new Smarty;
$header = $header->fetch("tpl_header.php");

$body = new Smarty;

$body->assign("header", $header);	

//get template file
if(file_exists("modules/$module.php"))
{
	require_once("modules/$module.php");

	$body = $body->fetch("tpl_{$module}.php");
}
else{	
	$body = $body->fetch("tpl_{$module}.php");
}


$smarty->assign("body", $body);	
$smarty->display("tpl_mainlayout.php");
