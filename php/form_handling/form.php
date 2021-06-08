<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_handling</title>
    <style>
        form{
            width:300px;
            height: 100%;
            background: 'light-gray';
            display: flex;
            flex-direction: column;
            justfy-content: center;
            align-items: cenetr;
            position: absolute;
            top:50%;
            left
        }
    </style>
</head>
<body>
    <form action="<?php if(empty($_POST['name'])&empty($_POST['email'])){
        echo $_SERVER['PHP_SELF'];
    }else{
        echo "./handling.php";
    } ?>" method='POST'>
        Name: <input type="text" name="name">
        <br>
        Email: <input type="email" name="email">
        <br>
        <input type="submit" value="Submit">

        <h3><?php 
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            echo 'Please complet the form';
        }

        ?></h3>
       
    </form>
</body>
</html>

        