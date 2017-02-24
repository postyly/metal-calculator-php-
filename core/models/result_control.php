<?php
if (isset($control) && $control <= 0 ){
    $result = "Введите корректные данные";
    $result_status = "alert alert-warning";
}elseif (isset($control) && $control > 0 ){
    $result_status = "alert success";
}else{
    $result_status = "";
}