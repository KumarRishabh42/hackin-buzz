<?
include "config.php";
require_once('track.php');

$ip = $_SERVER['REMOTE_ADDR'];

if($ip == "10.1.36.108" || $ip == "10.3.5.63")
{
	die("Unauthorized");
}

session_start();


$_SESSION["error"]= 0;


// Report all PHP errors (see changelog)
#error_reporting(E_ALL);

$username = mysql_real_escape_string($_POST["username"]);
$pass = $_POST["password"];
$capt = $_POST['captcha_code'];
#echo $_POST["register"];
#echo $capt;
#echo "yaha aaya";
if(isset($_POST["register"])) {
#		echo "reahed here ";
	$email=mysql_real_escape_string($_POST["email"]);
	$repass = $_POST["repassword"];

	$zip_pattern = "/[^-a-zA-Z0-9_]/";
	preg_match($zip_pattern,$username,$regs);
	$str_length = strlen($regs[0]);

	if($username && $pass && $email && $repass && $str_length==0 ){
#	echo "            yaaha aa gaya";
		include_once './mycpt/chuchu/securimage.php';
		$securimage = new Securimage();
		if ($securimage->check($_POST['captcha_code']) == false) {
#			echo "reached";
			session_unset();
			session_destroy();
			header("Location:./lol.php");
		}
		else{
		if($repass==$pass){
			$encpass = md5(mysql_real_escape_string(($pass)));
			$query = mysql_query("SELECT * FROM register WHERE nickname='$username'");
			if(mysql_num_rows($query)>0)
			{	
				$_SESSION["error"] = 1;
				header('Location:./userexists.php');
			}
			else{
				$initvalue=0;
#				echo "yaha bhi aaya";
				//mysql_query("INSERT INTO register (nickname,email_id,password) VALUES ('$username','$email','$encpass') ");
				//mysql_query("INSERT INTO userdata (level,nick_nm) VALUES ('$initvalue','$username')");
				$_SESSION["error"]=-10000;
#				echo $_POST['captcha_code'];
#				echo "entered";
				header("Location: ./registration.php");
			}
			}
		}	
	}
	else
	{	
		$_SESSION["error"]=1;
		header("Location:./userexists.php");
	}
}
else //if came directly
{
header('Location:./registration.php');
}



?>
