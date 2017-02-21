<?php
//рассчет веса лист
if ($_SESSION['role'] == 'weight'){
    $density = isNumber($_POST['input']);
    $t = isNumber($_POST['input1']);
    $a = isNumber($_POST['input2']);
    $b = isNumber($_POST['input3']);
    $count = isNumber($_POST['input4']);
    $weight = $a * $t * $b * $density *$count / 1000000;
    $area = $a * $b * $count / 1000000;
//округляем до 0,01
    $weight = round($weight, 2);
    $area = round($area, 2);
    $result = "Площадь = " . $area . "м2. Вес = " . $weight . " кг.";
}

//рассчет длина лист
else{
    $density = isNumber($_POST['input']);
    $a = isNumber($_POST['input1']);
    $t = isNumber($_POST['input2']);
    $weight = isNumber($_POST['input3']);

    $result = $weight * 1000 / ($a * $t * $density);
    $result = round($result, 3);
    $result = "Длина = " . $result . " м.";
}