<?php
if ($_SESSION['path'] != "List"){
    session_input_to_0();
}
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
                'label' => 'Толщина листа t',
                'units' => 'mm.',
                'value' => $_SESSION['input1']);
$input[1] =array('path' => 'input2',
                'label' => 'Ширина листа a',
                'units' => 'mm.',
                 'value' => $_SESSION['input2']);
$input[2] =array('path' => 'input3',
                'label' => 'Длина листа b',
                'units' => 'mm.',
                 'value' => $_SESSION['input3']);
$input[3] =array('path' => 'input4',
                'label' => 'Количество',
                'units' => 'шт',
                 'value' => $_SESSION['input4']);

$_SESSION['path'] = "List";
$path = "List";
$radio_button = false;
$title_img = "Расчет веса нержавеющего листа";