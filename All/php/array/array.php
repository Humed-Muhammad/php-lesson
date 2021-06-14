<?php

    // indexed arry
    $peoples = ['humed', 'feysel', 'sadam'];
    echo $peoples[1]. '<br>' ;

    // associative arrays
    $assoArry = ['humed'=>45, 'feysel'=>65];

    foreach($assoArry as $key => $val){
        echo "key = $key and the value = $val <br>";
    };

    //multidimentional array
    $cars = [
        ['volvo',22,18],
        ['MWB',55,23],
        ['Land rover',43,33]
    ];

    for($row = 0; $row < 3; $row++){
        echo "<h4> Row number $row </h4>";
        echo '<ul>';
        rsort($cars[$row]);
        for($col = 0; $col < 3; $col++){

            echo "<li>". $cars[$row][$col] ."</li>";
        };
        echo '</ul>';
    }

?>
