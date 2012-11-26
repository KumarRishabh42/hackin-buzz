
<link rel="stylesheet" type="text/css" href="reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<?
include "config.php";
require_once('track.php');

$ip = $_SERVER['REMOTE_ADDR'];

if($ip == "10.1.36.68" || $ip == "10.1.36.108" || $ip == "10.3.5.63")
{
	die("Unauthorized");
}

session_start();



if($_SESSION["error"]==1){
echo '<center><div style="width:500;color:#000000;"> <b>THIS USERNAME HAS ALREADY BEEN TAKEN.. try again! or you have not entered the details properly</b></div> </center>';
echo '<center> <a href="./registrationnew.php"> BACK </a> </center>';
}
else
{
	header("Location:registrationnew.php");
}

?>
