<?php
//рассчет веса круг/пруток
if ($_SESSION['role'] == 'weight'){
    $density = isNumber($steel_grade[$_POST['input']]);
    $diam = isNumber($_POST['input1']);
    $l = isNumber($_POST['input2']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $diam;
    $_SESSION['input2'] = $l;
    $result = $diam * $diam * M_PI * $l * $density / (4 * 1000);
//округляем до 0,01
    $result = round($result, 2);
    $result = "Вес = " . $result . " кг.";
}

//рассчет длина круг/пруток
else{
    $density = isNumber($steel_grade[$_POST['input']]);
    $diam = isNumber($_POST['input1']);
    $weight = isNumber($_POST['input2']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $diam;
    $_SESSION['input2'] = $weight;
    if ($diam == 0 or $weight == 0){
        $length = 0;
    }
    else {
        $length = (($weight / $density) / ($diam * $diam * M_PI / 4)) * 1000;
        $length = round($length, 3);
    }
    $result = "Длина = " . $length . " м.";
}