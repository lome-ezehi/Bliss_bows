<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <style>
        .original{
            margin-top: 90px!important;
        }
    </style>
</head>
<body>
    <header>
        <nav class="brown darken-1 z-depth-0">
            <div class="container">
                <a href="./index.php" class="brand-logo">Bliss & Bows</a>
                <ul class="right">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./order_page.php">Order Now</a></li>
                    <li><a href="./index.php">Account</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <script src="./assets/Js/jqueryv3.4.1.js"></script>
    <script src="./assets/Js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        })
    </script>
</body>
</html>