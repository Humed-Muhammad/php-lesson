<?php

    include('../control/control.php');

    if(isset($_POST['submit'])){
        $errors = checkError($_POST['title'],$_POST['email'], $_POST["ingredients"]);
        if(!array_filter($errors)){
            $email = htmlspecialchars($_POST['email']);
            $title = htmlspecialchars($_POST['title']);
            $ingredients = htmlspecialchars($_POST['ingredients']);

            addPizza($title,$email,$ingredients);
            
        }

        if($_POST['clear']){
            $email ="";
            $title ="";
            $ingredients ="";
        }
}

?>




<!DOCTYPE html>
<html lang="en">
    <title>Add Pizza</title>
    <?php include('./header.php') ?>
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($_POST['title']); ?>">
        <div class="red-text"><?php echo $errors['title'] ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($_POST['ingredients']); ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="container center m-5">
            <input type="submit" name="submit" value="submit" class='btn brand z-depth-0' >
            <input type="submit" name="clear" value="Clear Form" class='btn brand z-depth-0' >
        </div>
        <h3 class="red-text" ><?php echo $err ?></h3>
    </form>
    <?php include('./footer.php') ?>
</html>