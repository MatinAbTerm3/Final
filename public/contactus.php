<?php

if(isset($_POST['title']) && !empty($_POST['title']) &&
   isset($_POST['name']) && !empty($_POST['name']) &&
   isset($_POST['email']) && !empty($_POST['email']) &&
   isset($_POST['description']) && !empty($_POST['description']) &&
   isset($_POST['submit']))
{
    include '__php__.php';

	unset( $_POST['submit'] );
    $db = new DB();
    
	Message::add($_POST);
	
    unset($db);
}
else
    {
        include '__php__.php';
        $alert = alertTemplate('لطفا فیلدهای خالی را پر کنید!' , 'danger');
    }

?>
<!doctype html>
<html lang = "fa">
    <head>
        <title>تماس با ما | نتیجه</title>
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
        <aside></aside>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>
