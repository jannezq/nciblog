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



$sql_display = $conn-> query("SELECT * FROM posts");



$user = '';

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
   $user .='<td>'.$content.'</td>';

   $user .='</tr>';
   
}





?>

<table>
    <tr>
        <th>Title</th>
        <th>Summary</th>
        <th>Author</th>
        <th>Category</th>
        <th>Content</th>
    </tr>
    <?php echo $user; ?>
</table>

<h3><?php echo $record; ?></h3>