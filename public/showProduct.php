<?php
//Controller
include '__php__.php';


$db = new DB();

$table = Product::find();

unset($db);


include 'view/showProduct.php';

?>