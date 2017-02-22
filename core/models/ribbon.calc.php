<?php
//рассчет веса лента
if ($_SESSION['role'] == 'weight') {
    $density = isNumber($steel_grade[$_POST['input']]);
    $a = isNumber($_POST['input1']);
    $t = isNumber($_POST['input2']);
    $l = isNumber($_POST['input3']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $t;
    $_SESSION['input3'] = $l;

    $result = $a * $t * $l * $density / 1000;
    $area = $a * $l / 1000;
//округляем до 0,01
    $result = round($result, 2);
    $area = round($area, 2);
    $result = "Площадь = " . $area . " м2. Вес = " . $result . " кг.";
} //рассчет длина лента
else {
    $density = isNumber($steel_grade[$_POST['input']]);
    $a = isNumber($_POST['input1']);
    $t = isNumber($_POST['input2']);
    $weight = isNumber($_POST['input3']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $a;
    $_SESSION['input2'] = $t;
    $_SESSION['input3'] = $weight;
    if ($a == 0 or $t == 0) {
        $result = 0;
    } else {
        $result = $weight * 1000 / ($a * $t * $density);
        $result = round($result, 3);
        $area = ($weight / $density) / $t;
        $area = round($area, 2);
    }
    $result = "Площадь = " . $area . " м2. Вес = " . $result . " кг.";
}