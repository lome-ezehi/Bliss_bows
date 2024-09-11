<?php
include ('./templates/connect.php');
include ('./templates/header.php');

$user_name = $clothing_type = $clothing_description = $price = " ";

if (isset($_POST['submit'])) {

    $user_name = $_POST['user_name'];
    $clothing_type = $_POST['clothing_type'];
    $clothing_description = $_POST['clothing_description'];
    $price = $_POST['price'];


    $insert_query = "INSERT INTO `clothing_tb` (`user_id`, `user_name`, `clothing_type`, `clothing_description`, `price`) VALUES (NULL, '$user_name', '$clothing_type', '$clothing_description', '$price')";

    $send_query = mysqli_query($db_connect, $insert_query);
    
    if ($send_query) {
        header('Location: index.php');
        exit(); // It's a good practice to call exit after a redirect
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }
}
?>

<main>
    <div class="container original">
        <h1 class="center-align">Order Now</h1>
        <div class="container">
            <div class="row">
                <div class="col l12">
                    <form action="order_page.php" method="POST">
                        <div class="col l12 input-field">
                            <input type="text" name="user_name" id="user_name">
                            <label for="user_name">Your Name:</label>
                        </div>
                        <div class="col l12 input-field">
                            <select name="clothing_type" id="clothing_type">
                                <option value="shirts">Shirt</option>
                                <option value="jeans">Jeans</option>
                                <option value="shoes">Shoes</option>
                                <option value="bows">Bows</option>
                            </select>
                        </div>
                        <div class="col l12 input-field">
                            <textarea name="clothing_description" id="clothing_description" class="materialize-textarea"></textarea>
                            <label for="clothing_description">Clothing Description:</label>
                        </div>
                        <div class="col l12 input-field">
                            <input type="number" name="price" id="price">
                            <label for="price">Selling price(place the digits only):</label>
                        </div>
                        <div class="center-align">
                            <input type="submit" value="submit" name="submit" class="btn btn-large brown darken-1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include ('./templates/footer.php');?>