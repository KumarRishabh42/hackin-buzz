<?
 $CUR_LVL = 2;
 require_once('include.php');
 require_once('user_tracking_khoofiya.php');
 session_start();
	if(isset($_POST["submitxx"])){
			$xxx=1;
			if($_POST["user"]=='user' && $_POST["pwd"]=='iiit123' ){
				$xnxx=1;
			}
			else{
				$xnxx=0;
			}

	
//		header('Location:./new1.php');
					
	}
	else if(isset($_GET["submitxx"])){
		
			if($_GET["user"]=='user' && $_GET["pwd"]=='iiit123' ){
					//header('Location: nEXTLEVEL.php');
					incrementLevel($_SESSION['username'], $CUR_LVL+1);
					header("Location: redirect.php");
					//echo "Successful";
			}

	}
	else{
			$xxx=0;
	}

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
	 <form id="form" name="form" method="post" action="page3.php" >
<?	if($xxx==0){ echo 'It seems you have been logged out. Please login again using credentials provided in level 0';}
	else if($xnxx==1){
		echo 'Sorry We couldnt get your password. Please login again .....';
	}
	else{ echo'Invalid Authentication';}?>
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
                <input type="password" name="pwd" id="email" maxlength=4 title="Your E-mail" class="req-email"/>
              </div>
	     
	      <input type="submit" name="submitxx" value="submit" class="submit btn-form" id="submitxx"/>
	     
 <br />
	</form>
</div>
</div>
</div>
</body>
</html>
















































































































































































































































































































































































































































































































































<!-- The server's post office got wrecked in the monsoon rains, so you need to find another way to send the information -->
