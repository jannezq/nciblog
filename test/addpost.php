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

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $author = $_SESSION['username'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    
    $sql = $conn->query("INSERT INTO posts VALUES('', '$title', '$summary', '$author', '$category', '$content')");
    
   


    
    header('Location: addpost.php');
    exit();
}

?>
    Hello <?php if(isset($_SESSION['username']))
    {
    echo ''.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');
    }
    ?>

<form method="post">
    <center>
    <table border = "1">
        <tr>
            <td>Title</td><td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Summary</td><td><input type="text" name="summary"></td>
        </tr>
        <tr>
            <td>Author</td><td><input type="text" name="author" value="<?php $_SESSION['username'];?>"></td>
        </tr>
        <tr>
            <td>Category</td><td><input type="text" name="category"></td>
        </tr>
        <tr>
            <td>Content</td><td><input type="text" name="content"></td>
        </tr>
        <tr>
            <center><td colspan = "4"><input type="submit" name="submit" value="submit"></td></center>
            
        </tr>
    </table>
    </center>
</form>


<h3><?php echo $record; ?></h3>