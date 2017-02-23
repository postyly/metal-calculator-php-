<?php
if (isset($control) && $control <= 0 ){
    $result = "Введите корректные данные";
    $result_status = "class='alert alert-warning'";
}elseif (isset($control) && $result > 0 ){
    $result_status = "class='alert alert-success'";
}else{
    $result_status = "";
}