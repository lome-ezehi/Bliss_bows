<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }
    </style>
</head>
<body>
    <footer class="page-footer brown darken-1">
        <div class="container">
            <h6 class="center-align white-text">&copy; 2024 recipes.com</h6>
        </div>
    </footer>

    <script src="./assets/Js/jqueryv3.4.1.js"></script>
    <script src="./assets/Js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $(".slider").slider({
                indicators:false
            });
            $(".dropdown-trigger").dropdown();
        })
    </script>
</body>
</html>