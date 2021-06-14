<?php 
    include('../control/control.php');


    if(isset($_POST['delete'])){
        $id_to_delete = htmlspecialchars($_POST['id_to_delete']);
        deletePizza($id_to_delete);
    }

    if(isset($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);

        $pizza = getPizza($id);
    }

?>






<html>
    <title>More Info</title>
    <div class="center grey-text">
        <?php include './header.php'?>
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
        <?php include './footer.php'?>
    </div>
</html>