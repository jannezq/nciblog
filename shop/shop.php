<?php
include '../db/connect_to_database.php';




?>

<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 50%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
 </head>
<body>
 
<button id="myBtn" action="ty.php">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/jumper.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Sweater" readonly><br></br>
   
   User<input type="text" name="author"><br><br>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/tshirt.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="T-Shirt" readonly><br></br>
   
   User<input type="text" name="author"><br><br>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/jacket.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Jacket" readonly><br></br>
   
   User<input type="text" name="author"><br><br>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/hat.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Hat" readonly><br></br>
   
   User<input type="text" name="author"><br><br>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>


<form  id="shop"  method="post" role="form" style="">
<img src="../images/shop/scarf.jpg" height="100" width="200"></img></br></br>
   <input style="border: none" type="text" name="name" value="Scarf" readonly><br></br>
   
   User<input type="text" name="author"><br><br>
   
   size<select name="size">
    <option value="Small">Small</option>
    <option value="Mediium">Mediium</option>
    <option value="Large">Large</option>
  </select><br><br>
   
   colour<select name="colour">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Grey">Grey</option><br><br>
  </select><br><br>
   
   quantity<input type="number" name="quantity" min="1" max="9"><br><br>
   
   <input style="border: none" type="number" name="price" value="19.99" readonly><br><br>
  
  <input type="submit" value="Add" name="submit">

</form>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $size = $_POST['size'];
    $colour = $_POST['colour'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $author = $_POST['author'];

    $sql = $conn->query("INSERT INTO product VALUES('', '$name', '$size', '$colour', '$quantity', '$price', '$author')");
    
   // header('Location: shop.php');
    exit();
}

?>

</body>
</html>