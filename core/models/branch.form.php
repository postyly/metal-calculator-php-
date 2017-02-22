<?php
if ($_SESSION['path'] != "Branch"){
    session_input_to_0();
}
$select[0]['title'] = 'исполнение';
$select[0]['name'] = "branch_rendering";
$select[0]['options'] = $branch_rendering;

$select[1]['title'] = 'размер';
$select[1]['name'] = "branch_size";
$select[1]['options'] = $branch_size;

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

$_SESSION['path'] = "Branch";
$path = "Branch";
$radio_button = false;
$title_img = "Расчет веса нержавеющего отвода";