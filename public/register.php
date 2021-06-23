<!doctype html>
<html lang = "fa">
<head>
    <title>آرتمیس | ثبت نام</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
    <link rel = "stylesheet" href = "assets/css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/icon.png" alt="لوگو" width="45" height="48" class="d-inline-block align-top"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ورود/ثبت نام
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="register.html">ثبت نام</a></li>
                            <li><a class="dropdown-item" href="login.php">ورود</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">خانه</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="catalog.php" >کتاب ها</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.html" >تماس با ما</a>
                        </li>
                    </ul>
            </div>
            </div>
            </nav>
</header>
<main>
<h1 class="Hha">ثبت نام</h1>
    
    <form action="register1.php" method="post" class="contactfrm">
        <div class="mb-3">
            
        </div>
		<div class="mb-3">
            <label for = "username" class = "form-label">نام کاربری👨‍💻/👩‍💻</label>
            <input type = "text" id = "username" name = "username" class = "form-control"  placeholder="فقط حروف انگلیسی">
        </div>
        <div class="mb-3">
            <label for = "email" class = "form-label">آدرس ایمیل📧</label>
            <input type = "email" id = "email" name = "email" class = "form-control">
        </div>
        <div class="mb-3">
            <label for = "password" class = "form-label">رمز عبور🔐</label>
            <input type = "password" id = "password" name = "password" class = "form-control">
        </div>
        <div class="mb-3">
            <label for = "repeatpass" class = "form-label">تکرار رمز عبور🔐</label>
            <input type = "password" id = "repeatpass" name = "repeatpass" class = "form-control">
        </div>
		<div class="mb-3">
            
            <input type = "hidden" id = "Roleid" name = "Roleid" class = "form-control" value = "2">
        </div>
        <input type = "submit" value = "ارسال" class = "btn btn-primary" name = "submit">
        <input type = "reset" value = "پاک شدن" class = "btn btn-secondary">
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>