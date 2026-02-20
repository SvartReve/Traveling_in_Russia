<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- BASIC -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Author -->
    <meta name="author" content="Стрелков Владимир" />

    <!-- favicon -->
   <link rel="shortcut icon" href="./images/favicon/KIWI.png" type="image/x-icon" /><!-- favicon -->
    
    <!-- title in browser search-->
    <meta property="og:title" content="Онлайн-кинотеатр «КИВИ»" />
   
    <!-- Image in browser search -->
    <meta
        property="og:image"
        content="./images/" />

    <!-- Description in browser search -->
    <meta
        property="og:description"
        content="Онлайн-кинотеатр «КИВИ» — это веб платформа, предназначенная для просмотра фильмов, сериалов и мультфильмов." />

    <title>Авторизация</title>
    <!-- LINKS -->
    
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.min.css">

    <script src="../scripts/bootstrap/bootstrap.min.js"></script>

    <!-- Bootstsap icons -->
    <link rel="stylesheet" href="../styles/bootstrap/">
    
     <!-- Base css style-->
    <link rel="stylesheet" href="../styles/base.css">

    <!-- Form css style -->
    <link rel="stylesheet" href="../styles/form.css">
</head>

<body>
    
    <!-- Кнопка возварата на прошлую страницу -->
    <button class="btn_back" onclick = "window.location.href='../../login_page.php';">
        <div></div>
    </button>

    <!-- Секция формы авторизации -->
    <section>
        <div class="container d-flex flex-column justify-content-center align-items-center">

            <h3>Вход</h3>

            <!-- Форма авторизации -->
            <form action="../../controllers/login.php" class="form-login"  method="POST">
                
                <input type="email"  name="email" placeholder="Введите почту" class="form_input email w-100" required>
                

                <input type="password"  name="password" placeholder="Введите пароль" class="form_input password w-100" pattern="[A-Za-z0-9]{6,30}" required>
                
               
                  
                <div class="form-group d-flex flex-wrap justify-content-between mt-1">

                    <span class=" text-decoration-none"><input type="checkbox"><a> Запомнить меня!</a></span>
                
                    <a href="form-register_page.php" class="text-black text-decoration-none">Еще не зарегистрированы? <span class=" text-set2 text-decoration-underline">Да</span></a>
                </div>

                <button type="submit" class="form_btn text-uppercase">Войти</button>
            
            </form>
        </div>
    </section>

</body>
</html>