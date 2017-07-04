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
		/*try {
				$stmt = $conn->query('SELECT id, title, summary, author, category, content FROM posts ORDER BY id DESC');
				while($row = $stmt->fetch()){
					
					echo '<div>';
						echo '<h1><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'</a></h1>';
						echo '<p>Written by'.$row['author'].'</p>';
						echo '<p>'.$row['content'].'</p>';				
						echo '<p><a href="viewpost.php?id='.$row['id'].'">Read More</a></p>';				
					echo '</div>';
				}
			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>*/
		
	/*	   $sql = 'SELECT id, title, summary, author, category, content FROM posts';
   mysql_select_db('nciblog');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "Title :{$row['title']}  <br> ".
         "Summary {$row['summary']} <br> ".
         "Author : {$row['author']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn); */
   $sql = "SELECT id, title, summary, author, category, content FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<h1><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'</a></h1>';
        echo "<br>Category: ". $row["category"]. " <br>". $row["title"]. "<br>Written by " . $row["author"] . "<br>";
        echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';
    }
} else {
    echo "0 results";
}

$conn->close();
   ?>

	//</div>
	
	




</body>
</html>