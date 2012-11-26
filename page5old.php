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
		<li class="current_page_item"><a href="#">Home</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Photos</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
</div>
<div id="page" >
<script type=text/javascript>
$(document).ready(function(){
	$(document).mousemove(function(e){
		if(e.pageY>138 && e.pageY<462){
			if(e.pageX>238 && e.pageX<370){
				$('#1').css({'visibility':'','display':'inline'});
				$('#2').css({'visibility':'hidden'});
				$('#3').css({'visibility':'hidden'});
				$('#_1').attr({'href':'file_1'});
			}
			if(e.pageX>370 && e.pageX<524){
				$('#1').css({'visibility':'hidden'});
				$('#2').css({'visibility':''});
				$('#3').css({'visibility':'hidden'});
				$('#_2').attr({'href':'file_2'});
			}
			if(e.pageX>524 && e.pageX<680){
				$('#1').css({'visibility':'hidden'});
				$('#2').css({'visibility':'hidden'});
				$('#3').css({'visibility':''});
				$('#_3').attr({'href':'file_3'});
			}
		}
	});
 	});
</script>
	<div id="content" style="width:100%;height:425px">
	 <form id="form" name="form" method="post" action="page5.php" >
	<br />
	<div id="stmt">Are you going to Execute me?</div>
	<br />
	<img src="images/WTF-cat.gif" usemap="#filemap" >
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
			      header( 'Location: page6.php' ) ;
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
