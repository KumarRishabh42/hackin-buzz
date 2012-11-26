<?php

session_start();
require_once('config.php');

//incrementLevel($_SESSION['username'], 0);

//print_r($_SESSION);

$LVL_SOLVED = getCurrentLevel($_SESSION['username']);

if($_SERVER['REMOTE_ADDR'] == "10.1.1236.68" || $_SERVER['REMOTE_ADDR'] == "10.1.39.57" || $_SERVER['REMOTE_ADDR'] == "10.1.35.140" || $_SERVER['REMOTE_ADDR'] == "10.1.39.1126"){
	echo "<h3>Brute force attempts were detected from your IP. Please play fairly.</h3>";
}

if($CUR_LVL > $LVL_SOLVED){
	die('You are not authorized to access this page');
}

?>
