<?php
//Controller
include '__php__.php';

$db = new DB();

$table = User::find();

unset($db);

//$alerts = Alert::alerts();

include '../includes/view/showUsers.php';

?>