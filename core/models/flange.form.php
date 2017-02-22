<?php
if ($_SESSION['path'] != "Flange"){
    session_input_to_0();
}
$select[0]['title'] = 'давление';
$select[0]['name'] = "flange_pressure";
$select[0]['options'] = $flange_pressure;

$select[1]['title'] = 'условный диаметр';
$select[1]['name'] = "flange_diam";
$select[1]['options'] = $flange_diam;

$input[0] =array('path' => 'input1',
                'label' => 'Количество',
                'units' => 'шт.',
                'value' => $_SESSION['input1']);

$_SESSION['path'] = "Flange";
$path = "Flange";
$radio_button = false;
$title_img = "Расчет веса нержавеющего фланца";