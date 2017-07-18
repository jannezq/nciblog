<?php

include 'db/connect_to_database.php';

session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: login_page.php");// send to login page
   exit;
}

?>

<!--

<h3><?php echo $record; ?></h3> -->


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
     <script src="js/categoryjs.js"></script>
    <script src="mainJavascript.js"></script>
    <script src="js/registerValidation.js"></script>
   
    
    
    <meta charset="utf-8">
    
    <title>Hello...</title>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,700);

body {
    font-family: 'Quicksand', sans-serif;
    font-weight:700;
}

a {
    color: #043189;
    text-decoration: none;
    
    cursor: hand
}
a:hover {
    color: #043189;
}

.navbar{
	font-family: 'Quicksand', sans-serif;
	padding-top: 10px;
}

.imgStyle{
	border-radius: 8px;
}

.textSpace{
	padding-top:5px;
}

.carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #F6F6F6;
  }
  .carousel-indicators li {
      border-color: #F6F6F6;
  }
  .carousel-indicators li.active {
      background-color: #F6F6F6;
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
                <a class="navbar-brand" href="home.php">Student Globe</a>
            </div>
            <div class="collapse navbar-collapse" id="NavigationBar">
                <ul class="nav navbar-nav navbar-right">
                    <li><div class="dropdown dropMenu">
						    <button class="dropbtn">Hello <?php  echo $_SESSION["username"];  ?></button>
						    <div class="dropdown-content">
						      <a href="admin/admin_page.php"><?php  echo $_SESSION["username"];  ?> Post</a>
						      <a href="logout.php">Logout</a>
						    </div>
						</div> 
					 </li>
					<li><a href="../forum.php">Forum</a></li>
					<li><a href="../EventsMain.php">Events</a></li>
					<li><a href="../ClubsandSocsMain.php">Clubs & Socs.</a></li>
					<li><a href="../GameQuiz.php">Quiz</a></li>
					<li><a href="../shop/shop.php">Shop</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="jumbotron">
            <h1>Fashion Society</h1>
        </div>
    </div>
    
    <div class="container ">
    	<div class="row">
    		<div class="col-md-7">
    			<img  src="images/FashionSoc/fashionSoc.jpg" class="imgStyle" height="350px" width="100%"></img>
    			<div class="descriptionText text-center">
    				<div class="col-sm-12 textSpace">
    					<h3>President</h3><p>Sarah Mustong</p>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-5">
    			<h3>ABOUT</h3>
    			<p>National College of Ireland's official fashion society</p>
    			<hr>
    			<h3>STORY</h3>
    			<p>It doesn't matter whether you are a local or an 
    			international student,if you have an interest in fashion and love to express your personality through clothes then NCI Fashion Soc. 
    			is the pace to be in. Be the fashionista and be you. Events from fashion shows to photoshoots.</p>
    			
    			<h3>NCI Merchandise</h3>
				<p>Check out the merch that are available: <a href="shop/shop.php">Click Here</a></p>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<h2 class="text-center">Gallery</h2>
    		<hr>
    		<div class="col-md-12">
    			<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
				    <!-- Indicators -->
					<ol class="carousel-indicators">
				    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      	<li data-target="#myCarousel" data-slide-to="1"></li>
				      	<li data-target="#myCarousel" data-slide-to="2"></li>
				      	<li data-target="#myCarousel" data-slide-to="3"></li>
				      	<li data-target="#myCarousel" data-slide-to="4"></li>
				      	<li data-target="#myCarousel" data-slide-to="5"></li>
				      	<li data-target="#myCarousel" data-slide-to="6"></li>
				      	
				    </ol>
				
				    <!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
				    	<div class="item active">
				      		<img src="images/FashionSoc/fash2.jpg"></img>	
				      	</div>
				      	<div class="item">
				      		<img src="images/FashionSoc/fash3.jpg"></img>
				      	</div>
				      	<div class="item">
				      		<img src="images/FashionSoc/fash4.jpg"></img>
				      	</div>
				      	<div class="item">
				      		<img src="images/FashionSoc/fash5.jpg"></img>
				      	</div>
				      	<div class="item">
				      		<img src="images/FashionSoc/fash6.jpg"></img>	
				      	</div>
				      	<div class="item">
				      		<img src="images/FashionSoc/fash7.jpg"></img>
				      	</div>
				      	<div class="item">
				      		<img src="images/FashionSoc/fash1.jpg"></img>
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
    	</div>
    </div>
    
   
    

    <!-- Container (Contact Section) -->
	<div id="contact" class="container container-fluid bg-grey contacting">
	  <h1 class="text-center">CONTACT</h1>
	  <hr>
	  <div class="col-md-12  text-center">
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
