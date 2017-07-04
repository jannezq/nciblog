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
    <link rel="stylesheet" href="css/slidercss.css">
    <link rel="stylesheet" href="css/eventscss.css">
    <link rel="stylesheet" href="css/categorycss.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="mainJavascript.js"></script>
    <script src="js/registerValidation.js"></script>
    <script src="js/categoryjs.js"></script>
    
    
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
    
    <div class="container center_div">
        <div class="row">
            <h2>Create New Post</h2>
                <form method="post ">
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control" id="inputTitle">
                        </div>
                            
                        <label for="inputAuthor" class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-4">
                            <input type="text" name="author" class="form-control" id="inputAuthor">
                        </div>    
                    </div>
                        
                    <div class="form-group row">
                        <label for="inputSummary" class="col-sm-2 col-form-label">Summary</label>
                        <div class="col-sm-4">
                            <input type="text" name="summary" class="form-control" id="inputSummary">
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
    
    <div class="container center_menu">
        <div class="row">
            <div class="col=md-12 text-center">
                <h3>Category</h3>
                <div class="thread-parent">
                    <p>Sport forum</p>
                    <img src="http://i.imgur.com/u6NNIP6.jpg">
                    <p>News</p>
                    <img src="http://i.imgur.com/6Df0zT4.jpg">
                    <p>Education</p>
                    <img src="http://i.imgur.com/xNbkboD.jpg">
                    <p>Student Union</p>
                    <img src="http://i.imgur.com/lOqi4O6.jpg">
                </div>
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
