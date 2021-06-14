<?php 
    include('../control/control.php');

    session_start();

    

    if(isset($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);
        $_SESSION['id'] = $_GET['id'];


        $pizza = getPizza($id);
    }
    if(isset($_POST['edit'])){
        $errors = checkError($_POST['title'],$_POST['email'], $_POST["ingredients"]);
        if(!array_filter($errors)){
            $title = htmlspecialchars($_POST['title']);
            $email = htmlspecialchars($_POST['email']);
            $ingredients = htmlspecialchars($_POST['ingredients']);


            $id_to_edit = htmlspecialchars($_SESSION['id']);
            editPizza ($id_to_edit, $title, $email, $ingredients);
        }
    }
    

?>










<!DOCTYPE html>
<html lang="en">
    <title>Edit</title>
    <?php include './header.php'?>
        <h4 class="center grey-text">Edit the Pizza</h4>
        <form class="white" action="edit.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($pizza?$pizza['email']:$_POST['email']); ?>">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($pizza?$pizza['title']:$_POST['title']); ?>">
        <div class="red-text"><?php echo $errors['title'] ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($pizza?$pizza['ingredients']:$_POST['ingredients']); ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="container center m-5">
            <a href="index.php" class="btn brand z-depth-0">Cancle</a>
            <input type="submit" name="edit" value="Edit" class='btn brand z-depth-0' >
            
        </div>
        <h3 class="red-text" ><?php echo $err ?></h3>
        </form>
    <?php include './footer.php'?>
</html>