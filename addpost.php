<?php

$servername = "localhost";
$username = "x14331851";
$password = "";
$database = "nciblog";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/categoryCss.css">
    <link rel="stylesheet" href="css/slidercss.css">
    <link rel="stylesheet" href="css/eventscss.css">
    
    
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
                    <li><a href="home.php">About</a></li>
                    <li><a href="#forum">Forum</a></li>
                    <li><a href="eventsMain.php">Events</a></li>
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
    
    <div class="container  bg-grey center_div">
        <h2 class="text-center">Create New Post</h2>
        <hr>
        <div class="row">
                <form method="post ">
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control" id="inputTitle" required>
                        </div>
                            
                        <label for="inputAuthor" class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-4">
                            <input type="text" name="author" class="form-control" id="inputAuthor" required>
                        </div>    
                    </div>
                        
                    <div class="form-group row">
                        <label for="inputSummary" class="col-sm-2 col-form-label">Summary</label>
                        <div class="col-sm-4">
                            <input type="text" name="summary" class="form-control" id="inputSummary" required>
                        </div>
                        
                        <label for="inputCategory" class="col-md-2 col-form-label">Category</label>
                        <div class="col-md-4">
                            <select name="category" class="custom-select">
                                <option selected>Category</option>
                                <option value="Sport">Sport</option>
                                <option value="News">News</option>
                                <option value="Education">Education</option>
                                <option value="Student Union">Student Union</option>
                            </select>
                        </div>
                    </div>
                        
                    <div class="form-group row">
                        <label for="inputContent" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="content" type="text" id="exampleTextarea" rows="6"></textarea>
                        </div>    
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>      
    
    <!--https://bootsnipp.com/snippets/n25gZ-->
    <div class="container">
        <h2 class="text-center">Categories</h2>
        <hr>
        <div class="content">
    		<div class="grid">
    			<figure class="effect-layla">
    				<img src="images/sports.jpg" alt="img06"/>
    				<figcaption>
    					<h2>Sports <span>Forum</span></h2>
    				</figcaption>			
    			</figure>
    			<figure class="effect-layla">
    				<img src="images/education.jpg" alt="img03"/>
    				<figcaption>
    					<h2>Education<span>Forum</span></h2>
    				</figcaption>			
    			</figure>
    		</div>
        </div>
        
    </div>
    
     <div class="container">
        <div class="content">
    		<div class="grid">
    			<figure class="effect-layla">
    				<img src="images/news.png" alt="img06"/>
    				<figcaption>
    					<h2>News <span>Forum</span></h2>
    				</figcaption>			
    			</figure>
    			<figure class="effect-layla">
    				<img src="img/3.jpg" alt="img03"/>
    				<figcaption>
    					<h2>Interest&Hobbies<span>Forum</span></h2>
    				</figcaption>			
    			</figure>
    		</div>
        </div>
    </div>
    
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
