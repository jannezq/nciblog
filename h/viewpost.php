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
			echo '<div>';
				echo '<h1>'.$row["title"].'</h1>';
				echo '<p>'.$row["content"].'</p>';				
			echo '</div>';
		?>

<?php

   $sql = "SELECT id, title, summary, author, category, content FROM posts";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<h1><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'</a></h1>';
        echo "<br>Category: ". $row["category"]. " <br>". $row["title"]. "<br>Written by " . $row["author"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
	</div>