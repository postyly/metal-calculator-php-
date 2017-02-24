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
<div class="container calculator">
    <h1 class="text-center">Калькулятор веса нержавеющего металлопроката.</h1>
    <div class="col-lg-1 col-md-1"></div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col">
        <!--        меню, выбор сортамента-->
        <?php include_once "views/menu.view.php"; ?>
    </div>
    <!--    изображение-->
    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5 col">
        <?php include_once "views/image.view.php"; ?>
    </div>
    <!--    форма-->
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-3 col">
        <?php include_once "views/form.view.php"; ?>
    </div>
    <div class="col-lg-1 col-md-1"></div>
</div>
</body>
</html>