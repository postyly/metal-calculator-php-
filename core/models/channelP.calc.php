<?php
//рассчет веса швеллер
if ($_SESSION['role'] == 'weight'){
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $b = isNumber($_POST['input2']);
    $t = isNumber($_POST['input3']);
    $l = isNumber($_POST['input4']);

    $weight = (($a * $b) - ($a - 2 * $t) * ($b - $t)) * $l * $density / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $result = "Вес = " . $weight . " кг.";
}

//рассчет длина швеллер
else{
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $b = isNumber($_POST['input2']);
    $t = isNumber($_POST['input3']);
    $weight = isNumber($_POST['input4']);

    $length = $weight * 1000 / ($density * (($a * $b) - ($a - 2 * $t) * ($b - $t)));;
    $length = round($length, 3);
    $result = "Длина = " . $length . " м.";
}