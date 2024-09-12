<?php
//1. connection file
include('./templates/connect.php');
include('./templates/header.php');

//print_r($_POST);
//2. Create blank variables to store data
$email = $recipe_name = $recipe_type = $recipe_description = " ";

//3. Check if the submit button is pressed
if (isset($_POST['submit'])) {

//4. store array to array variables
    $email = $_POST['email'];
    $recipe_name = $_POST['recipe_name'];
    $recipe_type = $_POST['recipe_type'];
    $recipe_description = $_POST['recipe_description'];    

//5. Write the insert query
    $insert_query = "INSERT INTO `recipe_tb`(`email`, `recipe_name`, `recipe_type`, `recipe_description`) VALUES ('$email', '$recipe_name', '$recipe_type', '$recipe_description')";
    

//6. Send query to the server
    $send_query = mysqli_query($db_connect, $insert_query);    

    if ($send_query) {
        header('Location: index.php');
        exit();
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }
}
?>

<h1 class = "center brown-text text-darken-1">Add New Recipe</h1>
<div class="container">
    <div class="row">
        <div class="col l12">
            <form action="new_recipe.php" method="POST">
                <div class="col l12 input-field">
                    <input type="email" name="email" id="email" >
                    <label for="email">Email:</label>
                </div>
                <div class="col l12 input-field">
                    <input type="text" name="recipe_name" id="recipe_name" >
                    <label for="recipe_name">Recipe name</label>
                </div>
                <div class="col l12 input-field">
                    <select name="recipe_type">
                        <option value="cake">Cake</option>
                        <option value="chicken">Chicken</option>
                        <option value="soup">Soup</option>
                    </select>
                    <label>Recipe Type</label>
                </div>
                <div class="col l12 input-field">
                    <textarea name="recipe_description" id="recipe_description" class="materialize-textarea"></textarea>
                    <label for="recipe_description">Recipe Description:</label>
                </div>
                <div class="button center">
                    <input type="submit" value="submit" name="submit" class="btn center brown darken-1">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('./templates/footer.php');
?>