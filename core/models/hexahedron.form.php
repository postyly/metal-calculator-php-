<?php
if ($_SESSION['path'] != "Hexahedron"){
    session_input_to_0();
}
$select[0]['title'] = 'марки стали';
$select[0]['name'] = "steel_grade";
$select[0]['options'] = $steel_grade;

$input[0] =array('path' => 'input1',
                'label' => 'Номер шестигранника a',
                'units' => 'mm.',
                'value' => $_SESSION['input1']);

if ($_SESSION['role'] == 'weight'){
    $input[1] =array('path' => 'input2',
                    'label' => 'длина L',
                    'units' => 'м.',
                    'value' => $_SESSION['input2']);
    $title_img = "Расчет веса нержавеющего шестигранника";
}
else{
    $input[1] =array('path' => 'input2',
                    'label' => 'Вес',
                    'units' => 'кг.',
                    'value' => $_SESSION['input2']);
    $title_img = "Расчет длины нержавеющего шестигранника";
}
$_SESSION['path'] = "Hexahedron";
$path = "Hexahedron";
$radio_button = true;
