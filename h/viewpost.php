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


   //$sql = "SELECT id, title, summary, author, category, content FROM posts";
/*   
$stmt = $conn->prepare("SELECT id, title, summary, author, category, content FROM posts WHERE id = :id");
$stmt->execute(array(":id" => $_GET["id"]));
$row = $stmt->fetch();
*/

?>
	
	<div id="wrapper">

		<h1>Blog</h1>
		<hr />
		<p><a href="home.php">Blog Index</a></p>


	<?php
	
	$query="SELECT * FROM posts";
	$result=mysqli_query($conn , $query);
	if(mysqli_num_rows($result) > 0) {
		while($post=mysqli_fetch_assoc($result)) {
					$id=$post['id'];
					$title=$post['title'];
					$desc=$post['summary'];
					$tags=$post['author'];
					$author=$post['category'];
					$time=$post['content'];
					$shortpost=1;  /* short post with read more  */
          $views=showViews($id,$author);
		}
	}
	?>
	
	</div>