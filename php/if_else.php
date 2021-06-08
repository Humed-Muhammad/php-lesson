<?php

    $time = date('H');

    if($time<'12'){
        echo '<h2>Have i good day</h2>';
    }
    elseif($time>=12 && $time<20){
        echo "<h2> have a good-afternoon </h2>";
    }
    else{
        echo "<h2> have a good-night </h2>";
    }

?>