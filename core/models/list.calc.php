<?php
//рассчет веса лист
    $density = isNumber($steel_grade[$_POST['input']]);
    $t = isNumber($_POST['input1']);
    $a = isNumber($_POST['input2']);
    $b = isNumber($_POST['input3']);
    $count = isNumber($_POST['input4']);
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input1'] = $t;
    $_SESSION['input2'] = $a;
    $_SESSION['input3'] = $b;
    $_SESSION['input4'] = $count;
    $weight = $a * $t * $b * $density * $count / 1000000;
    $area = $a * $b * $count / 1000000;
//округляем до 0,01
    $weight = round($weight, 2);
    $area = round($area, 2);
    $result = "Площадь = " . $area . " м2. Вес = " . $weight . " кг.";