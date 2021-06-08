<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Car{
        public $model;
        public $color;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
            
        }
        public function message(){
            return "My car is a ". $this->color." ". $this->model;
        }
    }
    $myCar = new Car('Red','Suzuki');
    echo strlen($myCar->message());
?>

</body>
</html>
