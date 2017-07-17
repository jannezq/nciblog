    <?php
   
                       $sql = "SELECT * FROM product";
                       $result = $conn->query($sql);
                    
                       if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<p>'.$row['name'].'</p>';
                            echo '<p>Size: '.$row['size'].'</p>';
                            echo '<p>Quantity: '.$row['quantity'].'</p>';
                            echo '<p>Colour: '.$row['colour'].'</p>';
                            echo '<p>Price: '.$row['price'].'</p>';
                            
                            
                        }
                        } else {
                            echo "0 results";
                        }
                    
                         $conn->close();
                       ?>