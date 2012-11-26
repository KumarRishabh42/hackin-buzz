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
	//			$('#menu').html(e.pageX + ' ' + e.pageY);
				$('#pic').css('display','block');
				if(e.pageX>318 && e.pageX<375 && e.pageY>370 && e.pageY<425){
					$('#2').css('display','inline');
					$('#2').removeAttr("usemap");
				}
				else{
					$('#2').css('display','none');
				}
				if(e.pageX>510 && e.pageX<595 && e.pageY>90 && e.pageY<115){
					$('#1').css('display','inline');
					$('#bum').html('the Bunny');
				}
			});
			$(".mapping").click(function() {
				  window.location.href = String.fromCharCode(112, 97, 103, 101, 51, 46, 112, 104, 112);
			});
	});
	</script>
	<div style="/*display: block;*/">
		You are making going to make <div id="bum" style="display:inline"> someone </div> very angry!!
	</div>
	<img id="1" src="images/What-are-you-looking-at.jpg" usemap="#assmap" style="display:none"/>
	<img id="2" src="images/scroll-stock.jpg" style="position: relative; bottom: 10px; right: 400px;" />
	<map name="assmap">
	<area shape="rect" coords="87,275,122,305" href="#" alt="Sun" class="mapping"/>
	</map>
	<br />
</div>
</body>
</html>
