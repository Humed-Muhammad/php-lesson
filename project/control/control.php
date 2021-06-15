<?php

    include('../model/model.php');

    $redirect = "Location: index.php";

    function checkError($title,$email,$ingredients){
        $errors = array("email"=>'', "title"=>'', "ingredients"=>'');

        //email
        if(empty($email)){
            $errors['email'] = "Email is required!" ;
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Email is invalid";
            }
        }
    
        // title
        if(empty($title)){
            $errors['title'] = 'Title is required!';
        }else{
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = "Title must only have letters and spaces!";
            }
    
        }
    
        // ingredients
        if(empty($ingredients)){
            $errors['ingredients'] = 'At least one ingredient is required!';
        }else{
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
                $errors['ingredients'] = "Ingredients must be a comma separated list";
            }
        }
        return $errors;
    }

    function getPizzas ($term){
        $pizzas = new Model();
        if($term){
            $sql_term = "SELECT title, ingredients, id FROM pizzas WHERE title LIKE '$term%' limit 100";
            if($pizzas-> Excute($sql_term)){

                return $pizzas->fetchAllPizzas();

            }
        }else{
            $sql_one = "SELECT title, ingredients, id FROM pizzas";
            if($pizzas-> Excute($sql_one)){

                return $pizzas->fetchAllPizzas();

            }
        }
        

    }

     function getPizza($id){
        $pizza = new Model();
   
        $sql_two = "SELECT * From pizzas WHERE id = $id";
        if($pizza->Excute($sql_two)){
            
            return $pizza->fetchOnePizza();
   
        }
   
     }

     function deletePizza($id){
        global $redirect;
        $delete = new Model();
        $sql_delete = "DELETE FROM pizzas WHERE id = $id";

        if($delete->Excute($sql_delete)){
            return header($redirect);
        }
     }

     function addPizza($title, $email, $ingredients){
         global $redirect;
         $add = new Model();


         $sql_add = "INSERT INTO pizzas(title,email,ingredients) VALUE('$title','$email','$ingredients')";

         if($add->Excute($sql_add)){
             return header($redirect);
         }else{
            return "500 Server Error!";
         }
     }

     function editPizza($id, $title, $email, $ingredients){
        global $redirect;
        $edit = new Model();
        $sql_edit = "UPDATE pizzas SET title='$title',email='$email',ingredients='$ingredients' WHERE id=$id";
        if($edit->Excute($sql_edit)){
            return header($redirect);
        }else{
            return "Connection error during Edit";
        }
     }
?>