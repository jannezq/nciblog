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
<html>
<body>
 <a href="logout.php">logout</a> 
 <a href="addpost.php">Add New Post</a>
 
	<div id="wrapper">

		<h1>Blog</h1>
		<hr />

		<?php
   
   $sql = "SELECT id, title, summary, author, category, content FROM posts";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<h1><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'</a></h1>';
        echo "<br>Category: ". $row["category"]. " <br> ". $row["summary"]. " <br> Written by " . $row["author"] . " <br> ";
        echo '<p><a href="viewpost.php?id='.$row['id'].'">Read More</a></p>';
    }
    } else {
        echo "0 results";
    }

     $conn->close();
   ?>
</div>
</body>
</html>