<?php
//рассчет веса круглая труба
if ($_SESSION['role'] == 'weight') {
    $density = isNumber($steel_grade[$_POST['input']]);
    $diam = isNumber($_POST['input1']);
    $t = isNumber($_POST['input2']);
    $l = isNumber($_POST['input3']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $diam;
    $_SESSION['input2'] = $t;
    $_SESSION['input3'] = $l;
    $weight = $density * $diam * $l * $t * M_PI / 1000;
//округляем до 0,01
    $weight = round($weight, 2);
    $result = "Вес = " . $weight . " кг.";
} //рассчет длина круглая труба
else {
    $density = isNumber($steel_grade[$_POST['input']]);
    $diam = isNumber($_POST['input1']);
    $t = isNumber($_POST['input2']);
    $weight = isNumber($_POST['input3']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $diam;
    $_SESSION['input2'] = $t;
    $_SESSION['input3'] = $weight;
    if ($diam == 0 or $t == 0 or $weight == 0) {
        $length = 0;
    } else {
        $length = ($weight * 1000) / ($density * $diam * $t * M_PI);
        //округляем до 0,001
        $length = round($length, 3);
    }
    $result = "Длина = " . $length . " м.";
}