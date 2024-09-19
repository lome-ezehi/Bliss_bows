<?php
include('./templates/connect.php');
include('./templates/header.php');


//write the fetch query
$fetch_query = "SELECT * FROM `recipe_tb` WHERE `recipe_type` = 'cakes'" ;

//send the query to the server
$send_fetch_query = mysqli_query($db_connect, $fetch_query);

//receive data from server
$recipes = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);
// print_r($recipes);

// foreach ($recipes as $recipe) {
//     echo $recipe["recipe_type"];
// }

?>


<main>
    <div class="container">
        <div class="container center-align">
            <div class="btn brown darken-1"><a class="white-text" href="index.php?recipe_type=<?php echo "cakes"?>">All Recipes</a></div>
        </div>
        <h1 class="center-align black-text">Cakes</h1>
        <div class="row">
            <?php
            foreach ($recipes as $recipe) {
            ?>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./assets/img/<?php echo $recipe['recipe_type'];?>.jpg" alt="" class="responsive-image">
                    </div>
                    <div class="card-content">
                        <div class="orage-text text-darken-4"><?php echo $recipe['recipe_name']?></div>
                        <strong>by: <?php echo $recipe['email']?></strong> <br><br>
                        <a href="view_recipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>" class="btn btn-flat btn-small brown darken-1 white-text">More Details</a>
                    </div>
                    <div class="card-action"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>


<?php
include('./templates/footer.php');
?>