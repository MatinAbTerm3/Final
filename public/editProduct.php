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
	
	if(isset($_POST['submit']))
	{
		$db = new DB();
	
		$parameters = $_POST;
		unset($parameters['submit']);
		$parameters['id'] = $_GET['id'];
		$table = Product::update($parameters);
	
	}
	
	$table = Product::find("id = {$_GET['id']}");
	$row = $table[0];
	unset($db);
	
}
else
{
	$alert =alertTemplate('شناسه کاربری نامشخص!' , 'danger');
	echo $alert;
}
include('../includes/view/editProduct.php');

?>