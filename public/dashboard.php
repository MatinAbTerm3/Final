<?php 
//controller
include '__php__.php';

if(! Authentication::check())
{
	echo alertTemplate('برای استفاده از این بخش ابتدا باید وارد شوید' , 'danger');
	header('Location:login.php');
}

include '../includes/view/dashboard.php';

?>