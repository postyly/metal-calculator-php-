<?php
//рассчет веса квадрат
if ($_SESSION['role'] == 'weight') {
    $density = isNumber($steel_grade[$_POST['input']]);
    $a = isNumber($_POST['input1']);
    $l = isNumber($_POST['input2']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $l;

    $result = $density * $a * $a * $l / 1000;
//округляем до 0,01
    $result = round($result, 2);
    $result = "Вес = " . $result . " кг.";
} //рассчет длина квадрат
else {
    $density = isNumber($steel_grade[$_POST['input']]);
    $a = isNumber($_POST['input1']);
    $weight = isNumber($_POST['input2']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $weight;
    if ($a == 0) {
        $result = 0;
    } else {
        $result = ($weight / $density / ($a * $a)) * 1000;
        $result = round($result, 3);
    }
    $result = "Длина = " . $result . " м.";
}