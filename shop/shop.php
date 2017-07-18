<?php
include '../db/connect_to_database.php';
   
$username = $_SESSION["username"];

session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: ../login_page.php");// send to login page
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
				<a class="navbar-brand" href="../home.php">StudentGlobe</a>
			</div>
			<div id="home" class="collapse navbar-collapse" id="NavigationBar">
				<ul class="nav navbar-nav navbar-right">
					<!--<li><a href="">Hello <?php  echo $_SESSION["username"];  ?></a></li>-->
					<li><div class="dropdown dropMenu">
						    <button class="dropbtn">Hello <?php  echo $_SESSION["username"];  ?></button>
						    <div class="dropdown-content">
						      <a href="../admin/admin_page.php"><?php  echo $_SESSION["username"];  ?> Post</a>
						      <a href="../logout.php">Logout</a>
						    </div>
						</div> 
					 </li>
					<li><a href="../home.php">About</a></li>
					<li><a href="../forum.php">Forum</a></li>
					<li><a href="../EventsMain.php">Events</a></li>
					<li><a href="../ClubsandSocsMain.php">Clubs & Socs.</a></li>
					<li><a href="../GameQuiz.php">Quiz</a></li>
					<li><a href="../home.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
			<div class="jumbotron text-center">
			<h1>Welcome to the </h1>
			<h1>NCI Store </h1>
		</div>
 
<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/jumper.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Sweater" readonly><br></br>
   
   <input type="hidden" type="text" name="author" value="<?php  echo $_SESSION["username"];  ?>" readonly>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/tshirt.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="T-Shirt" readonly><br></br>
   
   <input type="hidden" type="text" name="author" value="<?php  echo $_SESSION["username"];  ?>" readonly>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/jacket.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Jacket" readonly><br></br>
   
   <input type="hidden" type="text" name="author" value="<?php  echo $_SESSION["username"];  ?>" readonly>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/hat.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Hat" readonly><br></br>
   
   <input type="hidden" type="text" name="author" value="<?php  echo $_SESSION["username"];  ?>" readonly>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>


<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/scarf.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Scarf" readonly><br></br>
   
   <input type="hidden" type="text" name="author" value="<?php  echo $_SESSION["username"];  ?>" readonly>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $size = $_POST['size'];
    $colour = $_POST['colour'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $author = $_POST['author'];

    $sql = $conn->query("INSERT INTO product VALUES('', '$name', '$size', '$colour', '$quantity', '$price', '$author')");
    
   // header('Location: shop.php');
    exit();
}

?>

</body>
</html>