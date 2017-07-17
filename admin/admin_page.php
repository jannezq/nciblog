<?php

include '../db/connect_to_database.php';

session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: login_page.php");// send to login page
   exit;
}

$username = $_SESSION["username"];
$sql_display = $conn-> query("SELECT * FROM posts WHERE author = '$username'");





while ($row = mysqli_fetch_array($sql_display)) {
   
   $title =  $row["title"];
   $summary =  $row["summary"];
   $author =  $row["author"];
   $category =  $row["category"];
   $content =  $row["content"];

   
   $user .='<tr>';
   $user .='<td>'.$title.'</td>';
   $user .='<td>'.$summary.'</td>';
   $user .='<td>'.$author.'</td>';
   $user .='<td>'.$category.'</td>';
   $user .='<td><button><a href="edit.php?id='.$row['id'].'">Edit</a></button><button><a href="delete.php?id='.$row['id'].'">Delete</a></button></td>';

   $user .='</tr>';
   
}





?>


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
    
    <title>Admin</title>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,700);

body {
    font-family: 'Quicksand', sans-serif;
    font-weight:700;
}

th, td {
    padding: 15px;
    text-align: left;
}

.navbar{
    color: rgb(119, 119, 119);
    font-size: 12px;
    letter-spacing: 5px;
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
					<li><a href="../GameQuiz.php">Quiz</a></li>
                </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-right"><?php  echo $_SESSION["username"];  ?>'s Admin Page</h1>
        </div>
    </div>
    
    
    <div class="container">
        <a href=addpost.php><button>Add New Post</button></a>
        <hr>
        <div class="table-responsive">
            <thead>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th></th>
                        <th></th>
                    </tr>
                <?php echo $user; ?>
                </table>
                   <h3><?php echo $record; ?></h3>
            </thead>
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

