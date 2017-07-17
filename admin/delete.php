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
echo "aaaaaawww no connection?";


//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$delete = "DELETE FROM posts WHERE id = $id";
//$result.=" WHERE ID=$id";

$result = mysqli_query($conn, $delete) or die(mysqli_error());
if($result==true){
    header("Location:admin_page.php");
}
else{
    echo "ERROR";
}
 
?>