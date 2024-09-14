<?php
include('./templates/connect.php');
include('./templates/header.php');

$recipe_id = " ";
$error_msg = " ";

//check if partciular id is selected
if (isset($_GET["recipe_id"])) {
    //Assign recipe 1d to local variable
    $recipe_id = $_GET["recipe_id"];

    //Fetch Data from table, using the row ID
    $fetch_query ="SELECT * FROM `recipe_tb` WHERE `recipe_id` = $recipe_id";

    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    //Store recieved data in an associative array
    $recipe = mysqli_fetch_assoc($send_fetch_query);
}else {
    $error_msg = "No recipe selected!";
}
print_r($recipe_id);

?>

<main>
    <div class="container">
        <h1 class="center-align">Edit</h1>
    </div>
</main>

<?php
include('./templates/footer.php');
?>