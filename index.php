<?php
include("./templates/header.php");
include("./templates/connect.php");

//write the fetch query
$fetch_query = "SELECT * FROM `recipe_tb`";

//send the query to the server
$send_fetch_query = mysqli_query($db_connect, $fetch_query);

//receive data from server
$recipes = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);

// print_r($recipes);
?>

<main>
    <div class="container">
        <h1 class="center-align black-text">Recipes</h1>
        <div class="row">
            <?php foreach ($recipes as $recipe) { ?>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./assets/img/<?php echo $recipe['recipe_type'];?>.jpg" alt="" class="responsive-image">
                    </div>
                    <div class="card-content">
                        <div class="orage-text text-darken-4"><?php echo $recipe['recipe_name']?></div>
                        <strong>by: <?php echo $recipe['email']?></strong> <br><br>
                        <a href="view_recipe.php" class="btn btn-flat btn-small orange darken-4 white-text">More Details</a>
                    </div>
                    <div class="card-action"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php
include("./templates/footer.php");

?>