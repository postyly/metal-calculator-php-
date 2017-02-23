<?php
if ($_SESSION['path'] != "PipeCircle"){
    session_input_to_0();
}
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
    'label' => 'Внешний диаметр трубы D',
    'units' => 'мм.',
    'value' => $_SESSION['input1']);

$input[1] =array('path' => 'input2',
    'label' => 'Толщина стенки t',
    'units' => 'мм.',
    'value' => $_SESSION['input2']);

if ($_SESSION['role'] == 'weight'){
    $input[2] =array('path' => 'input3',
        'label' => 'длина L',
        'units' => 'м.',
        'value' => $_SESSION['input3']);
    $title_img = "Расчет веса нержавеющей круглой трубы";
}
else{
    $input[2] =array('path' => 'input3',
        'label' => 'Вес',
        'units' => 'кг.',
        'value' => $_SESSION['input3']);
    $title_img = "Расчет длины нержавеющей круглой трубы";
}
$_SESSION['path'] = "PipeCircle";
$path = "PipeCircle";
$radio_button = true;
