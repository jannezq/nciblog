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
echo "Connected successfully";

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
<!DOCTYPE html>
<html>
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
					<li><a href="#about">About</a></li>
					<li><a href="addpost.php">Forum</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="clubnsoc.html">Clubs & Socs.</a></li>
					<li><a href="GameQuiz.html">Quiz</a></li>
				</ul>
			</div>
		</div>
	</nav>


<form method="post">
    <center>
    <table border = "1">
        <tr>
            <td>Title</td><td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Summary</td><td><input type="text" name="summary"></td>
        </tr>
        <tr>
            <td>Author</td><td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td>Category</td><td><input type="text" name="category"></td>
        </tr>
        <tr>
            <td>Content</td><td><input type="text" name="content"></td>
        </tr>
        <tr>
            <center><td colspan = "4"><input type="submit" name="submit" value="submit"></td></center>
            
        </tr>
    </table> 
    

    </body>
</html>

	
    </center>
</form>


<h3><?php echo $record; ?></h3>