<?php

include '__php__.php';
$p = alertTemplate("Welcome :)" , "success");

$db = new DB();
//$r = User :: find('email = $email');;
unset($db);

@$a = "editUser.php?id={$row['id']}";

?>
<!doctype html>
<html lang = "en" class = "container">
    <head>
        <title>کاتالوگ</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
        <link href = "assets/css/style.css" rel = "stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </head>
    <body class = "row g-5">
        <!-- Header -->
		<?php get_header(); ?>
        <main class = 'container col-12 col-lg-8'>
            <?php echo $p; ?>
        </main>
		<!-- Aside(Sidebar)-->
		
		<aside class = "col-12 col-lg-4">
			
			<ul class="list-group">
			  <li class="list-group-item"><a href = "<?php echo $a;?>">ویرایش اطلاعات کاربری</a></li>
			  <li class="list-group-item"><a href = "<?php ?>">ویرایش محصول</a></li>
			  <li class="list-group-item"><a href = "<?php ?>">تاریخچه</a></li>
			  
            </ul>
			
			
		
		</aside>
		<!-- Footer-->
		<?php get_footer(); ?>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>