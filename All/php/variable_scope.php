<?php
$x = 5; //global scop
function test(){
    // will cause un error ot the variable will not have any value in this case
    echo "variable inside a function is: $x";
};
test();
    echo "<p>Variable x outside function is: $x</p>";
    
?>

<?php
    // using the global keyword
   
    $x = 4;
    $y = 10;
    function testOne(){
        global $x, $y;
        $y = $x+$y;
    }
    testOne();
    echo "<p>$y</p>";


    // using the GLOBAL Arr"p>ay</p>"
    $x = 4;
    $y = 10;
    function testTwo(){
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    testTwo();
    echo "<p>$y</p>"
?>