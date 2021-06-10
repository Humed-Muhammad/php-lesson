<?php 
    session_start();
?>

<html>
    <body>
        <?php 
            echo "Name is ". $_SESSION['name']. '<br>';
            echo "Animal is ". $_SESSION['animal']. '<br>';
            print_r ($_SESSION)
        ?>
    </body>
</html>