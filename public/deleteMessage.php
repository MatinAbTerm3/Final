<?php
//Controller

include '__php__.php';

if(isset($_GET['id']))
{
	
	$db = new DB();
	$table = Message::delete($_GET['id']);
	$row = $table[0];
	unset($db);
	
}
else
{
	$alert = alertTemplate('شناسه کاربری نامشخص!' , 'danger');
	echo $alert;
}
header("Location: index.php");
exit();
?>