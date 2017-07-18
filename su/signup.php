<?php

include '../db/connect_to_database.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = $conn->query("INSERT INTO su VALUES('', '$fname', '$lname', '$username', '$password')");
    
    header('Location: login.php');
    exit();
}

?>