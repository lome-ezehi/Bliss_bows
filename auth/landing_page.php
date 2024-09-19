<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        *{
            font-family: 'Josefin Sans', serif;
            font-optical-sizing: auto;
            font-weight: normal;
            padding-top: 0 !important;
            margin-top: 0 !important;
        }
        body{
            background-image: url(./assets/Img/cake_fruit.jpg);
            background-size: auto;
        }
        /* img{
            width: 100%;
        } */
        .wrapper{
            margin-top: 0px !important;
            padding: 100px 20px !important;
            height: 830px !important;
            width: 100% !important;
        }
        h3{
            font-size: 25px;
            text-decoration: underline;
            color: white;
            padding-top: 20px !important;
        }
        h1{
            text-align: center;
            font-size: 40px;
            color: white;
        }
        .button{
            width: 320px !important;
            padding-top: 30px !important;
        }
        .btn:hover{
            transition: ease 0.2s;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="wrapper section brown darken-1 center-align">
        <h1>Thanks for creating an account with us, Lome.</h1>
        <h3>Would you like to?</h3>
        <div>
            <div class="row">
                <div class="col">
                    <div class="button push-l2 col l4">
                        <a class="btn grey darken-1" href="dashboard.php">View Dashboard</a>  
                    </div>
                    <div class="button push-l2 col l4">
                        <a class="btn grey darken-1" href="new_recipe.php">Uplaod new recipe</a>  
                    </div>
                    <div class="button push-l2 col l4">
                        <a class="btn grey darken-1" href="index.php">Go back to Home page</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="./assets/js/jqueryv3.4.1.js"></script>
<script src="./assets/js/materialize.js"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.slider').slider({
            height : 600,
        });
        $('.collapsible').collapsible();
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy();
    });
</script>
</html>

<?php

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        *{
            font-family: 'Josefin Sans', serif;
            font-optical-sizing: auto;
            font-weight: normal;
            padding-top: 0 !important;
            margin-top: 0 !important;
        }
        img{
            width: 100%;
        }
        .wrapper{
            margin-top: 0px !important;
            padding: 100px 0 !important;
        }
        h3{
            text-decoration: underline;
            color: white;
            padding-top: 30px !important;
            padding-bottom: 20px !important;
        }
        h1{
            text-align: center;
            font-size: 40px;
            color: white;
        }
        .button{
            width: 320px !important;
            padding-top: 30px !important;
        }
        .btn:hover{
            transition: ease 0.2s;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="wrapper section brown darken-1 center-align">
            <div class="slider scrollspy" id="nav">
            <ul class="slides">
                <li>
                    <img src="./assets/Img/cake_fruit.jpg" alt="">
                </li>
                <li>
                    <img src="./assets/Img/cake_fruit.jpg" alt="">
                </li>
                <li>
                    <img src="./assets/Img/cake_fruit.jpg" alt="">
                </li>
                <li>
                    <img src="./assets/Img/cake_fruit.jpg" alt="">
                </li>
                <li>
                    <img src="./assets/Img/cake_fruit.jpg" alt="">
                </li>
            </div>
        </ul> 
        <h1>Thanks for creating an account with us, Lome.</h1>
        <h3>Would you like to?</h3>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="button col l4">
                        <a class="btn grey darken-1" href="dashboard.php">View Dashboard</a>  
                    </div>
                    <div class="button col l4">
                        <a class="btn grey darken-1" href="new_recipe.php">Uplaod new recipe</a>  
                        
                    </div>
                    <div class="button col l4">
                        <a class="btn grey darken-1" href="index.php">Go back to Home page</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="./assets/Img/cake_fruit.jpg" alt="">
        </div>
    </div>
</body>
<script src="./assets/js/jqueryv3.4.1.js"></script>
<script src="./assets/js/materialize.js"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.slider').slider({
            height : 600,
        });
        $('.collapsible').collapsible();
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy();
    });
</script>
</html> --> 