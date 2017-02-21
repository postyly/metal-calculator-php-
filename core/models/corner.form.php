<?php

$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
    'label' => 'Ширина уголка a',
    'units' => 'mm.');

$input[1] =array('path' => 'input2',
    'label' => 'Высота уголка b',
    'units' => 'mm.');

$input[2] =array('path' => 'input3',
    'label' => 'Толщина полки t',
    'units' => 'mm.');

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

$path = "Corner";
$radio_button = true;
$title_img = "Уголок";