<?php

include '../db/connect_to_database.php';


//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$delete = "DELETE FROM posts WHERE id = $id";
//$result.=" WHERE ID=$id";

$result = mysqli_query($conn, $delete) or die(mysqli_error());
if($result==true){
    header("Location:vieworders.php");
}
else{
    echo "ERROR";
}
 
?>