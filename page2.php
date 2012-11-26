<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php

$CUR_LVL = 1;
require_once('include.php');
require_once('user_tracking_khoofiya.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nightvision by FCT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type=text/javascript src="scripts/jquery-1.8.0.min.js"></script>
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
	<div id="content" style="width:100%;height:425px">
	 <form id="form" name="form" method="post" action="page2.php" >
	<br />
	<img src="images/9.png">
	      <div id="re-you"> Enter the code:</div> 
                <input type="password" name="pwd" id="email" title="Your E-mail" class="req-email"/>
	      <input type="submit" value="Submit" class="submit btn-form" id="submit"/>
	      <br />
	<?php
	if(isset($_POST["pwd"])){
		if ($_POST["pwd"]=="6463"){
			      //header( 'Location: page4.php' ) ;
				incrementLevel($_SESSION['username'], $CUR_LVL+1);
				header('Location: redirect.php');
		      }
		      else{
			      ?>
				<script>$('#re-you').html("Think Technically!");</script>
			<?php
		      }
	      }
	?>
</form>
<!-- There's nine on the tee -->
<!-- Use the force..ermm... I mean, source -->
</div>
</div>
</div>
</body>
</html>
