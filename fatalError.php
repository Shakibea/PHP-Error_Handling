<?php
ini_set('display_errors',0);
// ini_set('memory_limit', '1M');

register_shutdown_function('fatal_error_handler');
function fatal_error_handler(){
    $error = error_get_last();
    if($error){
        echo "Fatal error";
        //also we can connect with email.. error will send to our mail
    }
}

// echo str_repeat("*",2**21);
no_function();