<?php
include '__php__.php';
 ?>
<!doctype html>
<html lang = "fa">
    <head>
        <title>آرتمیس | تماس با ما</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
        <link rel = "stylesheet" href = "assets/css/style.css">
    </head>
    <body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/icon.png" alt="لوگو" width="45" height="48" class="d-inline-block align-top"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ورود/ثبت نام
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="register.php">ثبت نام</a></li>
                            <li><a class="dropdown-item" href="login.php">ورود</a></li>
							<?php
										if(Authentication::check())
										{
											echo "<li><a class='dropdown-item' href='logout.php'>خروج</a></li>";
										}
									?>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="showProduct.php" >کتاب ها</a>
                            </li>
							<?php 
								if(Authentication::check())
									{
										echo "<li><a class='nav-link' href='add_Product.php'>افزودن کتاب</a></li>";
									}
							?>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.php" >تماس با ما</a>
                        </li>
                    </ul>
            </div>
            </div>
            </nav>
    </header>
        <main>
            <h1 class="Hha">تماس با ما</h1>
            <form action="contactus.php" method="post" class="contactfrm">
                <div class="mb-3">
                    <label for = "title" class = "form-label">موضوع📌</label>
                    <input type = "text" id = "title" name = "title" class = "form-control">
                </div>
                <div class = "mb-3">
                    <label for = "name" class = "form-label">نام🙂</label>
                    <input type = "text" id = "name" name = "name" class = "form-control">
                </div>
                <div class = "mb-3">
                    <label for = "email" class = "form-label">ایمیل📧</label>
                    <input type = "email" id = "email" name = "email" class = "form-control">
                </div>
                <div class = "mb-3">
                    <label for = "description" class = "form-label">متن پیام📄</label>
                    <textarea placeholder = "توضیحات" id="description" name = "description" class = "form-control" ></textarea>
                </div>
                <input type = "submit" value = "ارسال" class = "btn btn-primary" name = "submit">
                <input type = "reset" value = "پاک شدن" class = "btn btn-secondary">
            </form>
        </main>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>