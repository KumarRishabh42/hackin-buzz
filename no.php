<?php
require_once('config.php');
session_start();
//print_r($_SESSION);
if(isset($_SESSION['level']) && isset($_SESSION['username'])){
	if($_SESSION['level']==12){
		incrementLevel($_SESSION['username'], 13);
		echo 'Yes. I mean, no. This is not the end. <br />Hack In is not over<br />Hack In will live on....<br />Congratulations!<br />Hope you had fun!';
		die();//die('A bit of confidence goes a long way. Congratulations!');
	}
}
else{
	die('Page does not existies');
}
?>
