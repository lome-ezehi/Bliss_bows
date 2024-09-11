<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .input-field input:focus {
            border-bottom: 1px solid #6d4c41 !important;
            box-shadow: 0 1px 0 0 #6d4c41 !important;
        }
        textarea:focus {
            border-bottom: 1px solid #6d4c41 !important;
            box-shadow: 0 1px 0 0 #6d4c41 !important;
        }
        label, textarea {
            color: grey;
            font-weight: bold;
        }

        .input-field .prefix.active, label.active{
            color: #6d4c41 !important;
        }
        .footer{
            margin-top: 100px !important;
            background-color: #6d4c41;
        }
        .footer-copyright{
            margin-top:200px 0 !important;
        }
        h1{
            font-weight: bold;
            color: #6d4c41;
        }
    </style>
</head>
<body>
    <footer class="footer page-footer brown darken-1">
        <div class="container">
            <h5 class="center-align white-text">&copy; TB 2024 recipes.com</h5>
        </div>
        <div class="footer-copyright brown darken-1"></div>
    </footer>

    <script src="./assets/Js/jqueryv3.4.1.js"></script>
    <script src="./assets/Js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            
        })
    </script>
</body>
</html>