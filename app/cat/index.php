<?php
echo "PAGE: serving CAT\r\n";
echo 'HOST NAME: '.gethostname()."\r\n";
echo 'HOST IP: '.gethostbyname(trim(exec("hostname")))."\r\n";
echo 'REMOTE IP: '.gethostbyaddr($_SERVER['REMOTE_ADDR'])."\r\n";
echo 'SERVER PORT: '.$_SERVER['SERVER_PORT']."\r\n";
echo 'REMOTE_PORT: '.$_SERVER['REMOTE_PORT']."\r\n";
echo 'PROTOCOL: '.$_SERVER['SERVER_PROTOCOL']."\r\n";
echo 'USER AGENT: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
echo 'REQUEST TIME: '.$_SERVER['REQUEST_TIME']."\r\n";
// echo 'PATH: '.$_SERVER['PHP_SELF']."\r\n";
echo 'REQUEST URI: '.$_SERVER['REQUEST_URI']."\r\n";
echo 'HTTP_ACCEPT: '.$_SERVER['HTTP_ACCEPT']."\r\n";