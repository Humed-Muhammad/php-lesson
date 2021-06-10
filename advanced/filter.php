<?php
    $int = 3000;

    // if(!filter_var($int, FILTER_VALIDATE_INT) == false){
    //     echo "It is integer";
    // }else{
    //     echo 'It is not integer';
    // }

    $min = 12;
    $max = 400;

    if(filter_var($int, FILTER_VALIDATE_INT, array('options'=>array('min_range'=>$min, 'max_range'=>$max)))==false){
        echo "the number is not in the range";
    }else{
        echo "the number is in range";
    }
?>

