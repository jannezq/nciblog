<?php

include '../db/connect_to_database.php';

session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: ../login_page.php");// send to login page
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
    
    <title>Student Globe</title>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,700);

body {
    font-family: 'Quicksand', sans-serif;
    font-weight:700;
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

footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:70px;   /* Height of the footer */
   padding-top:20px;
   background:#337ab7;
   color: #fff;
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
                <a class="navbar-brand" href="../home.php">Student Globe</a>
            </div>
            <div class="collapse navbar-collapse" id="NavigationBar">
                <ul class="nav navbar-nav navbar-right">
                   <li><div class="dropdown dropMenu">
						    <button class="dropbtn">Hello <?php  echo $_SESSION["username"];  ?></button>
						    <div class="dropdown-content">
						   		<a href="admin/admin_page.php"><?php  echo $_SESSION["username"];  ?> Post</a>
						   		<a href="../logout.php">Logout</a>
						    </div>
						</div> 
					 </li>
					<li><a href="../forum.php">Forum</a></li>
					<li><a href="../EventsMain.php">Events</a></li>
					<li><a href="../ClubsandSocsMain.php">Clubs & Socs.</a></li>
					<li><a href="../GameQuiz.html">Quiz</a></li>
                </ul>
            </div>
            
        </div>
    </nav>
    
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Add New Post</h1>
        </div>
    </div>
    
    <div class="container container-fluid bg-grey center_div">
        <a href="admin_page.php"><button>Back</button></a>
        <hr>
        <div class="row">
                <form  id="register-form" action="add.php" method="post" role="form" style="">
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control" id="inputTitle" required>
                        </div>
                            
                        <label for="inputAuthor" class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-4">
                            <input type="text" name="author" class="form-control" id="inputAuthor" value="<?php  echo $_SESSION["username"];  ?>" readonly>
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

	<!-- Footer -->
	<footer class="container-fluid bg-4 text-center" >
		<a href="#myPage" title="To Top">
    		<span></span>
  		</a>
  		<p>Bootstrap Theme Made By <strong>Jovellyn Quiapos</strong></p>
	</footer>

    
   
</body>
</html>
