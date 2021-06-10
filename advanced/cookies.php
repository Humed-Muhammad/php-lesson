<?php
    $name = 'Clientone';
    $value = 'Your daily routin';
    setcookie($name, $value, time()-86400, "/");
?>

<html>
    <body>
        <?php 
            if(isset($_COOKIE[$name])){
                echo 'cookie is setted which cookie';
                echo  "value is 'your daily routin'";
            }else{
                echo 'cookie is not setted';
            }
        ?>
    </body>
</html>