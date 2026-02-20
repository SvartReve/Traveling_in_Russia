<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- BASIC -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="./images/favicon/KIWI.png" type="image/x-icon" />
    
    <!-- title in browser search-->
    <meta property="og:title" content="Регистрация и вход в онлайн-кинотеатр «КИВИ»" />
   
    <!-- Image in browser search -->
    <meta
        property="og:image"
        content="./images/" />

    <!-- Description in browser search -->
    <meta
        property="og:description"
        content="Онлайн-кинотеатр «КИВИ» — это веб платформа, предназначенная для просмотра фильмов, сериалов и мультфильмов." />


    <!-- LINKS -->
    
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/styles/bootstrap/bootstrap.min.css">

    <script src="./js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Base css style-->
    <link rel="stylesheet" href="assets/styles/base.css">
    

    <style>

        /* Section */

        .container{
            height: 500px;
            justify-content: center;
            align-items: center;
        }
        button{
            width: 300px;

            margin: 10px;

            border-radius: 5px;
            border-color: #44659a;

            color: #f4fff4;
            background-color: #44659a;
        }

        .register{
            margin: 0 0 0 10px;
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <?php include "header.php"; ?>

    <section>
        <div class="container d-flex flex-column">
            <button onclick = "window.location.href='./assets/pages/form-login_page.php';" >Войти по электронной почте</button>
            <button onclick = "window.location.href='./page_gup.php';">Войти по QR коду</button>
            <a class="register" href="./assets/pages/form-register_page.php">Еще не зарегистрирован</a>
        </div>
    </section>
</body>
</html>