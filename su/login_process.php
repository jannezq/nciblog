<?php
include '../db/connect_to_database.php'; //connect the connection page
  
if(empty($_SESSION)) // if the session not yet started 
   session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
   header("Location: login.php");
   exit; 
}
$username = $_POST['username'];

//3.1.2 Checking the values are existing in the database or not ||||  and password='$password' |||| $password = $_POST['password'];
$query = "SELECT * FROM su WHERE username='$username' ";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
//header("Location: signedInHome.php");
header("Location: vieworders.php");
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";


}

?>