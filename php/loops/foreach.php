
<?php

    $arry = ['Humed', 'Ali', 'Hussen'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
    
</head>
<body>
    <h1>Names</h1>
    <ul>
        <?php foreach($arry as $name){ ?>
            <h3> <?php echo $name ?> </h3>
        <?php } ?>
    </ul>
</body>
</html>