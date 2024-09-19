<?php
include ('../templates/connect.php');
include ('../templates/header.php');

if (isset($_POST['signup'])) {


    if ($_POST['password'] == $_POST['confirm_password']) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
    
    
        $fetch_query = "INSERT INTO `users_table` (`user_id`, `username`, `f_name`, `l_name`, `password`, `email`, `confirm_password`) VALUES (NULL, '$username', '$f_name', '$l_name', '$password', '$email', '$confirm_password')";
    
        $send_query = mysqli_query($db_connect, $fetch_query);
    }else {
        $wrong =  "Password are not the same";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Document</title>
</head>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap'); */

    .input-field input:focus {
        border-bottom: 1px solid #0D47A1 !important;
        box-shadow: 0 1px 0 0 #0D47A1 !important;
    }
    .input-field .prefix.active, label.active{
        color: #0D47A1 !important;
    }
    .label{
        font-weight: bold;
        font-size: 18px !important;
    }
    .div{
        text-align: end;
        width: 470pt;
    }
    .signup{
        border-radius: 10px;
        width: 100pt;
        margin: 20px;
    }
    .signup:hover{
        font-weight: bold;
        font-size: 16px;
        transition: ease-in-out.2s;
    }
    p{
        display: inline;
        font-weight: bold;
        font-size: 16px;
    }
</style>
<main>
    <div class="container white con-body">
        <div class="container center-align">
            <h1>Signup</h1>
            <div class="row">
                <div class="col l12">
                    <form action="../auth/signup.php" method="post">
                        <div class="col l12 input-field">
                            <label class="label" for="username">Username:</label>
                            <input type="text" name="username" id="username" placeholder="e.g Doe">
                        </div>
                        <div class="col l12 input-field inp">
                            <label class="label" for="f_name">First name:</label>
                            <input type="text" name="f_name" id="f_name" placeholder="e.g John">
                        </div>
                        <div class="col l12 input-field">
                            <label class="label" for="l_name">Last name:</label>
                            <input type="text" name="l_name" id="l_name" placeholder="e.g Doe">
                        </div>
                        <div class="col l12 input-field">
                            <label for="email" class="label">Email:</label>
                            <input type="email" name="email" id="email" placeholder="e.g Johndoe@gmail.com" class="validate">
                            <span class="helper-text" data-error="wrong" data-success="Correct"></span>
                        </div>
                        <div class="col l12 input-field">
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="password" placeholder="**********">
                        </div>
                        <div class="col l12 input-field">
                            <label for="change_password" class="label">Confirm Password</label>
                            <input type="password" name="change_password" id="change_password" placeholder="**********">
                        </div>
                        <span class="red-text left-align col l12" ><?php echo $wrong;?></span>
                        <input type="submit" value="signup" name="signup" class="signup btn btn-large blue darken-4">
                    </form>
                    <p>Already have an account? </p>
                    <a href="./login.php" class="create">Login</a>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="./assets/js/jqueryv3.4.1.js"></script>
<script src="./assets/js/materialize.js"></script>
<script>
    $(document).ready(function () {
        
    })
</script>
</html>


<?php
include ('../templates/footer.php')

?>
