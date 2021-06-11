<?php 
    include('./config/db_connect.php');

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        // sql
        $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql)){
            header("Location: index.php");
        }else{
            echo 'query error: '. mysqli_error($conn);
        }
    }

    if(isset($_GET['id'])){

        // sql
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        //get result
        $result = mysqli_query($conn, $sql);

        // fetch db
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>

<html lang="en">
    <?php include('./template/header.php') ?>
    <div class="container center grey-text">
        <?php if($pizza): ?>
            <h4> <?php echo htmlspecialchars($pizza['title']) ?> </h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']) ?></p>
            <p> <?php echo date($pizza['created_at']) ?> </p>
            <h5>Ingredients: </h5>
            <p> <?php echo htmlspecialchars($pizza['ingredients']) ?> </p>

            <?php include('delete.php') ?>

        <?php else: ?>
            <h5>No such pizza exists!</h5>
        <?php endif ?>
    </div>
    <?php include('./template/footer.php') ?>
</html>