<?php
//Controller
include '__php__.php';

$db = new DB();

$table = Message::find();

unset($db);

$alert = '';

include '../includes/view/showMessages.php';

?>