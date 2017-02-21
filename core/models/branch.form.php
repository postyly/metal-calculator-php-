<?php
$select[0]['title'] = 'исполнение';
$select[0]['name'] = "branch_rendering";
$select[0]['options'] = $branch_rendering;

$select[1]['title'] = 'размер';
$select[1]['name'] = "branch_size";
$select[1]['options'] = $branch_size;

$input[0] =array('path' => 'input1',
    'label' => 'Толщина листа t',
    'units' => 'mm.');
$input[1] =array('path' => 'input2',
    'label' => 'Ширина листа a',
    'units' => 'mm.');
$input[2] =array('path' => 'input3',
    'label' => 'Длина листа b',
    'units' => 'mm.');
$input[3] =array('path' => 'input4',
    'label' => 'Количество',
    'units' => 'шт');

$path = "Branch";
$radio_button = false;
$title_img = "Отвод";