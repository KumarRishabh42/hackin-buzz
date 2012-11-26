<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<?php

$ip = $_SERVER['REMOTE_ADDR'];

echo $ip;

if($ip == "10.1.40.110"){
	die("Unauthorized user");
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
		<h1><a href="#">Hackin @ BUZZ</a></h1>
		<h2>Enter At Your Own Risk</h2>
	</div>

	<div id="header_image"></div>

	<div class="navigation">

		<ul>
			<li>
			<a href="index.php">Home Page</a></li>

			<li class="current_page_item"><a href="registration.php">Register/Login</a></li>
			<li><a href="list.php">Rank List</a></li>
			<li><a href="/buzz/forums">Forums</a></li>
			<li><a href="rules.php">Rules</a></li>
			<li><a href="about.php">About Us</a></li>			
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
<? 
		if($_SESSION["error"]==-10000)
			{
				echo '<p> Registration Successful, Login to Continue </p>'; 
			} 
?>
			<p>Login Here</p>



			<form method="post" action="login_check.php" >
			<p class="txtleft"><label for="user">User Name:</label></p>

			<input type="text" name="username" id="user" class="text" /><br />

			<p class="txtleft"><label for="password">Password:</label></p>

			<input type="password" name="password" id="password" class="password" /><br />
			<br/>
			<input type="submit" name="login" id="submit" class="submit" value="Login" />

			<p><a href="registrationnew.php">Register Now!</a></p>

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

	<!--	<div class="post">

			<div class="post_top">
				<div class="post_title"><h2><a href="#">Adipiscing</a></h2></div>
				<div class="post_date">Jun 11, 2006 by Laoreet</div>
			</div>

			<div class="post_body">

				<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi.</p>

				<ul>
					<li>Tristique</li>

					<li>Aenean</li>
					<li>Pretium</li>
				</ul>

				<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, nunc eget pretium porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est.</p>

			</div>

			<div class="post_metadata">
				<div class="content">
					<span class="comment"><a href="#">11 Comments</a></span>
				</div>
			</div>

		</div>

		<div class="post">

			<div class="post_top">

				<div class="post_title"><h2><a href="#">Interdum</a></h2></div>
				<div class="post_date">May 24, 2006 by Lectus</div>

			</div>

			<div class="post_body">

				<p>Praesent nisi sem, bibendum in, ultrices sit amet, euismod sit amet, dui. Donec varius tincidunt nisi. Ut ut sapien. Integer porta. Fusce nibh. Curabitur pellentesque, lectus at <a href="index.html">volutpat interdum</a></p>
				
				<h3>Sem justo</h3>
				
				<p>Placerat elit, eget feugiat est leo tempor quam. Ut quis neque convallis magna consequat molestie. Nullam semper massa eget ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque a nibh quis nunc volutpat aliquam</p>

				<code>
					margin-bottom: 12px;<br/>
					font: normal 1.1em "Lucida Sans Unicode",serif;<br/>
					background: url(img/quote.gif) no-repeat;<br/>
					padding-left: 28px;<br/>
					color: #555;<br/>
				</code>

				<p>Eget feugiat est leo tempor quam. Ut quis neque convallis magna consequat molestie.</p>

			</div>
--!>
<!--			<div class="post_metadata">
				<div class="content">
					<span class="comment"><a href="#">6 Comments</a></span>
				</div>
			</div>

		</div>--!>

<!--	</div>

	<div id="bottom">

		<div class="left col3">
			
			<h2>Tincidunt</h2>
			<ul>
				<li><a href="index.html">consequat molestie</a></li>
				<li><a href="index.html">sem justo</a></li>
				<li><a href="index.html">semper</a></li>
				<li><a href="index.html">magna sed purus</a></li>
				<li><a href="index.html">tincidunt</a></li>
			</ul>

		</div>

		<div class="left col3">

			<h2>Sed purus</h2>

			<ul>
				<li><a href="index.html">sem justo</a></li>
				<li><a href="index.html">magna sed purus</a></li>
				<li><a href="index.html">tincidunt</a></li>
				<li><a href="index.html">semper</a></li>
				<li><a href="index.html">consequat molestie</a></li>
			</ul>

		</div>

		<div class="right col3last">

			<h2>Praesent</h2>
			
			<ul>
				<li><a href="index.html">semper</a></li>
				<li><a href="index.html">consequat molestie</a></li>				
				<li><a href="index.html">magna sed purus</a></li>
				<li><a href="index.html">sem justo</a></li>
				<li><a href="index.html">tincidunt</a></li>
			</ul>

		</div>

		<div class="clearer">&nbsp;</div>
		
	</div>--!>

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

</body>
</html>
