<?php

include 'db/connect_to_database.php';

session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: login_page.php");// send to login page
   exit;
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    
    $sql = $conn->query("INSERT INTO posts VALUES('', '$title', '$summary', '$author', '$category', '$content')");
    
   


    
    header('Location: addpost.php');
    exit();
}

?>

<!--

<h3><?php echo $record; ?></h3> -->


<!DOCTYPE html>
<html lang="en-us">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/eventslayout.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    
    
    
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
    padding-top: 5px;
    color: #043189;
    text-decoration: none;
}
a:hover {
    color: #043189;
      text-decoration: none;
}

.navbar{
	font-family: 'Quicksand', sans-serif;
	padding-top: 20px;
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
            <h1>Magic Lantern Festival!</h1>
        </div>
    </div>
    
    <div class="container ">
    	<div class="row">
    		<div class="col-md-5">
    			<img  src="images/eventLantern/event2prof.png" class="imgStyle" height="480px" width="100%"></img>
    			<div class="descriptionText text-center">
    				<div class="col-sm-6 textSpace">
    					<a href=""><h3>Facebook</h3></a>
    				</div>
    				<div class="col-sm-6 textSpace">
    					<a href=""><h3>Twitter</h3></a>
    				</div>
    				<div class="col-sm-12 text-center">
    				    <a href=""><h3>Instagram</h3></a>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-7">
    			<h3>STORY</h3>
    			<p>The Magical Lantern Festival London is a spectacular fusion of art, heritage and culture. Illuminating outdoor installations of beautifully sculpted lanterns taking various forms.
</br>
</br>
The festival has entered its second year in London as the UK prepares to celebrate Chinese New Year of the Rooster 2017 and the cultural significance surrounding this extraordinary event. The theme for this year’s festival is: ‘Explore The Silk Road’. Visitors will discover magnificent life-sized and oversized lantern scenes, which represent and highlight this significant route of trade and culture from Europe to Ancient China.
</br>
</br>
The Silk Road Festival journey begins with a 15-metre wide lantern of London’s Houses of Parliament. Visitors continue their tour by exploring lanterns related to the Silk Road representing Europe, Central Asia, Arabia, Egypt, Persia, India and Ancient China.
</br>
</br>
The entertainment area adds another dimension to the experience with an international range of food and beverage vendors, festival merchandise, a fully equipped synthetic ice-rink, an authentic ice bar, virtual reality gaming experience and a mini funfair and games.</p>
    		</div>
    	</div>
    		<hr>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<h3>Tickets</h3>
    			<p>Open Thursday to Sunday each week and open every day during the Feb half term holiday week. Last day of opening is 26th Feb. 
				</br>
				If customers have tickets for the ice rink, ice bar or VR experience before their lantern tour, then they must enter the entertainment area first which is through the small A4 car park entrance. Then once their activity is over they can walk back through the car park, turn right and enter the lantern route through the Lantern archway through the Dukes Avenue Gate.
				</br>
				If customers are going to the lantern tour first then they should enter through the giant lantern archway through the Dukes Avenue Gate. Then at the end of the lantern route visitors will naturally end up at the entertainment area where they can try out the activities and grab a bite to eat before they leave.
				</br>
				Please Note: Tickets are non-refundable and non-exchangeable. Children aged 3 and under enter free and do not need a ticket. There are no cloakroom facilities at the venue, so visitors will not be able to store bags or large items. Scooters, skates and bicycles are not permitted on site. Only guide dogs are permitted at the festival.</p>
				</div>
    			<div class="col-md-6">
    				<h3>Win 2 tickets to go!</h3>
    				<p>For a chance to win 2 tickets for you and your partner all you need to do is: </br>
    				> Below in the CONTACT form, enter your details and just submit.</br>
    				> Like the MAGIC LANTERN FESTIVAL FACEBOOK and other social media accounts.</br>
    				> Like and Tag your special other to go with you on the the profile picture. 
    				</p>
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
