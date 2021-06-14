<?php

    include('../model/model.php');

    function getPizzas (){
        $sql_one = "SELECT title, ingredients, id FROM pizzas";
    
        $pizzas = new Model();
        if($pizzas-> Excute($sql_one)){

            return $pizzas->fetchAllPizzas();

        }

    }

     function getPizza(){
        $pizza = new Model();

        $id = $pizza->getID(36);
   
        $sql_two = "SELECT * From pizzas WHERE id = $id";
        if($pizza->Excute($sql_two)){
            
            return $onePizza = $pizza->fetchOnePizza();
   
        }
   
     }
?>