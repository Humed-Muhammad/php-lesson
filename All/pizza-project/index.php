<?php 

    // connecte to database
    include('./config/db_connect.php');
    // query
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    // get result

    $result = mysqli_query($conn ,$sql);

    // fetching
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free the momery
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
    <?php include('./template/header.php') ?>

    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza): ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <img class="pizza" src="./pizza.jpg" alt="">
                        <div class="card-content center">
                            <h6> <?php echo htmlspecialchars($pizza['title']) ?> </h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['ingredients']) as $ing) : ?>
                                    <li> <?php echo htmlspecialchars($ing) ?> </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div style="display:flex; justify-content:space-around; align-items:center;" class="card-action right-align">
                            <!-- <a><?php include('delete.php') ?></a> -->
                            <a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text"> more info </a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

    <?php include('./template/footer.php') ?>
</html>