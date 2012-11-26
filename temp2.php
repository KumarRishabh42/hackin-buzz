<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<?php
require_once('track.php');
$ip = $_SERVER['REMOTE_ADDR'];

if($ip == "10.1.36.68" || $ip == "10.1.40.110"){
	        die("Unauthorized");
}

?>

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content=""/>
<meta name="keywords" content="" />
<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="ie_fixes.css" media="screen" /><![endif]-->

<title>Website Template: Grunge Superstar (demo)</title>
</head>
<?$date = date(“format”, $timestamp);?>
<body>
<?

include "config.php";
    
session_start();


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

   
 <?   #if(isset($_SESSION["username"])){
      #             echo "hello"," ",$_SESSION["username"];
     #              header("Location:./hackin.php");
   
   ?>
  
   <div id="paper_left">
<div id="paper_right">
<div id="layout_wrapper">
<div id="layout_container">
<div id="layout_content">

	<div id="site_title">
		<h1><a href="#">Hackin@BUZZ</a></h1>
		<h2>Enter At Your Own Risk</h2>
	</div>

	<div id="header_image"></div>

	<div class="navigation">

		<ul>
			<li class="current_page_item">
			<a href="index.php">Home Page</a></li>

			<li><a href="registration.php">Register/Login</a></li>
			<li><a href="list.php">RaNk LiSt</a></li>
						<li><a href="rules.php">RULES</a></li>
			<li><a href="about.php">AboutUs</a></li>			
		</ul>

		<div class="clearer">&nbsp;</div>

	</div>

<!-- Note: Uncomment this section to display subnavigation

	<div class="clearer">&nbsp;</div>

	<div class="navigation" id="subnav">

		<ul>
			<li><a href="#">Subnav item 1</a></li>
			<li><a href="#">Subnav item 2</a></li>
			<li><a href="#">Subnav item 3</a></li>
		</ul>

		<div class="clearer">&nbsp;</div>

	</div>
-->

	<div id="main">
		
		<div class="post">

			<div class="post_top">
				<div class="post_title"><h2>
			<?		if(isset($_SESSION["username"])){
					echo "Welcome Comrade" ;
					echo " ",$_SESSION["username"];
					#	header("Location:./hackin.php");
   

			}
			else{
				echo "Welcome Guest   ";
				echo "<br/>";
				echo "Click on Registration";


			}
				?></h2></div>
				<? $t=time(); ?>
				<div class="post_date"><?echo"Server Date:Time is " ;  echo date('d/m/Y - H:ia');                 ?></div>
			</div>

			<div class="post_body">

			<p>Register Here</p>



			<script type="text/javascript">
			function vForm(xyz){
				if(confirm("Are you sure you want to keep the username: "+xyz)){
					return true;
				}
				else
					return false;
			}
			</script>



			<form method="post" action="login_check_new.php" onsubmit="return vForm(username.value)">

			<p class="txtleft"><label for="user">User Name:</label></p>

			<input type="text" name="username" id="user" class="text" /><br />

			<p class="txtleft"><label for="email">Email:</label></p>

			<input type="text" name="email" id="email" class="email" /><br />




			<p class="txtleft"><label for="password">Password:</label></p>

			<input type="password" name="password" id="password" class="password" /><br />



			<p class="txtleft"><label for="repassword">Retype Password:</label></p>

			<input type="password" name="repassword" id="repassword" class="password" /><br />





			<br/>
			<input type="submit" name="register" id="register" class="submit" value="Register" />
			</form>

			

			<blockquote>

			<p>And as a great philosopher once said time spent waiting for great things is time well spent</p>



			</blockquote>




			</div>

			<!--<div class="post_metadata">
				<div class="content">
					<span class="comment"><a href="#">2 Comments</a></span>
				</div>
			</div>--!>

		</div>

	<div id="footer">

		<div class="left">&copy; 2012 Team Hackin all rights reserved</div>

		<div class="right"><a href="http://felicity.iiit.ac.in/~buzz/">TO felicity buzz</div>

		<div class="clearer">&nbsp;</div>

	</div>

</div>
</div>
</div>
</div>
</div>
<!-- hellboy2k8 \crash and burn/ -->
</body>
</html>
