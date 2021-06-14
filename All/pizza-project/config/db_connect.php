<?php 
 // connect to mysql (mysqli)
    
    $conn = mysqli_connect('localhost', 'humed', 'hum.','humed_pizza');
    
    if(!$conn){
        echo "Connection error: ". mysqli_connect_error();
    }


?>