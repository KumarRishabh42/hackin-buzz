<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content=""/>
<meta name="keywords" content="" />
<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="ie_fixes.css" media="screen" /><![endif]-->

<title>Hack In!</title>
</head>
<?$date = date(“format”, $timestamp);?>
<body>
<?

include "config.php";
    
session_start();




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
	<?		if(!isset($_SESSION["username"])){
		
		

			
			
			echo'<li><a href="registration.php">Register/Login</a></li>';
			}
	?>
			<li><a href="list.php">Rank List</a></li>
			<li><a href="http://felicity.iiit.ac.in/buzz/forums">Forums</a></li>
			<li><a href="rules.php">Rules</a></li>
			<li class="current_page_item"><a href="about.php">About Us</a></li>			
			
	<?		if(isset($_SESSION["username"])){
		echo '<li><a href="logout.php">Logout</a></li>';
		}
        ?>




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
   

			}?></h2></div>
				<? $t=time(); ?>
				<div class="post_date"><?echo"Server Time is " ;  echo date('d/m/Y - H:ia');                 ?></div>
			</div>

			<div class="post_body">

				<p><b>Team Hack In</b></p>
		Consists of <b>Ankush Jain</b>, <b>Nehal J Wani </b>, <b>Rishabh Raj </b>, <b>Abhinandan Panigrahi</b> and <b>Kumar Rishabh</b>


				<blockquote style="margin-top: 10px">

					<p>What hackers do is figure out technology and experiment with it in ways many people never imagined. They also have a strong desire to share this information with others and to explain it to people whose only qualification may be the desire to learn.</p>
				

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
