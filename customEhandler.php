<?php

function custom_error_handler($severity, $msg, $file, $line){
    switch ($severity){
        case E_WARNING:
        echo "ERROR [{$severity}]: {$msg} in {$file} on line number {$line}";
        break;
        case E_NOTICE:
        echo "ERROR [{$severity}]: {$msg} in {$file} on line number {$line}";
        break;
        default:
        echo "ERROR [{$severity}]: {$msg} in {$file} on line number {$line}";
    }
}
set_error_handler('custom_error_handler');

function division($divident, $divisor){
    if(0 == $divisor){
        trigger_error("Can't divide by 0");
    }else{
        return $divident/$divisor;
    }
}

echo division(12,0);

// echo substr([123456],4);   //in substr array will make a error

// echo substr("Hello World",4);
