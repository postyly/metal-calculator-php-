<?php
//функция проверяет является ли переданный параметр целым числом и возвращает его, если нет возвращает 0
function isInt($value){
    if ((int)$value){
        return $value;
    }
    return 0;
}