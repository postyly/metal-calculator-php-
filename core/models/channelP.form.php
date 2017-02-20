<?php

$select[0]['title'] = 'Номер швеллера';
$select[0]['name'] = "channel";
$select[0]['options'] = $channel;

if ($_SESSION['role'] == 'weight'){
    $input[0] =array('path' => 'input1',
        'label' => 'длина L',
        'units' => 'м.');
}
else{
    $input[0] =array('path' => 'input1',
        'label' => 'Вес',
        'units' => 'кг.');
}

$path = "ChannelP";
