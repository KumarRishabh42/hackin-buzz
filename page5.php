<?php
$CUR_LVL = 4;
require_once('include.php');
require_once('user_tracking_khoofiya.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type=text/javascript src="scripts/jquery-1.8.0.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nightvision by FCT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu">
<ul><li class="current_page_item"><a href="index.php">Home</a></li>
<li><a href="list.php">Ranklist</a></li>
<li><a href="../forums">Forums</a></li>
<li><a href="rules.php">Rules</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
<div id="page" >
	<div id="re-you">
	<a href="https://www.youtube.com/watch?v=_X4_YZJWWO4" />Parde Ki Piche Kya Hai?</a><br /> 
	</div>
	<br />
	<form id="form" name="form" method="post" action="page5.php" >
	Who's The Bond?<br />
	<img src="images/Who.jpg">
	<br />
	<input type="password" name="pwd" id="email" title="Your E-mail" class="req-email"/>
	<input type="submit" value="Submit" class="submit btn-form" id="submit"/>
	</form>
	<img id="2" src="images/Curtain.gif" style="position: relative; bottom: 418px; right: 0px;" />
	<?php
	      if(isset($_POST["pwd"])){
		      if ($_SESSION["username"]== $_POST["pwd"]){
			      incrementLevel($_SESSION['username'], $CUR_LVL+1);
			      header('Location: redirect.php') ;
		      }
		      else{
				?>
			      	<script>$('#re-you').html("I expected more from you!");</script>
				<?php
		      }
	      }
	?>

	<br />
</div>
</body>
</html>
