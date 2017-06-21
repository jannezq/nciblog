<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
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
				<a class="navbar-brand" href="home.html">Student Globe</a>
			</div>
			<div class="collapse navbar-collapse" id="NavigationBar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#forum">Forum</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#clubsnsoc">Clubs & Socs.</a></li>
					<li><a href="#GameQuiz">Quiz</a></li>
					<li><a href="logout.php">Log Out</a></li>
					
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to Student Globe NCIRL</h1>
		</div>
	</div>
	
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
	
	<!-- Login Section 
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
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" style="display: block;">
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
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
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
								<form id="register-form" action="" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
	</section>-->
	
	<!-- Forum Section -->
	<section class="jk-slider" id="forum" >
	<div class="container">
			<div class="row">
				<h1 id="forum" class="text-center">Clubs and Societies</h1>
			</div>
		</div>
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
		    <div class="hero">
		            <h1>Education</h1>
		      </div>
		     <a href="addpost.php"><img src="http://placekitten.com/1600/600" /></a>
		    </div>
		    
		  <div class="item">
		    <div class="hero">
		            <h1>Sports</h1>
		      </div>
		     <a href="addpost.php"><img src="http://placekitten.com/1600/600" /></a>
		    </div>
		    
		    <div class="item">
		    <div class="hero">
		            <h1>Student Union</h1>
		      </div>
		     <a href="addpost.php"><img src="http://placekitten.com/1600/600" /></a>
		    </div>
		    
		    <div class="item">
		    <div class="hero">
		            <h1>News</h1>
		      </div>
		     <a href="addpost.php"><img src="http://placekitten.com/1600/600" /></a>
		    </div>
		    
		  </div>
		
		  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
	</section>
	
	<!-- Events Section https://bootsnipp.com/snippets/K3xDx -->
	<section id="events" >
		<div  class="container">
			<div class="row">
			    <h1  class="text-center">Events</h1>
			    <hr>
				<div class="story-content">
		          <div class="row story-hover">
		            <div class="col-sm-4 col-md-4">
		              <div class="story">
		                <a class="overlay" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-users" aria-hidden="true"></i><br>
		                    Halloween Sesh
		                  </span>
		                  <img src="images/event1.png" class="img-responsive" >
		                </a>
		              </div>
		            </div>
		
		            <div class="col-sm-4 col-md-4">
		              <div class="story">
		                <a class="overlay" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-camera" aria-hidden="true"></i><br>
		                   	Lantern Festival
		                  </span>
		                  <img src="images/event2.png" class="img-responsive" >
		                </a>
		              </div>
		            </div>
		
		            <div class="col-xs-12 col-sm-4 col-md-4">
		              <div class="story">
		                <a class="overlay" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-laptop" aria-hidden="true"></i><br>
		                    Jobs Fair
		                  </span>
		                  <img src="images/event3.jpg" class="img-responsive">
		                </a>
		              </div>
		            </div>
		
		          </div>
		        </div>
			</div>
		</div>
	</section>
	
	<!-- Large image section -->
	<div class="container-fluid text-center">
		<h2>IMAGE GOES HERE</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
		et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
		ut aliquip ex ea commodo consequat.</p>
	</div>
	
	<!-- Clubs&Socs. Section -->
	<section class="jk-slider" id="clubsnsoc">
		<div class="container">
			<div class="row">
				<h1 class="text-center">Clubs and Societies</h1>
			</div>
		</div>
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
		    <div class="hero">
		           <a href="clubsnsoc.html"><h1>Basketball Club</h1></a>
		      </div>
		     <a href="clubsnsoc.html"><img src="images/basketball.jpg" /></a>
		    </div>
		    
		  <div class="item">
		    <div class="hero">
		            <h1>Gaming Society</h1>
		      </div>
		     <a href="clubsnsoc.html"><img src="images/gaming.png" /></a>
		    </div>
		    
		    <div class="item">
		    <div class="hero">
		            <h1>Badminton Club</h1>
		      </div>
		     <a href="clubsnsoc.html"><img src="images/badminton.jpg" /></a>
		    </div>
		    
		    <div class="item">
		    <div class="hero">
		            <h1>Fashion Society</h1>
		      </div>
		     <a href="clubsnsoc.html"><img src="images/fashion.jpg" /></a>
		    </div>
		    
		  </div>
		
		  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
	</section>
	
	<!-- Quiz-->
	<div class="container-fluid text-center" id="GameQuiz">
		
		<h2>Quiz !!</h2>
		<p>Do you have what it takes to take on the weekly challenge. Get all Right win a Prize. Challenge accepted? <a href="GameQuiz.html">Click here now</a></p>
	</div>

		<!-- Footer -->
	<footer class="container-fluid bg-4 text-center">
	  <p>Footer section</a></p> 
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