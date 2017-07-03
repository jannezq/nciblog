//<?php
/*session_start();
	
	if (!isset($_SESSION['username']) || empty ($_SESSION['username'])){
		exit();
	}
	
	$username = $_SESSION['username'];*/

?>


<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html lang="en-us">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slidercss.css">
	<link rel="stylesheet" href="css/eventscss.css">
	<link rel="stylesheet" href="css/clubsandSoc.css">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="mainJavascript.js"></script>
  	
  	
	<meta charset="utf-8">
	
	<title>Hello...</title>


</head>

<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-default  navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavigationBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.html">Student Globe</a>
			</div>
			<div class="collapse navbar-collapse" id="NavigationBar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php">Home</a></li>
					<li><a href="home.php">About</a></li>
					<li><a href="#forum">Forum</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="clubsnsoc.html">Clubs & Socs.</a></li>
					<li><a href="GameQuiz.html">Quiz</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="jumbotron">
			<h1>Clubs & Socs Page</h1>
			<p></p>
		</div>
	</div>
	

<br/>
<!-- DO NOT DELETE ~ Jovellyn
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="pictures">
				<div class="bigimg">
				    <img src="images/president.jpg" class="img-thumbnail" alt="Mountains" width="300" height="300">
				</div>
			</div>
		</div>
	</div>
	
		<div class="row">
			<div class="col-md-4">
				<div id="littlepics">
					<div class="gallery">
						<a target="_blank" href="images/president.jpg">
						<img src="images/president.jpg" alt="Fjords" width="200" height="100">
						</a>
						<div class="desc">President</div>
					</div>
				</div>
				<div id="littlepics">
					<div class="gallery">
						<a target="_blank" href="images/president.jpg">
						<img src="images/president.jpg" alt="Fjords" width="200" height="100">
						</a>
						<div class="desc">Vice-President</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div id="cns">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.
				
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.
				
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.
				
				</p>
			</div>
		</div>
	</div>
</div>
 -->

<div id="pictures">
	<div id="bigimg">
	  <a target="_blank" href="images/president.jpg">
    <img src="images/president.jpg" alt="Mountains" width="300" height="300">
  </a
  >
  
</div>
<div id="littlepics">
<div class="gallery">
  <a target="_blank" href="images/president.jpg">
    <img src="images/president.jpg" alt="Fjords" width="200" height="100">
  </a>
  <div class="desc">President</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/president.jpg">
    <img src="images/president.jpg" alt="Forest" width="200" height="100">
  </a>
  <div class="desc">Vice President</div>
</div>
<div class="gallery">
  <a target="_blank" href="images/president.jpg">
    <img src="images/president.jpg" alt="Northern Lights" width="200" height="100">
  </a>
  <div class="desc">Clubs & Socs Officer </div>
</div>

<div class="gallery">
  <a target="_blank" href="images/president.jpg">
    <img src="images/president.jpg" alt="Mountains" width="200" height="100">
  </a>
  <div class="desc">Entertainment Officer</div>
</div>
</div>
</div>


<div id="cns">
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.

</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.

</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.

</p>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p> Reservation section/mini shop</p>
		</div>
	</div>
</div>



		
	
	

	

	

</body>
</html>
