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


$_SESSION["error"]= 0;

echo'<!-- so .. what now ? -->';
echo $_SESSION["username"];
if(!isset($_SESSION["username"])){
echo '<center><div style="width:300"><blockquote> <p> this is how a CAPTCHA works ? did you not know ?</p> <b> -sharky </b> </blockquote> </div> </center>';

echo '<center> <a href="./index.php"> I SHOULD NOT SPAM </a> </center>';
}
else
{
	echo '<center> <a href="./index.php"> GO BACK </a> </center>';
}
?>
