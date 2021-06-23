<?php
//Controller

include '__php__.php';

if(! Authentication::check())
{
	echo alertTemplate('برای استفاده از این بخش ابتدا باید وارد شوید' , 'danger');
	header('Location:login.php');
}

if(isset($_GET['id']))
{
	
	$db = new DB();
	$table = Product::delete($_GET['id']);
	$row = $table[0];
	unset($db);
	
}
else
{
	$alert = alertTemplate('شناسه کاربری نامشخص!' , 'danger');
	echo $alert;
}
header("Location: index.html");
exit();
?>