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

<?php foreach ( $results['posts'] as $posts ) { ?>

        <li>
          <h2>
            <span class="title"><?php echo date('j F Y', $posts->title)?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $posts->id?>"><?php echo htmlspecialchars( $posts->title )?></a>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $posts->summary )?></p>
        </li>

<?php } ?>

      </ul>

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="./">Return to Homepage</a></p>
