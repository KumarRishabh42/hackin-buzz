<html>
<head><title>Captcha Verification</title></head>
<body>
<?php

session_start();

require_once('db.php');
require_once('recaptchaproxy.php');


if((trim($_SESSION['message'])=='') || trim($_SESSION['name'])=='' || trim($_SESSION['email'])==''){
header("Location: index.php");
	}

/*$publickey = "6Lej6tYSAAAAAARUuHxA-1mF14UqjRdUN0bE2DZ_" ;

$captcha = False;
$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$message = mysql_real_escape_string($_POST['message']);

if(!$captcha){
  echo "Captcha";
  echo recaptcha_get_html($publickey);
  $captcha=True;
}
else{
  $privatekey = "6Lej6tYSAAAAACGTAxhwgwV7SbQQtjgeRVXH2jQu";
  $resp = recaptcha_check_answer ($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);
  if(!$resp->is_valid){
    $captcha = False;

 */

  

//echo $name.'\n'.$email.'\n'.$message.'\n';

  //echo "INSERT INTO feedback values('{$name}', '{$email}', '{$message}')";// or die('Could not insert');
  //mysql_query("INSERT INTO feedback values('{$name}', '{$email}', '{$message}')") or die('Could not insert');
  //mysql_query("INSERT INTO shirts values('{$name}', '{$email}', '{$size}', '{$number}')") or die('Could not insert');

  //header("Location: index.php");
  if(isset($_POST["recaptcha_response_field"])){
    //Captcha has been submitted
    require_once('recaptchaproxy.php');
    $privatekey = "6Lej6tYSAAAAACGTAxhwgwV7SbQQtjgeRVXH2jQu";
    $resp = recaptcha_check_answer($privatekey,
      $_SERVER["REMOTE_ADDR"],
      $_POST["recaptcha_challenge_field"],
      $_POST["recaptcha_response_field"]);
	unset($_POST["recaptcha_challenge_field"]);
	unset($_POST["recaptcha_response_field"]);
    if(!$resp->is_valid){
      echo "Invalid captcha";
	header("Location: new.php?msg=Incorrect Captcha");
    }
    else{
      echo "Valid captcha";
	session_destroy();
	mysql_query("INSERT INTO feedback values('{$_SESSION['name']}', '{$_SESSION['email']}', '{$_SESSION['message']}')") or die('Could not insert');
	header("Location: index.php");
    }

  }
  else{
    //Display captcha
?>
<font color="red" size="4">
<?php 
if(isset($_GET['msg'])){
echo mysql_real_escape_string($_GET['msg']);
}

?></font>
<form method="post" action="new.php">
        <?php
          require_once('recaptchaproxy.php');
          $publickey = "6Lej6tYSAAAAAARUuHxA-1mF14UqjRdUN0bE2DZ_"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
        <input type="submit" value="submit"/>
</form>


<?php
  }

?>
</body>
</html>
