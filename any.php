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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $sql = $conn->query("INSERT INTO user VALUES('', '$fname', '$lname')");
    
   


    
    header('Location: any.php');
    exit();
}

$sql_display = $conn-> query("SELECT * FROM user");



$user = '';

while ($row = mysqli_fetch_array($sql_display)) {
   $fname =  $row["fname"];
   $lname =  $row["lname"];
   
   $user .='<tr>';
   $user .='<td>'.$fname.'</td>';
   $user .='<td>'.$lname.'</td>';
   $user .='</tr>';
   
}





?>


<form method="post">
    <input type="text" name="fname">
    <input type="text" name="lname">
    <input type="submit" name="submit" value="submit">
    
</form>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php echo $user; ?>
</table>

<h3><?php echo $record; ?></h3>