<?php
//рассчет веса профильная труба
if ($_SESSION['role'] == 'weight') {
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $b = isNumber($_POST['input2']);
    $t = isNumber($_POST['input3']);
    $l = isNumber($_POST['input4']);

    $weight = (($a * $b) - ($a - 2 * $t) * ($b - 2 * $t)) * $l * $density / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $result = "Вес = " . $weight . " кг.";
} //рассчет длина профильная труба
else {
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $b = isNumber($_POST['input2']);
    $t = isNumber($_POST['input3']);
    $weight = isNumber($_POST['input4']);
    if ($a == 0 or $b == 0 or $t == 0) {
        $length = 0;
    } else {
        $length = $weight * 1000 / ($density * (($a * $b) - ($a - 2 * $t) * ($b - 2 * $t)));
        //округляем до 0,001
        $length = round($length, 3);
    }
    $result = "Длина = " . $length . " м.";
}