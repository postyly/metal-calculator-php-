<?php
error_reporting(E_ALL);
session_start();
require_once "core/function.php";
require_once "core/varible.php";
require_once "core/controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Калькулятор Металла</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--    style-->
    <style>
        @import "css/style.css";
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <h1 class="text-center">Калькулятор веса нержавеющего металлопроката.</h1>
    <div class="col-lg-4 col-md-4">
<!--        меню, выбор сортамента-->
    <?php include_once "views/menu.view.php";?>
    </div>
<!--    изображение-->
    <div class="col-lg-4 col-md-4">
        <?php include_once "views/image.view.php";?>
    </div>
<!--    форма-->
    <div class="col-lg-4 col-md-4">
        <?php include_once "views/form.view.php";?>
    </div>
</div>


<?php var_dump($_POST);
echo "<br>";
var_dump($_SESSION);
echo "<br>";
var_dump($_GET);?>


















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>