<?php
//рассчет веса шестигранник
if ($_SESSION['role'] == 'weight') {
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $l = isNumber($_POST['input2']);
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $l;
    $weight = ((3 * $a * $a) / (2 * sqrt(3)) * $l * $density) / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $result = "Вес = " . $weight . " кг.";
}
//рассчет длина шестигранник
else {
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $weight = isNumber($_POST['input2']);
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $weight;
    if ($a == 0 or $weight == 0){
        $length = 0;
    }
    else {
        $length = $weight * 1000 / ((3 * $a * $a) / (2 * sqrt(3)) * $density);
        //округляем до 0,001
        $length = round($length, 3);
    }
    $result = "Длина = " . $length . " м.";
}