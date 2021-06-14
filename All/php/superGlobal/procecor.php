<?php
            if($_SERVER["REQUEST_METHOD"]=='POST'){
                $name = $_POST['name'];
                if(empty($name)){
                    echo 'Name is empty';
                }
                else{
                    echo $name;
                    ECHO '<br>';
                    echo $_SERVER["REQUEST_METHOD"];
                    ECHO '<br>';
                    echo $_SERVER['PHP_SELF'];
                    ECHO '<br>';
                    echo $_REQUEST['name'];
                }
            }
        ?>
</body>