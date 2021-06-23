<?php
include '__php__.php';


if( isset( $_GET['id'] ) )
{
	$productid = $_GET['id'];
			
	
	$db = new DB();
	$userid = Authentication :: uid();
	
	$table = LikeProduct :: find( "Userid = {$userid} AND Productid = {$productid}" );
	
	if( isset($table[0]) ) 
	{
		
		$row = $table[0];
		LikeProduct :: delete( $row['id'] );
	}
	else{
		
		$parameters = [
			'Userid'	=> $userid,
			'Productid'	=> $productid
		];
		
		LikeProduct :: add( $parameters );
		
	}
	unset( $db );		
}
else {
	alertTemplate('دسترسی غیر مجاز!');
	header('Location:dashboard.php');
}
redirect('catalog.php'); 