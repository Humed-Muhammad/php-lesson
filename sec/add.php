<?php 

    $errors = array("email"=>'', "title"=>'', "ingredients"=>'');
    if(isset($_POST['submit'])){

        // email
        if(empty($_POST['email'])){
            $errors['email'] = "Email is required!" ;
        }else{
            $email =  $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Email is invalid";
            }
        }

        // title
        if(empty($_POST['title'])){
            $errors['title'] = 'Title is required!';
        }else{
            $title =  $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = "Title must only have letters and spaces!";
            }

        }

        // ingredients
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'At least one ingredient is required!';
        }else{
            $ingredients =  $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
                $errors['ingredients'] = "Ingredients must be a comma separated list";
            }
        }

        if(!array_filter($errors)){
            header("Location: index.php");
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
    <?php include('./template/header.php') ?>
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
        <div class="red-text"><?php echo $errors['title'] ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="container center m-5">
            <input type="submit" name="submit" value="submit" class='btn brand z-depth-0' >
            <input type="submit" name="clear" value="Clear Form" class='btn brand z-depth-0' >
        </div>
    </form>
    <?php include('./template/footer.php') ?>
</html>