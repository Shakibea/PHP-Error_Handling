<?php
//go to php.net take more information
echo ini_get("error_log");

// $headers = "From: error@service.log\r\n";
// $headers .= "Content-type = text/html; charset=ISO-8859-1\r\n";
// error_log("This log will send to our email",1,"admin@server.log",$headers);

$date = date("Y-m-d H:j:s");
error_log("[{$date}] This log append to file 4\n",3,"C:\\php_error_log\\errorlog.txt");

