<?php 
   class Fruit{
       // Properties
       public $name;
       public $color;
       function set_name($name, $color){
           $this->name= $name;
           $this->color= $color;
       }
       function get_name(){
           return [$this->name, $this->color];
       }
   } 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php 
        $Apple = new Fruit();
        $Banana = new Fruit();

        $Apple->set_name('Apple');
        $Banana->set_name('Banana');

        var_dump($Apple instanceof Fruit)

        // echo $Apple->get_name().'<br>';
        // echo $Banana->get_name()

    ?>
</body>
</html>