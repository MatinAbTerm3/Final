<?php
include '__php__.php';
$parameters = $_POST;
if(isset($_POST['submit']))
{

    if($_POST['password'] === $_POST['repeatpass'])
    {
			unset($parameters['repeatpass']);
			unset( $parameters['submit'] );
			unset($parameters['csrf']);
			$db = new DB();
        
		$where = "email = '{$_POST['email']}'";
		$table = User::find($where);
		if(! isset($table[0]))
		{
			
			$parameters['passwordHash'] = password_hash($parameters['password'] , PASSWORD_DEFAULT);
			unset($parameters['password']);
			$uid = User::add($parameters);
			Authentication::login($uid);
			
		}
		else
		{
			echo alertTemplate('این ایمیل قبلا ثبت شده است' , 'warning');
		}
		
		unset($db);
        
    }
    else
        {
            
            echo alertTemplate('رمز عبور وارد شده با تکرار رمز عبور همخوانی ندارد!' , 'danger');
        }
}
else
    {
        
        $alert = alertTemplate('لطفا فیلدهای خالی را پر کنید!' , 'danger');
    }
?>
<!doctype html>
<html lang = "fa">
<head>
    <title>ثبت نام | نتیجه</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link href = "assets/css/style.css" rel = "stylesheet">
</head>
<body class = "container">
<header></header>
<main>
    <?php
    if( isset($alert) )
        echo $alert;
    ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>