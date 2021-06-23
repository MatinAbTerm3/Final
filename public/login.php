<?php 
//controller
include '__php__.php';
if(isset($_POST['submit']))
{
	$db = new DB();
	$parameters = $_POST;
	
	
	unset($parameters['submit']);
	$where = "email = '{$parameters['email']}'";
	$table = User::find($where);
	if(isset($table[0]) /*&& password_verify($parameters['password'] , $row['passwordHash'])*/)
	{
		$row = table[0];
		Authentication::login($row['id']);
		echo alertTemplate("خوش آمدی {$row['username']}" , "success");
		header('Location:dashboard.php');
	}
	else
	{
		echo alertTemplate('نام کاربری یا کلمه عبور اشتباه وارد شده است' , 'danger');
	}
	
	unset($db);
	
}

include '../includes/view/login.php';

?>