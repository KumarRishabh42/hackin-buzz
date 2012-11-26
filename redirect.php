<?php

require_once('include.php');
require_once('config.php');
session_start();

if(isset($_SESSION['username'])){

	$LVL_SOLVED = getCurrentLevel($_SESSION['username']);
	//$levels = array('page1.php', 'page2.php');
	//print_r($levels);
	$NXT_LVL = $LVL_SOLVED + 1;
	echo $NXT_LVL;
	header("Location: page{$NXT_LVL}.php");

}
else{
	die('You must be logged in');
}
