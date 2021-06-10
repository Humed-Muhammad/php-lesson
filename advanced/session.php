<?php 
    //start the session
    session_start()
?>

<html>
    <body>
        <?php 
            // set session vars
            $_SESSION['name'] = 'Humed';
            $_SESSION['animal'] = 'cat';

            echo 'session vars are set'
        ?>
    </body>
</html>
