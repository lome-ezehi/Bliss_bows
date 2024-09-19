<?php
include('./templates/connect.php');
include('./templates/header.php');

// $recipe_id = " ";
// $error_msg = " ";

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
// print_r($recipe);

//update data
// $update_recipe_id = " ";
// $update_recipe_name = " ";

if (isset($_POST['update'])) {
    $update_recipe_id = $_POST['$update_recipe_id'];
    $update_recipe_name = $_POST['$update_recipe_name'];
    print_r($_POST);

    $update_query = "UPDATE `recipe_tb` SET `recipe_name`='$update_recipe_name' WHERE `recipe_id` = '$update_recipe_id' ";

    $send_query = mysqli_query($db_connect, $update_query);

    if ($send_query) {
        header('Location: index.php');
        exit();
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }}



?>

<main>
    <div class="container center-align">
        <h1>Edit <?php echo $recipe['recipe_name'];?> </h1>
        <div class="container">
            <form action="./edit_recipe.php" method="post">
                <div class="row">
                    <div class="input-field col s12 l3">
                        <input type="hidden" name="update_recipe_id" id="update_recipe_id" value="<?php echo $recipe['recipe_id']; ?>">
                    </div>
                    <div class="input-field col s12 l9">
                        <input type="text" name="update_recipe_name" id="update_recipe_name">
                    </div>
                    <div class="input-field col s12">
                        <input type="submit" value="update" name="update" class="white-text btn btn-large btn-flat brown darken-1">
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include('./templates/footer.php');
?>