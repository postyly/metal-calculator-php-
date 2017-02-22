<?php
if ($_SESSION['path'] != "Ribbon"){
    session_input_to_0();
}
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
                'label' => 'Ширина ленты a',
                'units' => 'мм.',
                'value' => $_SESSION['input1']);

$input[1] =array('path' => 'input2',
                'label' => 'Толщина ленты t',
                'units' => 'мм.',
                'value' => $_SESSION['input2']);

if ($_SESSION['role'] == 'weight'){
    $input[2] =array('path' => 'input3',
                    'label' => 'длина L',
                    'units' => 'м.',
                    'value' => $_SESSION['input3']);
    $title_img = "Расчет веса нержавеющей ленты";
}
else{
    $input[2] =array('path' => 'input3',
                    'label' => 'Вес',
                    'units' => 'кг.',
                    'value' => $_SESSION['input3']);
    $title_img = "Расчет длины нержавеющей ленты";
}
$_SESSION['path'] = "Ribbon";
$path = "Ribbon";
$radio_button = true;
