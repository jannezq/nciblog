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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    
    $sql = $conn->query("INSERT INTO users VALUES('', '$fname', '$lname', '$username', '$password', '$email')");
    
   


    
    header('Location: home.html');
    exit();
}

?>


<form method="post">
    <center>
    <table border = "1">
        <tr>
            <td>First Name</td><td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Second Name</td><td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Username</td><td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td>Email</td><td><input type="text" name="email"></td>
        </tr>
        <tr>
            <center><td colspan = "4"><input type="submit" name="submit" value="submit"></td></center>
            
        </tr>
    </table>
    </center>
</form>
