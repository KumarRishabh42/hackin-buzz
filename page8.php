<?php

$CUR_LVL = 7;
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
eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(13).20(12(){$(13).19(12(4){8(4.14>18&&4.14<16){8(4.6>17&&4.6<15){$(\'#1\').0({\'5\':\'\',\'23\':\'24\'});$(\'#2\').0({\'5\':\'7\'});$(\'#3\').0({\'5\':\'7\'});$(\'#28\').10({\'9\':\'27\'})}8(4.6>15&&4.6<11){$(\'#1\').0({\'5\':\'7\'});$(\'#2\').0({\'5\':\'\'});$(\'#3\').0({\'5\':\'7\'});$(\'#29\').10({\'9\':\'25\'})}8(4.6>11&&4.6<22){$(\'#1\').0({\'5\':\'7\'});$(\'#2\').0({\'5\':\'7\'});$(\'#3\').0({\'5\':\'\'});$(\'#21\').10({\'9\':\'26\'})}}})});',10,30,'css||||e|visibility|pageX|hidden|if|href|attr|524|function|document|pageY|370|462|238|138|mousemove|ready|_3|680|display|inline|file_2|file_3|file_1|_1|_2'.split('|'),0,{}))

</script>
	<div id="content" style="width:100%;height:425px">
	 <form id="form" name="form" method="post" action="page8.php" >
	<br />
	<div id="stmt">Are you going to Execute me?</div>
	<br />
	<img src="images/WTF-cat.gif" >
	<br />
	Enter the passkey:
	<br />
                <input type="password" name="pwd" id="email" title="Your E-mail" class="req-email"/>
	      <input type="submit" value="Submit" class="submit btn-form" id="submit"/>
	      <br />
	<div>
	<a id="_1" href="#"><img id="1" src="images/Me1.jpg" style="position: relative; bottom: 384px; right: 0px; visibility:hidden ;" /></a>
	<a id="_2" href="#"><img id="2" src="images/Me2.jpg" style="position: relative; bottom: 384px; right: 6px; visibility:hidden; " /></a>
	<a id="_3" href="#"><img id="3" src="images/Me3.jpg" style="position: relative; bottom: 384px; right: 12px; visibility:hidden;" /></a>
	</div>
	<br />	
	</form>
<?php
	if(isset($_POST["pwd"])){
		if ($_POST["pwd"]==":(){ :|:& };:"){
			      incrementLevel($_SESSION['username'], $CUR_LVL + 1);
			      header( 'Location: redirect.php' ) ;
		      }
			else{
				?>
				<script>$('#stmt').html("You didn't execute me correctly!");</script>
				<?php

		      }
	      }
?>
</div>
</div>
</div>
</body>
</html>
