<?php
$CUR_LVL = 10;
require_once('include.php');
require_once('user_tracking_khoofiya.php');
?>
<?php

if(isset($_POST['nick'])){
	if(mysql_real_escape_string($_POST['nick'])=="errorsbunny"){
		incrementLevel($_SESSION['username'], $CUR_LVL+1);
		header("Location: redirect.php");
	}
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type=text/javascript src="scripts/jquery-1.7.0.min.js"></script>
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
	<div style="/*display: block;*/">
		You are making going to make <div id="bum" style="display:inline"> someone </div> very angry!!
	</div>
	<img id="1" src="images/What-are-you-looking-at.jpg" usemap="#assmap" style="display:none"/>
	<img id="2" src="images/scroll-stock.jpg" style="position: relative; bottom: 10px; right: 400px;" />
	<map name="assmap">
	<area shape="rect" coords="87,275,122,305" alt="Sun" class="mapping"/>
	</map>
	<br />
<!-- We don't trust CDNs -->
<div>You need to calm him down by using a special nickname only his mummy knows.<br />
<form method="post" action="page11.php">
<input type="password" name="nick"><input type="submit" value="submit">
</form>
</div>
</div>
</body>
</html>
