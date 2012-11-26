<?
include "config.php";
require_once('track.php');

$ip = $_SERVER['REMOTE_ADDR'];

if($ip == "10.3.5.63" || $ip == "10.1.36.108") // mohanty removed
{
	die("Unauthorized");
}

session_start();


$_SESSION["error"]= 0;


// Report all PHP errors (see changelog)
#error_reporting(E_ALL);

$username = mysql_real_escape_string($_POST["username"]);
$pass = $_POST["password"];
#echo "yaha aaya";
if( isset($_POST["register"])) {
#		echo "reahed here ";
	$email=mysql_real_escape_string($_POST["email"]);
	$repass = $_POST["repassword"];
		
	$zip_pattern = "/[^-a-zA-Z0-9_]/";
	preg_match($zip_pattern,$username,$regs);
	$str_length = strlen($regs[0]);
	
	if($username && $pass && $email && $repass && $str_length==0 ){
#		echo "            yaaha aa gaya";
		if($repass==$pass){
			$encpass = md5(mysql_real_escape_string(($pass)));
			$query = mysql_query("SELECT * FROM register WHERE nickname='$username' AND password='$encpass'");
			if(mysql_num_rows($query)>0)
			{	
				$_SESSION["error"] = 1;
				header('Location:./registrationnew.php');


			}
			else{
				$initvalue=0;
#				echo "yaha bhi aaya";
				//mysql_query("INSERT INTO register (nickname,email_id,password) VALUES ('$username','$email','$encpass') ");
				//mysql_query("INSERT INTO userdata (level,nick_nm) VALUES ('$initvalue','$username')");
				$_SESSION["error"]=-1;
				header("Location: ./index.php");
			}
		}
		else{
			$_SESSION["error"] = 2;
			header('Location: ./registrationnew.php');

		}
	}
	else {
		$_SESSION["error"] = 3;
		header('Location:./registrationnew.php');

	}
}
if( isset($_POST["login"])) //checking whether came from student_login_form.php or directly
{
	if($username && $pass) //both fields are compulsory
	{
		$encpass = md5(mysql_real_escape_string(($pass)));
		$query = mysql_query("SELECT * FROM register WHERE nickname='$username' AND password='$encpass'");
		if(mysql_num_rows($query) == 0 ) // if there is no username or password exists
		{
			$_SESSION["log_error"] = 2;
			header('Location:./registration.php');
		}
		else
		{
			$_SESSION["permit"]=2;
#
			$_SESSION["username"]=$username;
			header("Location:./index.php");
#	echo "DoNe";
		}
	}
	else
	{
		$_SESSION["log_error"] = 1;
		header('Location:./registration.php');
	}
}
else //if came directly
{
	header('Location:./registration.php');
}





?>
