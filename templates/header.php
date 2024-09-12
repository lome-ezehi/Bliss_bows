<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 40
        }
        form{
            margin-top: 90px!important;
        }
        img{
            width: 1000px !important;
            /* height: 100px !important; */
        }
        .name{
            font-weight: bolder;
        }
        .more_details{
            margin-bottom: 20px !important;
        }
        .footer{
            margin-bottom: 20px !important;
        }
    </style>
</head>
<body>
    <header>
        <nav class="brown darken-1 z-depth-0">
            <div class="container">
                <a href="./index.php" class="brand-logo"><em>Bliss & Bows</em></a>
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