<?php
if ($_SESSION['path'] != "Square"){
    session_input_to_0();
}
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;
$input[0] = array('path' => 'input1',
                'label' => 'сторона квадрата а',
                'units' => 'мм.',
                'value' => $_SESSION['input1']);
if ($_SESSION['role'] == 'weight'){
$input[1] = array('path' => 'input2',
                'label' => 'длина L',
                'units' => 'м.',
                'value' => $_SESSION['input2']);
    $title_img = "Расчет веса нержавеющего квадрата";
}
else{
    $input[1] = array('path' => 'input2',
                    'label' => 'Вес',
                    'units' => 'кг.',
                    'value' => $_SESSION['input2']);
    $title_img = "Расчет длины нержавеющего квадрата";
}
$_SESSION['path'] = "Square";
$path = "Square";
$radio_button = true;
