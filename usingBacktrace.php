<?php

function x($a){
    y($a);
}

function y($b){
    z($b*2);
}

function z($c){
    if($c<20){
        trigger_error("Too small {$c}\n");
    }else{
        echo "{$c} done!\n";
    }

    debug_print_backtrace();
    // debug_print_backtrace(0,2);
    // print_r(debug_backtrace());
}

function p($d, $e){
    x($d+$e);
}

z(23);

p(2,3);