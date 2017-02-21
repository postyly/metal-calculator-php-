<?php
//рассчет веса квадрат
if ($_SESSION['role'] == 'weight'){
    $density = isInt($_POST['input']);
    $a = isInt($_POST['input1']);
    $l = isInt($_POST['input2']);

    $result = $density * $a * $a * $l / 1000;
//округляем до 0,01
    $result = round($result, 2);
    $result = "Вес = " . $result . " кг.";
}

//рассчет длина квадрат
else{
    $density = isInt($_POST['input']);
    $a = isInt($_POST['input1']);
    $weight = isInt($_POST['input2']);

    $result = ($weight  / $density / ($a * $a)) * 1000;
    $result = round($result, 3);
    $result = "Длина = " . $result . " м.";
}