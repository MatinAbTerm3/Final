<?php

include '__php__.php';
$alert = '';

$db = new DB(false);
if(! $softSetup)
{
	$sql = "DROP DATABASE IF EXISTS {$dbName}";
	$db -> execute($sql);
}
$sql = "CREATE DATABASE IF NOT EXISTS {$dbName}
		CHARSET {$charset}
		COLLATE {$collate}";
$result = $db -> execute($sql);
if($result)
	$alert .= alertTemplate('دیتابیس با موفقیت ایجاد شد' , 'success');

unset($db);
$db = new DB();

$sql = "CREATE TABLE IF NOT EXISTS Message(
		id INT AUTO_INCREMENT NOT NULL,
		title VARCHAR(255),
		name VARCHAR(255),
		email VARCHAR(255),
		description TEXT,
		status VARCHAR(20),
		PRIMARY KEY(id)
	)ENGINE = INNODB";
	$result = $db -> execute($sql);
	if($result)
		$alert .= alertTemplate('جدول پیام با موفقیت ساخته شد' , 'success');

$sql = "CREATE TABLE IF NOT EXISTS Product(
		id INT AUTO_INCREMENT NOT NULL,
		bookname VARCHAR(255),
		writername VARCHAR(255),
		releaseyear INT,
		genre VARCHAR(255),
		review TEXT,
		pagenumber INT,
		booklanguage VARCHAR(255),
		image VARCHAR(255),
		price FLOAT,
		description TEXT,
		status VARCHAR(20),
		PRIMARY KEY(id)
	)ENGINE = INNODB";
	$result = $db -> execute($sql);
	if($result)
		$alert .= alertTemplate('جدول محصولات با موفقیت ساخته شد' , 'success');

$sql = "CREATE TABLE IF NOT EXISTS User(
		id INT AUTO_INCREMENT NOT NULL,
		username VARCHAR(255),
		email VARCHAR(255),
		passwordHash VARCHAR(255),
		Roleid INT,
		status VARCHAR(20),
		PRIMARY KEY(id)
	)ENGINE = INNODB";
	$result = $db -> execute($sql);
	if($result)
		$alert .= alertTemplate('جدول کاربر با موفقیت ساخته شد' , 'success');
	






if( ! $softSetup ) {	
	$parameters = array(
		'username'		=> 'admin',
		'email'			=> 'admin@example.com',
		'passwordHash'	=> password_hash('123', PASSWORD_DEFAULT),
		'roleid'		=> 1
	);
	User :: add( $parameters );
}		
	
$sql = "CREATE TABLE IF NOT EXISTS Role( 
		id INT AUTO_INCREMENT NOT NULL,
		role VARCHAR(15),
		ProductAdd BOOLEAN DEFAULT 0,
		ProductEdit BOOLEAN DEFAULT 0,
		ProductDelete BOOLEAN DEFAULT 0,
		ProductDetails BOOLEAN DEFAULT 0,
		ProductEditOther BOOLEAN DEFAULT 0,
		ProductDeleteOther BOOLEAN DEFAULT 0,
		ProductDetailsOther BOOLEAN DEFAULT 0,
		UserAdd BOOLEAN DEFAULT 0,
		UserEdit BOOLEAN DEFAULT 0,
		UserDelete BOOLEAN DEFAULT 0,
		UserDetails BOOLEAN DEFAULT 0,
		UserEditOther BOOLEAN DEFAULT 0,
		UserDeleteOther BOOLEAN DEFAULT 0,
		UserDetailsOther BOOLEAN DEFAULT 0,
		status VARCHAR(20),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alertTemplate('جدول نقش با موفقیت ایجاد شد', 'success');

if( ! $softSetup ) {	
	$parameters = array(
			'id' => 1 ,
			'role' => 'superAdmin' ,
			'ProductAdd' => 1 ,
			'ProductEdit' => 1 ,
			'ProductDelete' => 1 ,
			'ProductDetails' => 1 ,
			'ProductEditOther' => 1 ,
			'ProductDeleteOther' => 1 ,
			'ProductDetailsOther' => 1 ,
			'UserAdd' => 1 ,
			'UserEdit' => 1 ,
			'UserDelete' => 1 ,
			'UserDetails' => 1 ,
			'UserEditOther' => 1 ,
			'UserDeleteOther' => 1 ,
			'UserDetailsOther' => 1
	);
	Role :: add( $parameters );
	$parameters = array(
			'id' => 2 ,
			'role' => 'normal' ,
			'ProductAdd' => 1 ,
			'ProductEdit' => 1 ,
			'ProductDelete' => 1 ,
			'ProductDetails' => 1 ,
			'ProductEditOther' => 0 ,
			'ProductDeleteOther' => 0 ,
			'ProductDetailsOther' => 0 ,
			'UserAdd' => 1 ,
			'UserEdit' => 1 ,
			'UserDelete' => 1 ,
			'UserDetails' => 1 ,
			'UserEditOther' => 0 ,
			'UserDeleteOther' => 0 ,
			'UserDetailsOther' => 0
	);
	Role :: add( $parameters );
}
$sql = "CREATE TABLE IF NOT EXISTS LikeProduct( 
		id INT AUTO_INCREMENT NOT NULL,
		Userid INT,
		Productid INT,		
		status VARCHAR(20),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alertTemplate('جدول لایک با موفقیت ایجاد شد', 'success');


?>
<!doctype html>
<html lang = "fa">
	<head>
		<title>ستاپ</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<link href = "../public/assets/css/style.css" rel = "stylesheet">
		<style>
		</style>
	</head>
	<body class = "container">
		<header></header>
		<main>
			<?php
				if(isset($alert))
					echo $alert;
			?>
		</main>
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>