<?php 

    class Model{
        private $result;
        private $conn;
        private $id;

        function __construct(){
           $this->conn = mysqli_connect("localhost","humed","hum.","humed_pizza");
        }

        function getID($id){
            return $this->id = $id;
        }

        function Excute ($query) {
            $this->result = mysqli_query($this->conn,$query);
            return $this->result;
        }
        function fetchAllPizzas(){
            if($this->result){
                return (mysqli_fetch_all($this->result, MYSQLI_ASSOC));
            }else{
                return "Query Error Failed to connect to databse!";
            }
        }

        function fetchOnePizza(){
            if($this->result){
                return mysqli_fetch_assoc($this->result);
            }else{
                return "Query Error Failed to connect to databse!";
            }
        }

    }
    
    
    



?>

