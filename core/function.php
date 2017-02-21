<?php
//функция проверяет является ли переданный параметр числом и возвращает его, если нет возвращает 0
function isNumber($value){
    //заменим запятые точками
    $value = str_replace(",", ".", $value);
    if (is_numeric($value)){
        return $value;
    }
    return 0;
}

function goBack(){
    $url = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "/" ;
    header("Location: $url");
}