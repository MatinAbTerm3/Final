<?php 
//controller
include '__php__.php';
	
Authentication::logout();
echo alertTemplate("ممنون از همراهی شما" , "warning");
header('Location:login.php');
?>