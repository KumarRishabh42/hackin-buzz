<?

	session_start();



  echo "you have successfully logged out thanks for playing";
  session_destroy();
 

# unset($_SESSION["username"]);
  $_SESSION = array();

  header('Location:./index.php');















?>
