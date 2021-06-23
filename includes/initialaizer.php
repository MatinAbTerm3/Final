<?php
include 'settings.php';
include 'functions.php';

$lifetime = 365* 24 * 60 * 60;
@session_set_cookie_params($lifetime , $path = '/' ,
							$domain = $_SERVER['HTTP_HOST'] , $secure = false , $httponly = true );
@session_start();
Authentication::autoLogout();
?>
