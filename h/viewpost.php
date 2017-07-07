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
?>
	
	<div id="wrapper">

		<h1>Blog</h1>
		<hr />
		<p><a href="home.php">Blog Index</a></p>


	<?php
	$id=$row['id'];
	
	$query="SELECT * FROM posts";
	if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query.=" WHERE ID=$id";

    
	$result=mysqli_query($conn , $query);
	if(mysqli_num_rows($result) > 0) {
		while($row=mysqli_fetch_assoc($result)) {
				echo "<br>Category: ". $row["category"]. " <br>". $row["title"]. "<br>Written by " . $row["author"] . "<br>";
				echo '<p>'.$row['content'].'</p>';
		}
	}
	}
	?>
	
	</div>