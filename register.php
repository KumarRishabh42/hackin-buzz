<?
  include "config.php";
   session_start();

 if(isset($_SESSION["username"])){
		echo "hello"," ",$_SESSION["username"];
		header("Location:./hackin.php");



 }
  if(!isset($_SESSION["log_error"]))
  $_SESSION["log_error"]=0;
  if($_SESSION["log_error"]==1)//if any field is submitted empty
{
		echo "BOTH FIELDS ARE REQUIRED";
}
else if($_SESSION["log_error"] == 2)//if username and password do not match with stored 
{
		echo "INCORRECT USERNAME OR PASSWORD ";
}
else if($_SESSION["log_error"] == 4)//want to access other pages before loged in
{
		echo "YOU MUST BE LOGGED IN TO CONTINUE..";
}
unset($_SESSION["log_error"]);

?>
  










<form method="post" action="login_check.php" >
<p class="txtleft"><label for="user">User Name:</label></p>

<input type="text" name="username" id="user" class="text" /><br />

<p class="txtleft"><label for="password">Password:</label></p>

<input type="password" name="password" id="password" class="password" /><br />
<br/>
<input type="submit" name="login" id="submit" class="submit" value="Login" />

<p><a href="registeractual.php">Register!</a></p>

</form>



