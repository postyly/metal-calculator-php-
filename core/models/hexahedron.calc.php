<?php
//рассчет веса шестигранник
if ($_SESSION['role'] == 'weight') {
    $density = isInt($_POST['input']);
    $a = isInt($_POST['input1']);
    $l = isInt($_POST['input2']);

    $weight = ((3 * $a * $a) / (2 * sqrt(3)) * $l * $density) / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $result = "Вес = " . $weight . " кг.";
}
//рассчет длина шестигранник
else {
    $density = isInt($_POST['input']);
    $a = isInt($_POST['input1']);
    $weight = isInt($_POST['input2']);

    $length = $weight * 1000 / ((3 * $a * $a) / (2 * sqrt(3)) * $density);
    //округляем до 0,001
    $length = round($length, 3);
    $result = "Длина = " . $length . " м.";
}