<?php 

    $errors = ['email'=>'','title'=>'','ingradients'=>''];

    if(isset($_POST['submit'])){
        // check email
        if(empty($_POST['email'])){
            $errors['email'] = 'Email is required!';
        }else{
           $email = $_POST['email'];
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email is invalid!";
           }
        }

        // check title
        if(empty($_POST['title'])){
            $errors['title'] = 'Title is required!';
        }else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                $errors['title'] = 'Title must only have letters and spaces!';
            }
        }

        // check ingradients
        if(empty($_POST['ingradients'])){
            $errors['ingradients'] = 'At least one ingradients is required!';
        }else{
            $ingradients = $_POST['ingradients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingradients)){
                $errors['ingradients'] = 'Ingradients must be a comma separeted list!';
            }
        }
        if(isset($_POST['clear'])){
            $email = '';
            $title = '';
            $ingradients = '';
        }

        if(array_filter($errors)){
            //echo 'Form is invalid';
        }else{
            // redirecting to home page
            header("Location: index.php");
        }
     } // end of POST check

?>


<!DOCTYPE html>
<html lang="en">
    <?php include('./template/header.php') ?>

        <section class="container gery-text">
            <h4 class="center">Add a Pizza</h4>
            <form action="add.php" method="POST" class="white">
                <label>Your Email:</label>
                <input type="text" name="email" value = "<?php echo htmlspecialchars($email) ?>" >
                <div class="red-text"><?php echo $errors['email'] ?></div>
                <label>Pizza Title:</label>
                <input type="text" name="title" value = "<?php echo htmlspecialchars($title) ?>" >
                <div class="red-text"><?php echo $errors['title'] ?></div>
                <label>Ingredients (comma separated):</label>
                <input type="text" name="ingradients" value = "<?php echo htmlspecialchars($ingradients) ?>" >
                <div class="red-text"><?php echo $errors['ingradients'] ?></div>
                <div class="center container m-5">
                    <input type="submit" name="submit" value="submit" class='btn brand z-depth-0' >
                    <input type="submit" name="clear" value="Clear Form" class='btn brand z-depth-0' >
                </div>
            </form>
        </section>

    <?php include('./template/footer.php') ?>
</html>