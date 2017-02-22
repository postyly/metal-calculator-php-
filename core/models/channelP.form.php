<?php
if ($_SESSION['path'] != "ChannelP"){
    session_input_to_0();
}
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
                'label' => 'Ширина a',
                'units' => 'мм.',
                'value' => $_SESSION['input1']);

$input[1] =array('path' => 'input2',
                'label' => 'Высота b',
                'units' => 'мм.',
                'value' => $_SESSION['input2']);

$input[2] =array('path' => 'input3',
                'label' => 'Толщина t',
                'units' => 'мм.',
                'value' => $_SESSION['input3']);

if ($_SESSION['role'] == 'weight'){
    $input[3] =array('path' => 'input4',
                    'label' => 'Длина L',
                    'units' => 'м.',
                    'value' => $_SESSION['input4']);
    $title_img = "Расчет веса нержавеющего швеллера ";
}
else{
    $input[3] =array('path' => 'input4',
                    'label' => 'Вес',
                    'units' => 'кг.',
                    'value' => $_SESSION['input4']);
    $title_img = "Расчет длины нержавеющего швеллера ";
}

$_SESSION['path'] = "ChannelP";
$path = "ChannelP";
$radio_button = true;
