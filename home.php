<?php

include 'db/connect_to_database.php';

session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: login_page.php");// send to login page
   exit;
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
	
	<title>Student Globe</title>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,700);

body {
    font-family: 'Quicksand', sans-serif;
    font-weight:700;
   
}

.jumbotron{
    background-color:#337ab7;
    color: #ffffff;
    padding-top: 20px ;
    padding-bottom: 20px ;
    height: 250px;
}




.carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #016DBA;
  }
  .carousel-indicators li {
      border-color: #016DBA;
  }
  .carousel-indicators li.active {
      background-color: #016DBA;
  }
  

  
a:hover{
	color: rgb(119, 119, 119);
}
  
button{
	background-color: #f8f8f8;
	
}

button:focus {outline:0;}
  
.dropbtn {
	color: rgb(119, 119, 119);
    padding: 16px;
    font-size: 12px;
    letter-spacing: 5px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
    
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
   	color: rgb(119, 119, 119);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
}




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
				<a class="navbar-brand" href="home.php">StudentGlobe</a>
			</div>
			<div id="home" class="collapse navbar-collapse" id="NavigationBar">
				<ul class="nav navbar-nav navbar-right">
					<!--<li><a href="">Hello <?php  echo $_SESSION["username"];  ?></a></li>-->
					<li><div class="dropdown dropMenu">
						    <button class="dropbtn">Hello <?php  echo $_SESSION["username"];  ?></button>
						    <div class="dropdown-content">
						      <a href="admin/admin_page.php"><?php  echo $_SESSION["username"];  ?> Post</a>
						      <a href="logout.php">Logout</a>
						    </div>
						</div> 
					 </li>
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
	
		

		<div class="jumbotron text-center">
			<h1>Welcome to Student Globe NCIRL </h1>
			<h1><?php  echo $_SESSION["username"];  ?></h1>
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
				<!--Login form
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form action = "login_proccess.php" id="login-form" method="post" role="form" style="display: block;">
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
							<!--Signup form
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
									</div>
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
	</section>-->
	
	<!-- About Section -->
	<div class=" container container-fluid text-center" id="about">
		<div class="row ">
			<div class="col-md-5  ">
				<img id="logo" src="images/globe.png"></img>
			</div>
			<div class="col-md-7 text-center">
				<h1>About Student Globe</h1>
				<p>Student Globe is your go to hub of information. From 
				Clubs and Society events to forums. Discuss various topics
				from news to sports to interest&hobbies. A hub of communitcation between
			lecturers and students. Check the events to see what is happening around you.</p>
			</div>
		</div>
	</div>
	
	<!-- Forum Section https://bootsnipp.com/snippets/NBMD6-->
	<section class="jk-slider " id="forum" >
		<hr>
	    <div class="container dad">
		  <div class="son-1">
		  </div>
		    <a  href="forum.php" style="text-decoration:none;"><p class="son-text"><span class="son-span">Forums</span><br/><br/>Created by the students for the students! </p></a>
		</div>
	</section>
	
	<!-- Events Section https://bootsnipp.com/snippets/K3xDx -->
		<div class="container container-fluid slideanim" id="events">
			<h1 class="text-center">Events</h1>
			<hr>
			<div class="row">
				<div class="story-content">
		          <div class="row story-hover">
		            <div class="col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="event1.php">
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
		                <a class="over" href="event2.php">
		                  <span class="story-content">
		                    <i class="fa fa-star-o" aria-hidden="true"></i><br>
		                    Lantern Festival
		                  </span>
		                  <img src="images/event2.png" class="img-responsive" >
		                </a>
		              </div>
		            </div>
		
		            <div class="col-xs-12 col-sm-4 col-md-4">
		              <div class="story">
		                <a class="over" href="#">
		                  <span class="story-content">
		                    <i class="fa fa-id-badge" aria-hidden="true"></i><br>
		                    Jobs Career Fair
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
		                    CV Clinic
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
		                    Essay Workshop
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
		                    Fashion Show 2016
		                  </span>
		                  <img src="images/event3.png" class="img-responsive">
		                </a>
		              </div>
		            </div>
		
		          </div>
		        </div>
			</div>
		</div>

	
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
		            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
		        </ol>
		        <!-- Wrapper for slides -->
		        <div class="carousel-inner" role="listbox">
		            <!-- Item 1 -->
		            <div class="item active slide1">
		                
		                	<div class="row">
		                		<div class="container">
		                    		<div class="col-md-3 text-right">
		                       			<!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> -->
		                    		</div>
		                    		<div class="col-md-9 text-right">
		                        		<h3 data-animation="animated bounceInDown">Basketball Club</h3>
		                     		</div>
		                		</div>
		                	</div>
		               
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
		            	<a href="fashionSoc.php">
			                <div class="row">
			                	<div class="container">
				                    <div class="col-md-7 text-left">
				                        <h3 data-animation="animated bounceInDown">Fashion Society</h3>
				                     </div>
				                    <div class="col-md-5 text-right">
				                        <!--<img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">-->
				                    </div>  
			                	</div>
			                </div>
		                </a>
		            </div>
		            <!-- End Item 4 -->
		    		
		    		<!-- Item 5 -->
		            <div class="item slide5">
		            	<a href="InternSoc.php">
			                <div class="row">
			                	<div class="container">
				                    <div class="col-md-5 text-right">
				                        <!--<img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">-->
				                    </div>  
				                    <div class="col-md-7 text-left">
				                        <h3 data-animation="animated bounceInDown">International Society</h3>
				                     </div>
			                	</div>
			                </div>
		                </a>
		            </div>
		            <!-- End Item 5 -->
		    		
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
	</section>

	
	<!-- Quiz-->
	<div class="container container-fluid text-center" id="GameQuiz">
		<h1 class=" text-center">Quiz</h1>
		<div class="row ">
			<div class="col-md-7 slideanim">
				<h4>Do you have what it takes to take on the weekly challenge. Get all Right win a Prize. Challenge accepted? <a href="GameQuiz.php">Click here now</a></h4>
			</div>
			<div class="col-md-5  slideanim">
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
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      <li data-target="#myCarousel" data-slide-to="5"></li>
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
		      <div class="item">
		        <h4>"The only necessity for success is the willingness to suffer a thousand failures!"<br><span></span></h4>
		      </div>
		      <div class="item">
		        <h4>"Learn not just from what winners do right, but also from what losers do wrong."<br><span></span></h4>
		      </div>
		      <div class="item">
		        <h4>"100% of the time, it works every time."<br><span></span></h4>
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
	<div id="contact" class="container container-fluid bg-grey contacting">
	  <h1 class="text-center">CONTACT</h1>
	  <hr>
	  <div class="col-md-12 slideanim text-center">
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
	
	<div id="contact" class=" container ">
		<div class="box">
			<div class="row">
			  	<div class="col-md-4 slideanim">
			    	<p>Contact us and we'll get back to you within 24 hours.</p>
			      	<p><span class="glyphicon glyphicon-map-marker"></span>National College of Ireland</p>
			      	<p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
			     	<p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
			    </div>
			  	<div class="col-md-8 slideanim">
			    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.6893219782714!2d-6.245367984922087!3d53.34881737997952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e8cd86e97e7%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sie!4v1499434401587"
			    	width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			    </div>
	    	</div>
		</div>
	</div>
	
	<!-- Footer -->
	<footer class="container-fluid bg-4 text-center" >
		<a href="#myPage" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up"></span>
  		</a>
  		<p>Bootstrap Theme Made By <strong>Jovellyn Quiapos</strong></p>
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
