<?php
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
    'label' => 'Ширина трубы a',
    'units' => 'мм.');

$input[1] =array('path' => 'input2',
    'label' => 'Высота трубы b',
    'units' => 'мм.');

$input[2] =array('path' => 'input3',
    'label' => 'Толщина стенки t',
    'units' => 'мм.');

if ($_SESSION['role'] == 'weight'){
    $input[3] =array('path' => 'input4',
        'label' => 'длина L',
        'units' => 'м.');
}
else{
    $input[3] =array('path' => 'input4',
        'label' => 'Вес',
        'units' => 'кг.');
}
$path = "PipeProf";
$radio_button = true;