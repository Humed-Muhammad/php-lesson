<?php

    // $file = fopen('text.txt','r') or die('Unable to open the file');
    // while(!feof($file)){
    //     echo fgetc($file);
    // }
    // fclose($file);

    // file creating
    $file = fopen('newfile.txt', 'w') or die('Unable to open!') ;
    fwrite($file, "Humed\n");
    fwrite($file,'Essie');
    fclose($file);
?>

