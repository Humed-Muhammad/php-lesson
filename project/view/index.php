
<?php 

    include('../control/control.php');
    $pizzas = getPizzas($_POST['term']);


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
    </head>
    <?php include './header.php'?>
    <h4 class="center grey-text">Pizzas</h4>
    <h6 class="center blue-text">There are <?php echo count($pizzas)?> Pizzas
    </h6>
        <form method="POST" action="index.php" class="container">
            <input placeholder="Search" style="width: 200px;" class="center m6" type="text" name="term">
            <input class="btn brand" type="submit" name="find" value="Search">
        </form>
    <div class="container">
        <div class="row">
            <?php foreach ($pizzas as $pizza): ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <img class="pizza" src="./pizza.jpg" alt="">
                        <div class="card-content center">
                            <h6> <?php echo htmlspecialchars($pizza['title']); ?> </h6>
                            <ul>
                                <?php foreach (explode(',', $pizza['ingredients']) as $ing): ?>
                                    <li><?php echo $ing; ?></li>
                                <?php endforeach?>
                            </ul>
                        </div>
                        <div class="card-action" style="display:flex; justify-content:space-around">
                        <a href="edit.php?id=<?php echo $pizza['id']; ?>" class="red-text left-align">Edit</a>
                            <a class="brand-text" href="details.php?id=<?php echo $pizza['id']; ?>">more info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
    <?php include './footer.php'?>
</html>