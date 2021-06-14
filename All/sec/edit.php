<?php

// connect to db
include './config/db_connect.php';

if (isset($_POST['edit'])) {
    $id_to_edit = mysqli_real_escape_string($conn, $_POST['id_to_edit']);
    $title = $_POST['title'];

    //sql
    $sql = "UPDATE pizzas SET title='$title' WHERE id=$id_to_edit";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    }
}

$errors = array("email" => '', "title" => '', "ingredients" => '');

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //sql
    $sql = "SELECT title,email,ingredients FROM pizzas WHERE id=$id";

    // result
    $result = mysqli_query($conn, $sql);

    //fetching

    $pizza = mysqli_fetch_assoc($result);

    // print_r($pizza);
    // $email = $pizza['email'];
    // $title = $pizza['title'];
    // $ingredients = $pizza['ingredients'];
    mysqli_free_result($result);
    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">
    <?php include './template/header.php'?>
    <?php if ($pizza): ?>
        <h4 class="center">Edit the Pizza</h4>
        <form class="white" action="edit.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($pizza['email']); ?>">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($pizza['title']); ?>">
        <div class="red-text"><?php echo $errors['title'] ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($pizza['ingredients']); ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="container center m-5">
            <input type="hidden" name="id_to_edit" value="<?php echo $pizza['id'] ?>" >
            <input type="submit" name="edit" value="Edit" class='btn brand z-depth-0' >
            <!-- <input type="submit" name="clear" value="Clear Form" class='btn brand z-depth-0' > -->
        </div>
        <h3 class="red-text" ><?php echo $err ?></h3>
        </form>
    <?php else: ?>
        <h4>No such id</h4>
    <?php endif?>
    <?php include './template/footer.php'?>
</html>