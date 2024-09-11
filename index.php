<?php
include("./templates/header.php");
include("./templates/connect.php");

$fetch_query = "SELECT * FROM `clothing_tb`";

$send_fetch_query = mysqli_query($db_connect, $fetch_query);

$clothings = mysqli_fetch_all($send_fetch_query, MYSQLI_ASSOC);
?>

<main>
    <div class="container original">
        <h1 class="center-align">Clothes Ordered</h1>
        <div class="row">
            <?php foreach ($clothings as $clothing) { ?>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./assets/img/<?php echo $clothing['clothing_type'];?>.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="card-content">
                        <div class="name">Ordered by: <?php echo $clothing['user_name'];?></div>
                        <div class="more_details"><?php echo $clothing['clothing_description'];?></div>
                        <a href="view_recipe.php" class="btn btn-flat btn-small brown darken-1 white-text">More Details</a>
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