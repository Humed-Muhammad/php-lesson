<?php
// connect to db
include './config/db_connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    //sql
    $sql = "DELETE FROM pizzas WHERE id = $id";

    // check
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        $err = "Query Error: " . mysqli_error($conn);
    }
}

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // ger result
    $result = mysqli_query($conn, $sql);

    //fetching

    $pizza = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}

?>


<html>
    <div class="center grey-text">
        <?php include './template/header.php'?>
        <?php if ($pizza): ?>
            <h3><?php echo $pizza['title'] ?></h3>
            <p> Created by: <?php echo $pizza['email'] ?></p>
            <p><?php echo date($pizza['created_at']) ?></p>
            <h4>Ingredients:</h4>
            <p><?php echo $pizza['ingredients'] ?></p>
            <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>" >
                <input class="btn brand" type="submit" name="delete" value="Delete">
            </form>
        <?php else: ?>
            <h3>404 No such pizza exist</h3>
        <?php endif?>
        <?php include './template/footer.php'?>
    </div>
</html>