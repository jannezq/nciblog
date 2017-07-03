<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<?php

	session_start();
	

	$username = "Brian" || "Jason" || "Jovellyn" || "Habeeb";
	$password = "password";
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	
		{
			header("Location: signedInHome.php");
		}
	
	if (isset($_POST['username']) && isset($_POST['password']))
		
			{
				if ($_POST['username'] == $username && $_POST['password'] == $password)
					
					{
						$_SESSION['loggedin'] = true;
						header("Location: signedInHome.php");
					}
			}
?>


<!DOCTYPE html>
<html lang="en-us">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slidercss.css">
	<link rel="stylesheet" href="css/eventscss.css">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="mainJavascript.js"></script>
  	<script src="js/registerValidation.js"></script>
  	
  	
	<meta charset="utf-8">
	
	<title>Hello...</title>
<style type="text/css">

</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!-- NAVBAR -->
	<nav class="navbar navbar-default  navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavigationBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php">Student Globe</a>
			</div>
			<div class="collapse navbar-collapse" id="NavigationBar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#forum">Forum</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#clubsnsoc">Clubs & Socs.</a></li>
					<li><a href="#GameQuiz">Quiz</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="jumbotron">
			<h1>News and Events!</h1>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<h3>Monday</h3>
				<p>-Comedy show featuring: Andrew Stanley, Marcus O'Laire, Foil arms and Hog.</p>
				<p>-PRE SESH, SU 7pm</p>
				<p>-The Workmans. Tickets 10.00 Door @10.30pm</p>
				<p>-FRESHERS BALL feature Balgans, Gavin James, ROry Lynam with live SAX</p>
			</div>
			
			<div class="col-md-6 text-center">
				<h3>Tuesday</h3>
				<p>-Clubs & Socs Sign Up Day.</p>
				<p>	Sponsor by Redbull, SPIN103.8</p>
				<p>-Giant Infatables & free goodies!</p>
				<p>-Pub Crawl 5.00 & free t-shirt, Lagoona @4pm.</p>
				
			</div>
			
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<h3>Wednesday</h3>
				<p>-Nando's, Atrium @ 11am</p>
				<p>-Jump! Zone 5.00, tickets at atrium @1:30pm.</p>
			
				<h3>Thursday </h3>
				<p>-Nando's, Atrium @ 11am</p>
				<p>-Jump! Zone 5.00, tickets at atrium @1:30pm.</p>
			</div>
			
			<div class="col-md-6 text-center">
				<h3>Friday</h3>
				<p>-MOVIE MARATHON DAY !!!!!!</p>
				<p>-free foods, games and goodies !!</p>
			</div>
			
		</div>
	</div>
	
	

	<!-- Footer -->
	<footer class="container-fluid bg-4 text-center">
		<div class="row">
			<div class="col-md-6">
				<h3>Contact information</h3>
			</div>
			<div class="col-md-6">
				<h3>Site links and other information</h3>
			</div>
		</div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})

 $(window).scroll(function() {
		  $(".slideanim").each(function(){
		    var pos = $(this).offset().top;
		
		    var winTop = $(window).scrollTop();
		    if (pos < winTop + 600) {
		      $(this).addClass("slide");
		    }
		  });
		});
		
</script>
    
   
</body>
</html>
