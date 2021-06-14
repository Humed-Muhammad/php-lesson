<?php 
    //connect to db
    $conn = mysqli_connect("localhost", "humed", "hum.", "humed_pizza");

    if(!$conn){
        echo "Connection error: ". mysqli_error($conn);
    }
?> 