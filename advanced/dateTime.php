

<?php
    #$d=strtotime("yesterday");
    #echo date("Y-m-d h:i:sa", $d) . "<br>";
    #
    #$d=strtotime("next Saturday");
    #echo date("Y-m-d h:i:sa", $d) . "<br>";
    #
    #$d=strtotime("+3 Months");
    #echo date("Y-m-d h:i:sa", $d) . "<br>";

    #$d = mktime(4, 12, 59, 5, 14, 2015);

    #echo date('Y-m-d h:i:sa' , $d) .'<br>';

    // $startD = strtotime('saturday');
    // $endD = strtotime('+6 weeks', $startD);
    // while($startD < $endD){
    //     echo date('M-d',$startD).'<br>';
    //     $startD = strtotime('+1 weeks',$startD);
    // }

    $d1 = strtotime('July 8');
    $d2 = ceil(($d1-time())/60/60/24);

    // echo date('Y/M/d', time());
    echo date('l');

  

    // echo "There are " . $d2 . " days until 8th of July";
?>
