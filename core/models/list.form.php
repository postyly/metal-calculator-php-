<?php
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

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

$path = "List";
$radio_button = false;
$title_img = "Лист/плита";