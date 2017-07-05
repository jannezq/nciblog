<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->

<?php

	session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	
		{
			header("Location: login_proccess.php");
		}
	
	if (isset($_POST['username']) && isset($_POST['password']))
		
			{
				if ($_POST['username'] == $username && $_POST['password'] == $password)
					
					{
						$_SESSION['loggedin'] = true;
						header("Location: login_proccess.php");
					}
			}
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/forumCss.css">
	<link rel="stylesheet" href="css/slidercss.css">
	<link rel="stylesheet" href="css/eventscss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
	
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
			<div id="home" class="collapse navbar-collapse" id="NavigationBar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#forum">Forum</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#clubsnsoc">Clubs & Socs.</a></li>
					<li><a href="#GameQuiz">Quiz</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" >
		<div class="jumbotron">
			<h1>Welcome to Student Globe NCIRL</h1>
		</div>
	</div>
	
	
	
	<!-- Login Section -->
	<section class="bg-primary">
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
				<!--Login form-->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
							<!--Signup form-->
								<form id="register-form" action="signup.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="First Name" value="">
										<div id="user"></div>
									</div>
									<div class="form-group">
										<input type="text" name="lname" id="lname" tabindex="1" class="form-control" placeholder="Last Name" value="">
										<div id="user"></div>
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
										<div id="user"></div>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" onchange="email_Valid(this.value);">
										<div class="status" id="status"></div>
									</div>
									<div class="form-group">
										<input required type="password" name="password" id="password1" minlength="8" maxlength="16" mtabindex="2" class="form-control" placeholder="Password">
									</div>
									<!--<div class="form-group">
										<input type="password" name="confirm-password" id="password2" tabindex="2" minlength="8" maxlength="16" class="form-control" placeholder="Confirm Password" onkeyup"checkPass(); return false;" />
										<span id="confirmMessage" class="confirmMessage"></span>
									</div>-->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	<!-- About Section -->
	<div class="container-fluid text-center" id="about">
		<div class="row ">
			<div class="col-md-4  slideanim">
				<img id="logo" src="images/globe.png"></img>
			</div>
			<div class="col-md-8 text-center">
				<h2>About Student Globe</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
				et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
				ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
	</div>
	
	<!-- Forum Section https://bootsnipp.com/snippets/NBMD6-->
	<section class="jk-slider" id="forum" >
		<hr>
	    <div class="container dad">
		  <div class="son-1">
		  </div>
		    <a  href="addpost.php" style="text-decoration:none;"><p class="son-text"><span class="son-span">Forums</span><br/><br/>Created by the students for the students! </p></a>
		</div>
	</section>
	
	<!-- Events Section https://bootsnipp.com/snippets/K3xDx -->
	<section>
		<div class="container" id="events">
			<div class="row">
			    <h1 class="text-center">Events</h1><br>
			    <hr>
				<div class="story-content">
		          <div class="row story-hover">
		            <div class="col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="eventsMain.php">
		                  <span class="story-content">
		                    <i class="fa fa-users" aria-hidden="true"></i><br>
		                    Freshers Week
		                  </span>
		                  <img src="images/event1.png" class="img-responsive" >
		                </a>
		              </div>
		            </div>
		
		            <div class="col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-camera" aria-hidden="true"></i><br>
		                    Digital
		                  </span>
		                  <img src="images/event2.png" class="img-responsive" >
		                </a>
		              </div>
		            </div>
		
		            <div class="col-xs-12 col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-laptop" aria-hidden="true"></i><br>
		                    Responsive
		                  </span>
		                  <img src="images/event3.png" class="img-responsive">
		                </a>
		              </div>
		            </div>
		
		          </div>
		        </div>
			</div>
			</br>
			<div class="row">
				<div class="story-content">
		          <div class="row story-hover">
		            <div class="col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="eventsMain.php">
		                  <span class="story-content">
		                    <i class="fa fa-users" aria-hidden="true"></i><br>
		                    Freshers Week
		                  </span>
		                  <img src="images/event1.png" class="img-responsive" >
		                </a>
		              </div>
		            </div>
		
		            <div class="col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-camera" aria-hidden="true"></i><br>
		                    Digital
		                  </span>
		                  <img src="images/event2.png" class="img-responsive" >
		                </a>
		              </div>
		            </div>
		
		            <div class="col-xs-12 col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-laptop" aria-hidden="true"></i><br>
		                    Responsive
		                  </span>
		                  <img src="images/event3.png" class="img-responsive">
		                </a>
		              </div>
		            </div>
		
		          </div>
		        </div>
			</div>
			
		</div>
	</section>
	
	<!-- Clubs&Socs. Section https://bootsnipp.com/snippets/K3Al3-->
	<section class="jk-slider" id="clubsnsoc">
		
			<hr>
		<div id="first-slider">
		    <div id="carousel-example-generic" class="carousel slide carousel-fade">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		        </ol>
		        <!-- Wrapper for slides -->
		        <div class="carousel-inner" role="listbox">
		            <!-- Item 1 -->
		            <div class="item active slide1">
		                <div class="row"><div class="container">
		                    <div class="col-md-3 text-right">
		                       <!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> -->
		                    </div>
		                    <div class="col-md-9 text-right">
		                        <h3 data-animation="animated bounceInDown">Basketball Club</h3>
		                     </div>
		                </div></div>
		             </div> 
		            <!-- Item 2 -->
		            <div class="item slide2">
		                <div class="row"><div class="container">
		                    <div class="col-md-7 text-left">
		                        <h3 data-animation="animated bounceInDown">Gaming Society</h3>
		                     </div>
		                    <div class="col-md-5 text-right">
		                       <!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
		                    </div>
		                </div></div>
		            </div>
		            <!-- Item 3 -->
		            <div class="item slide3">
		                <div class="row"><div class="container">
		                    <div class="col-md-5 text-left">
		                    	<!--<img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">-->
		                     </div>
		                    <div class="col-md-7 text-right">
		                         <h3 data-animation="animated bounceInDown">Badminton Club</h3>
		                    </div>     
		                </div></div>
		            </div>
		            <!-- Item 4 -->
		            <div class="item slide4">
		                <div class="row"><div class="container">
		                    <div class="col-md-7 text-left">
		                        <h3 data-animation="animated bounceInDown">Fashion Society</h3>
		                     </div>
		                    <div class="col-md-5 text-right">
		                        <!--<img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">-->
		                    </div>  
		                </div></div>
		            </div>
		            <!-- End Item 4 -->
		    
		        </div>
		        <!-- End Wrapper for slides-->
		        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
		        </a>
		        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
		        </a>
		    </div>
		</div>

		
		<!--
		<hr>
	    <div id="carousel-example" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example" data-slide-to="1"></li>
		    <li data-target="#carousel-example" data-slide-to="2"></li>
		    <li data-target="#carousel-example" data-slide-to="3"></li>
		  </ol>
		
		  <div class="carousel-inner">
		  
		    <div class="item active">
		    <div style="background-image: cover;" class="hero">
		          <h1>Basketball Club</h1>
		      </div>
		     <a href="clubsnsoc.php"><img src="images/basketball.jpg" /></a>
		    </div>
		    
		  <div class="item">
		    <div class="hero">
		            <h1>Gaming Society</h1>
		      </div>
		     <a href="clubsnsoc.php"><img src="images/gaming.png" /></a>
		    </div>
		    
		    <div class="item">
		    <div class="hero">
		            <h1>Badminton Club</h1>
		      </div>
		     <a href="clubsnsoc.php"><img src="images/badminton.jpg" /></a>
		    </div>
		    
		    <div class="item">
		    <div class="hero">
		            <h1>Fashion Society</h1>
		      </div>
		     <a href="clubsnsoc.php"><img src="images/fashion.jpg" /></a>
		    </div>
		    
		  </div>
		
		  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>-->
	</section>

	
	<!-- Quiz-->
	<div class="container-fluid text-center" id="GameQuiz">
		<div class="row ">
			<div class="col-md-8 text-center">
				<h2>Quiz</h2>
				<h4>Do you have what it takes to take on the weekly challenge. Get all Right win a Prize. Challenge accepted? <a href="GameQuiz.html">Click here now</a></h4>
			</div>
			<div class="col-md-4  slideanim">
				<img id="logo" src="images/globe.png"></img>
			</div>
			
		</div>
	</div>
	
			<!-- Large image section -->
	<section  >
	<hr>
    <div class="container dad">	
		<div class="son-2">
		</div>
	</div>
	
	<h2 class="text-center">Weekly Insprational Quotes</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>
		
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
		      </div>
		      <div class="item">
		        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
		      </div>
		      <div class="item">
		        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
		      </div>
		    </div>
		
		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	
	</section>
	
	<!-- Container (Contact Section) -->
	<div id="contact" class="container-fluid bg-grey contacting">
	  <h2 class="text-center">CONTACT</h2>
	  <div class="row">
	    <div class="col-md-5">
	      <p>Contact us and we'll get back to you within 24 hours.</p>
	      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
	      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
	      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
	    </div>
	    <div class="col-md-7 slideanim">
	      <div class="row">
	        <div class="col-sm-6 form-group">
	          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
	        </div>
	        <div class="col-sm-6 form-group">
	          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
	        </div>
	      </div>
	      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
	      <div class="row">
	        <div class="col-md-12 form-group">
	          <button class="btn btn-default pull-right" type="submit">Send</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	

	<!-- Footer -->
	<footer class="container-fluid bg-4 text-center" >
		<a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
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
