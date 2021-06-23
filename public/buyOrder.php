<?php
include '__php__.php';


if( isset( $_GET['id'] ) )
{
	$productid = $_GET['id'];
			
	
	$db = new DB();
	
	$table = Product :: find( "id = {$productid}" );
	
	if( isset($table[0]) ) 
	{
		$row = $table[0];
	}
	
	unset( $db );		
}
include '../includes/view/buyOrder.php';