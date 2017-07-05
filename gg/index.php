<?//php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>
<body>

	<div id="wrapper">

		<h1>Blog</h1>
		<hr />

		<?php
			try {
				$stmt = $db->query('SELECT id, title, summary, author, category, content  FROM posts');
				while($row = $stmt->fetch()){
					
					echo '<div>';
						echo '<h1><a href="viewpost.php?id='.$row['id'].'">'.$row['postTitle'].'</a></h1>';
						echo '<p>'.$row['category'].'</p>';
						echo '<p>'.$row['author'].'</p>';				
						echo '<p><a href="viewpost.php?id='.$row['id'].'">Read More</a></p>';				
					echo '</div>';
				}
			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>

	</div>


</body>
</html>