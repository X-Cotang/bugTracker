<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	include "config/Config.php";
	include "config/Model.php";
	include "config/Controller.php";
	$session=true;
	try{
		$controller = (isset($_GET["controller"])&&preg_match('/[^a-zA-Z0-9\/\-]/', $_GET["controller"])==0)?"app/controllers/".$_GET["controller"].".php":"app/controllers/home.php";
	}catch(Exception $e) {
		//header("location: index.php");
		exit("No");
	}
	include "layout/client.php";

//echo "test";
?>
