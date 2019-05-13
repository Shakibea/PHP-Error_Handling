<?php

// error_reporting(0);
// error_reporting(E_ALL);
// error_reporting(E_NOTICE | E_WARNING);

//handling ini file
ini_set("display_errors",0);
ini_set("display_startup_errors",0);

echo 12/0;   //warning error

echo $kkk;    //notice error    



//using terminal
    //php --ini
//finding ini file
    // echo get_cfg_var('cfg_file_path');