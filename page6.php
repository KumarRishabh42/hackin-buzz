<?php

$CUR_LVL = 5;
require_once('include.php');
require_once('user_tracking_khoofiya.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
	<ul>
<li class="current_page_item"><a href="index.php">Home</a></li>
<li><a href="list.php">Ranklist</a></li>
<li><a href="../forums">Forums</a></li>
<li><a href="rules.php">Rules</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
<div id="page" >
<script type=text/javascript>
</script>
	<div id="content" style="width:100%;height:425px">
	 <form id="form" name="form" method="post" action="page6.php" >
	<br />
	<div id="stmt">Hmm...Looks like there is a loophole <div id="in" onMouseover=$('#in').html('On?') onMouseout=$('#in').html('In?') style="display:inline; text-decoration:underline; font-weight:bold; font-style:italic">in</div> the web... what can be its value? </div>
	<br />
	<img src="images/web-hole.jpg" >
	<br />
	Enter the passkey:
	<br />
                <input type="password" name="pwd" id="email" title="Your E-mail" class="req-email"/>
	      <input type="submit" value="Submit" class="submit btn-form" id="submit"/>
	      <br />
	<br />	
	</form>
<?php
if(isset($_POST["pwd"])){
		if ($_POST["pwd"]=="4050"){
			      incrementLevel($_SESSION['username'], $CUR_LVL+1);
			      header( 'Location: redirect.php' ) ;
		      }
			else{
				?>
				<script>$('#stmt').html("Thats the wrong hole!");</script>
				<?php

		      }
	      }
?>
</div>
</div>
</div>
</body>
</html>
