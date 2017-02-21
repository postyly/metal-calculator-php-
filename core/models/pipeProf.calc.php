<?php
//рассчет веса профильная труба
if ($_SESSION['role'] == 'weight') {
    $density = isInt($_POST['input']);
    $a = isInt($_POST['input1']);
    $b = isInt($_POST['input2']);
    $t = isInt($_POST['input3']);
    $l = isInt($_POST['input4']);

    $weight = (($a * $b) - ($a - 2 * $t) * ($b - 2 * $t)) * $l * $density / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $result = "Вес = " . $weight . " кг.";
}
//рассчет длина профильная труба
else {
    $density = isInt($_POST['input']);
    $a = isInt($_POST['input1']);
    $b = isInt($_POST['input2']);
    $t = isInt($_POST['input3']);
    $weight = isInt($_POST['input4']);

    $length = $weight * 1000 / ($density * (($a * $b) - ($a - 2 * $t) * ($b - 2 * $t)));
    //округляем до 0,001
    $length = round($length, 3);
    $result = "Длина = " . $length . " м.";
}