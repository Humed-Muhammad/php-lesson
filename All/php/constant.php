<?php

// constant array

    define('peoples',[
        'humed',
        'ali'
    ]);
    echo peoples[1].'<br>';
// constant variable
    define("name","Humed");

    echo name.'<br>';


    //global are constant by defualt
    function test(){
        echo "<h1>". name ."</h1>";
    };
    test();
?>