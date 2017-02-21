<?php
//рассчет веса круг/пруток
if ($_SESSION['role'] == 'weight'){
    $density = isNumber($_POST['input']);
    $diam = isNumber($_POST['input1']);
    $l = isNumber($_POST['input2']);

    $result = $diam * $diam * M_PI * $l * $density / (4 * 1000);
//округляем до 0,01
    $result = round($result, 2);
    $result = "Вес = " . $result . " кг.";
}

//рассчет длина круг/пруток
else{
    $density = isNumber($_POST['input']);
    $diam = isNumber($_POST['input1']);
    $weight = isNumber($_POST['input2']);

    $result = (($weight  / $density) / ($diam * $diam * M_PI / 4)) * 1000;
    $result = round($result, 3);
    $result = "Длина = " . $result . " м.";
}