<?php
include '../db/connect_to_database.php';

if(isset($_POST['submit'])){
    $oNumber = $_POST['oNumber'];
    $name = $_POST['name'];
    $size = $_POST['size'];
    $colour = $_POST['colour'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = $conn->query("INSERT INTO shop VALUES('', '$oNumber', '$name', '$size', '$colour', '$quantity', '$price')");
    
    header('Location: shop.php');
    exit();
}


?>