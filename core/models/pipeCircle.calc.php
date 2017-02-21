<?php
//рассчет веса круглая труба
if ($_SESSION['role'] == 'weight') {
    $density = isInt($_POST['input']);
    $diam = isInt($_POST['input1']);
    $t = isInt($_POST['input2']);
    $l = isInt($_POST['input3']);

    $weight = $density * $diam * $l * $t * M_PI / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $result = "Вес = " . $weight . " кг.";
}
//рассчет длина круглая труба
else {
    $density = isInt($_POST['input']);
    $diam = isInt($_POST['input1']);
    $t = isInt($_POST['input2']);
    $weight = isInt($_POST['input3']);

    $length = ($weight * 1000) / ($density * $diam * $t * M_PI);
    //округляем до 0,001
    $length = round($length, 3);
    $result = "Длина = " . $length . " м.";
}