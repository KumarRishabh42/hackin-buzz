<?php

$CUR_LVL = 0;

require_once('include.php');
require_once('user_tracking_khoofiya.php');

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
	<div id="content" style="width:100%;height:425px">
	 <form id="form" name="form" method="post" action="page1.php" >
	I am a IIITian!
	<br />
	<img src="images/banyan-tree.preview.jpg">
		<div class="wrapper-block left">
                <label for="name">
                   Username 
                  <span class="small-label">
                  </span>
                </label>
                <input type="text" name="user" id="name" title="Your Name" class="req-string"/>
              </div>
              <div class="wrapper-block left">
                <label for="email">
                  Password
                  <span class="small-label">
                  </span>
                </label>
                <input type="password" name="pwd" id="email" title="Your E-mail" class="req-email"/>
              </div>
	      <input type="submit" value="Submit" class="submit btn-form" id="submit"/>
	      <br />
	<?php
	      if(isset($_POST["user"]) && isset($_POST["pwd"])){
		      if ($_POST["user"]=="user" && $_POST["pwd"]=="iiit123"){
			      if(getCurrentLevel($_SESSION['username']) <= $CUR_LVL)
			      {
				      incrementLevel($_SESSION['username'], $CUR_LVL+1);
			      }
			      header("Location: redirect.php");
			      //echo getCurrentLevel($_SESSION['username']);
		      }
		      else{
			      echo "Wrong Username Or Password!";
		      }
	      }
	?>
</form>
</div>
</div>
</div>
</body>
</html>
