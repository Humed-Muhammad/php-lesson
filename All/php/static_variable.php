<?php 

    function staticVar(){
        static $x = 0;
        echo $x;
        $x++;
    }
    staticVar();
    echo '<br>';
    staticVar();
    echo '<br>';
    staticVar();
    echo '<br>';

?>