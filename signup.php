<?php

include 'db/connect_to_database.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    
    $sql = $conn->query("INSERT INTO users VALUES('', '$fname', '$lname', '$username', '$password', '$email')");
    
    header('Location: signedInHome.php');
    exit();
}

?>