<?php
    $x =0;
    $done = true;
    while($done){
        if($x <10){
            echo ++$x.'<br>';
        }
        else{
            $done = false;
        }
    }

?>