<?php
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
                'label' => 'Ширина ленты a',
                'units' => 'мм.');

$input[1] =array('path' => 'input2',
                'label' => 'Толщина ленты t',
                'units' => 'мм.');

if ($_SESSION['role'] == 'weight'){
    $input[2] =array('path' => 'input3',
        'label' => 'длина L',
        'units' => 'м.');
}
else{
    $input[2] =array('path' => 'input3',
        'label' => 'Вес',
        'units' => 'кг.');
}

$path = "Ribbon";