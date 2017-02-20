<?php

$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
    'label' => 'Внешний диаметр трубы D',
    'units' => 'mm.');

$input[1] =array('path' => 'input2',
    'label' => 'Толщина стенки t',
    'units' => 'mm.');

$input[2] =array('path' => 'input3',
    'label' => 'Длина L',
    'units' => 'm.');

$path = "PipeCircle";