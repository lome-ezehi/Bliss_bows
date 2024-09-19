<?php
include("./templates/header.php");
include("./templates/connect.php");

// $fetch_query = "SELECT * FROM `recipe_tb`";

// $send_fetch_query = mysqli_query($db_connect, $fetch_query);

// $recipes = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);

//write the fetch query
$cake_query = "SELECT * FROM `recipe_tb` WHERE `recipe_type` = 'cake'" ;
$soup_query = "SELECT * FROM `recipe_tb` WHERE `recipe_type` = 'soup'" ;
$chicken_query = "SELECT * FROM `recipe_tb` WHERE `recipe_type` = 'chicken'" ;

//send the query to the server
$send_cake_query = mysqli_query($db_connect, $cake_query);
$send_soup_query = mysqli_query($db_connect, $soup_query);
$send_chicken_query = mysqli_query($db_connect, $chicken_query);

//receive data from server
$cakes = mysqli_fetch_all($send_cake_query, MYSQLI_ASSOC);
$soups = mysqli_fetch_all($send_soup_query, MYSQLI_ASSOC);
$chicken = mysqli_fetch_all($send_chicken_query, MYSQLI_ASSOC);

// print_r($cakes);

// echo $_SESSION['name'];

?>

<main>
    <div class="container">
        <h1 class="center-align">Hello there, <em><span class="blue-text text-darken-4">Foodies</span></em></h1>
        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, commodi ab excepturi omnis obcaecati amet dolorem nostrum impedit asperiores. lome exercitationem error ipsam dolorem enim sequi corporis harum sunt atque cumque, accusamus saepe eligendi velit recusandae porro repellat eveniet praesentium maiores ducimus quos sint laborum! Cum porro minima suscipit soluta numquam iure debitis et, impedit nihil eum beatae veniam ullam eveniet voluptates lome? Quaerat, debitis. Et quaerat voluptatum adipisci facilis accusamus laudantium vitae unde, enim placeat repellat molestias quas porro soluta excepturi vel facere ad deleniti esse, a amet eius consectetur recusandae at culpa. Modi eum nostrum ipsa repellendus enim!</h5>
    </div>
    <!-- cakes -->
    <div class="container original">
        <h1 class="center-align blue-text text-darken-4 heading">Cakes</h1>
        <div class="row">
            <?php foreach ($cakes as $cake) { ?>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./assets/img/<?php echo $cake['recipe_type'];?>.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="card-content">
                        <div class="">
                            <a class="btn-floating white-text btn-large black right"><p>#<?php echo $cake['recipe_id']; ?></p></a>
                        </div>
                        <p class="r_name"><a class="blue-text text-darken-4" href="view_recipe.php?recipe_id=<?php echo $cake['recipe_id']; ?>"><?php echo $cake['recipe_name'];?><i class="material-icons">call_made</i></a></p>
                        <div class="name">Created by: <?php echo $cake['username'];?></div><br>
                        <!-- <div class="view_recipe"><?php echo $cake['recipe_description'];?></div> -->
                        <!-- <a href="view_recipe.php?recipe_id=<?php echo $cake['recipe_id']; ?>" class="btn btn-flat btn-small brown darken-1 white-text">More Details</a> -->
                    </div>
                    <!-- <div class="card-action"></div> -->
                </div>
            </div>
            <?php } ?>
            <div class="col l12 center-align">
                <a class="more btn" href="">All Cake Recipes</a>
            </div>
        </div>
    </div>
    <!-- soups -->
    <div class="container original">
        <h1 class="center-align blue-text text-darken-4 heading">Soups</h1>
        <div class="row">
            <?php foreach ($soups as $soup) { ?>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./assets/img/<?php echo $soup['recipe_type'];?>.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="card-content">
                        <div class="">
                            <a class="btn-floating white-text btn-large black right"><p>#<?php echo $soup['recipe_id']; ?></p></a>
                        </div>
                        <p class="r_name"><a class="blue-text text-darken-4" href="view_recipe.php?recipe_id=<?php echo $soup['recipe_id']; ?>"><?php echo $soup['recipe_name'];?><i class="material-icons">call_made</i></a></p>                        
                        <div class="name">Created by: <?php echo $soup['username'];?></div><br>
                        <!-- <div class="view_recipe"><?php echo $soup['recipe_description'];?></div> -->
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col l12 center-align">
                <a class="more btn" href="">All Soup Recipes</a>
            </div>
        </div>
    </div>
    <!-- chicken -->
    <div class="container original">
        <h1 class="center-align blue-text text-darken-4 heading">Chicken</h1>
        <div class="row">
            <?php foreach ($chicken as $chick) { ?>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./assets/img/<?php echo $chick['recipe_type'];?>.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="card-content">
                        <div class="">
                            <a class="btn-floating white-text btn-large black right"><p>#<?php echo $chick['recipe_id']; ?></p></a>
                        </div>
                        <p class="r_name"><a class="blue-text text-darken-4" href="view_recipe.php?recipe_id=<?php echo $chick['recipe_id']; ?>"><?php echo $chick['recipe_name'];?><i class="material-icons">call_made</i></a></p>                        
                        <div class="name">Created by: <?php echo $chick['email'];?></div><br>
                        <!-- <div class="view_recipe"><?php echo $chick['recipe_description'];?></div> -->
                    </div>
                    <!-- <div class="card-action"></div> -->
                </div>
            </div>
            <?php } ?>
            <div class="col l12 center-align">
                <a class="more btn" href="">All Chicken Recipes</a>
            </div>
        </div>
    </div>
</main>

<?php
include("./templates/footer.php");

?>
