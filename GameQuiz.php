<?php



include 'db/connect_to_database.php';

session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: login_page.php");// send to login page
   exit;
}

?>

<!DOCTYPE html>
<!-- HTML5 Hello world by kirupa - http://www.kirupa.com/html5/getting_your_feet_wet_html5_pg1.htm -->
<html lang="en-us">
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/slidercss.css">
	<link rel="stylesheet" href="css/eventscss.css">
	<link rel="stylesheet" href="css/clubsandSoc.css">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="mainJavascript.js"></script>
  	
  	
	<meta charset="utf-8">
	
	<title>Hello...</title>
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
</style>

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
					<li><a href="forum.php">Forum</a></li>
					<li><a href="EventsMain.php">Events</a></li>
					<li><a href="ClubsandSocsMain.php">Clubs & Socs.</a></li>
					<li><a href="">Quiz</a></li>
					<li><a href="shop/shop.php">Shop</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="jumbotron">
			<h1>Weekly Quiz</h1>
			<p></p>
		</div>
	</div>
	
	<div class="container">
	       <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-12">
            <h1> Quiz Game </h1>
                <form name="quiz" id="formQuiz">
                <ol>
                <li> What do you call a time span of one thousand years ?</li>
                <ul>
                <li><input type="radio"   name = "q1" value = "wrong">Infinity.</input></li>
                <li><input type="radio"   name = "q1" value = "correct"> Millennium.</input></li>
                <li><input type="radio"   name = "q1" value = "wrong">Gundogan.</input></li>
                <li><input type="radio"   name = "q1" value = "wrong">Oblivion.</input></li>
                
                </ul>
                <li> Who is the only player to win back-to-back trebles (domestic title, domestic cup and Champions League) in European club football?</li>
                <ul>
                <li><input type="radio"   name = "q2" value = "wrong">Alexander Pato</input></li>
                <li><input type="radio"   name = "q2" value = "wrong">CR'7</input></li>
                <li><input type="radio"   name = "q2" value = "wrong">Roberto Firmino</input></li>
                <li><input type="radio"   name = "q2" value = "correct">Samuel Eto'o</input></li>
                <li><input type="radio"   name = "q2" value = "wrong">	Roberto Carlos</input></li>
                </ul>
                <li> Pick the four main human blood groups?</li>
                <ul>
                <li><input type="radio"   name = "q3" value = "wrong">A,E,IO and U.</input></li>
                <li><input type="radio"   name = "q3" value = "wrong">J,A,Y and Z.</input></li>
                <li><input type="radio"   name = "q3" value = "wrong">AA,BB,CC and DD.</input></li>
                <li><input type="radio"   name = "q3" value = "correct"> A, B, AB and O.</input></li>
                </ul>
                <li> What is the average temperature of the human body, in degrees centigrade?</li>
                <ul>
                <li><input type="radio"   name = "q4" value = "wrong">	50.</input></li>
                <li><input type="radio"   name = "q4" value = "wrong">1000.</input></li>
                <li><input type="radio"   name = "q4" value = "correct">37.</input></li>
                <li><input type="radio"   name = "q4" value = "wrong">100.</input></li>
                </ul>
                <li> Which fictional character lived at 221b Baker Street? </li>
                <ul>
                <li><input type="radio"   name = "q5" value = "correct">Sherlock Holmes.</input></li>
                <li><input type="radio"   name = "q5" value = "wrong">Inspector Gadget.</input></li>
                <li><input type="radio"   name = "q5" value = "wrong">House.</input></li>
                <li><input type="radio"   name = "q5" value = "wrong">Columbo.</input></li>
                </ul>
                <li> True or False, The highest scoring match footbal matvh ever recorded was 149-0?</li>
                <ul>
                <li><input type="radio"   name = "q6" value = "wrong">False</input></li>
                <li><input type="radio"   name = "q6" value = "correct">True</input></li>
                </ul>
                <li> True or False, In Greek mythology, the fire stole for mankind's benefit Prometheus?</li>
                <ul>
                <li><input type="radio"   name = "q7" value = "correct">True</input></li>
                <li><input type="radio"   name = "q7" value = "wrong">False</input></li>
                </ul>
                <li> Which branch of mathematics deals with the sides and angles of triangles, and their relationship to each other ?</li>
                <ul>
                <li><input type="radio"   name = "q8" value = "wrong">Algabra.</input></li>
                <li><input type="radio"   name = "q8" value = "wrong">Matrix.</input></li>
                <li><input type="radio"   name = "q8" value = "correct">Trigonometry.</input></li>
                <li><input type="radio"   name = "q8" value = "wrong">Pie.</input></li>
                </ul>
                <li> Which field of artistry did Louis Daguerre develop?</li>
                <ul> 
                <li><input type="radio"   name = "q9" value = "wrong">Musical Theater.</input></li>
                <li><input type="radio"   name = "q9" value = "wrong">Museums.</input></li>
                <li><input type="radio"   name = "q9" value = "wrong">Dance.</input></li>
                <li><input type="radio"   name = "q9" value = "correct">Photography.</input></li>
                </ul>
                </ol>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <input  type = "button" value = "Welcome" onClick ="sayhello()" />
                        <input  type = "submit" value = "submit" onClick="checkAll()" />
                        <input  type = "reset" value = "clear" > </input>
                        <textarea rows ="20" cols="60" id = "answersBox"> The correct answer will display here</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
	

 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/quiz.js"></script>

		
	
	

	

	

</body>
</html>
