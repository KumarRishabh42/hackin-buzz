<?php
  $CUR_LVL = 9;
  require_once('include.php');
  require_once('user_tracking_khoofiya.php');
  $user_agent='BUZZBrowser_V1.9';
  if ($_SERVER['HTTP_USER_AGENT'] == $user_agent){
	  incrementLevel($_SESSION['username'], $CUR_LVL + 1);
	  header("Location: redirect.php"); 

  }
?>	
<html>
<head><title>Felicity Buzz'12/Hackin</title></head>
<body>
<center><img src='images/firefox_ie7.jpg'>
<h2><font color="Red">Download page</font>
<Center>
<br>
<br>
<?php
if(isset($_POST['code1'])){
	echo "<h3><font color=\"red\">Invalid key. Please refrain from using pirated keys.</font></h3>";
}
if(isset($_GET['upgrade'])){
	echo "<h3><font color=\"red\">Your browser is not supported. Please get BUZZBrowser_V1.9</font></h3>";
}

?>
To Download our Browser (<i>BUZZBrowser2</i>):<br>
<form name="login" method="post" action="page10.php">
Enter the serial number: <br>
<input name="code1" maxlength="4" size="4"> - <input name="code2" maxlength="4" size="4"> - <input name="code3" maxlength="4" size="4"><br>
<input type=submit Name="btnSubmit" Value="Download now!" ><br>
<br>
<br>
If you want the serial number for BUZZBrowser2 please dial:<br>
1860-200-1860 (toll free)
<br><br>
If you have <i>BUZZBrowser_V1.9<b></b></i> , you can: <br>
<a href="?upgrade=true"><img src="images/upgrade_button.gif" border=0></a>
</body>
</html>
