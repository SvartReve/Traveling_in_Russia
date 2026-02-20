<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- BASIC -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Author -->
    <meta name="author" content="Стрелков Владимир" />

    <!-- favicon -->
  <link rel="shortcut icon" href="./media/favicon.svg" type="image/x-icon" /><!-- favicon -->
    
    <!-- title in browser search-->
    <meta property="og:title" content="Путешествия по России" />
   
    <!-- Image in browser search -->
    <meta
        property="og:image"
        content="./media/" />

    <!-- Description in browser search -->
    <meta
        property="og:description"
        content="Путешествия по России" />

    <title>Регистрация</title>
    
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
    <button type="submit" class="btn_back" onclick = "window.location.href='../../index.php';">
        <div></div>
    </button>
    
    <!-- Секция формы регистрации -->
    <section>
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h3>Регистрация</h3>
            <!-- Форма регистрации -->
            <form action="../../controllers/register.php" class="form-register"  method="POST">

                <input type="text"  name="name" placeholder="Имя" class="form_input name w-100" pattern="[А-яА-ЯЁё]{,20}" required>
                
                <input type="text"  name="surname" placeholder="Фамилия" class="form_input surname w-100" pattern="[А-яА-ЯЁё]{,20}" required>
                
                <input type="text"  name="patronymic" placeholder="Отчество" class="form_input patronymic w-100" pattern="[А-яА-ЯЁё]{,30}" required>
                

                <input type="text"  name="login" placeholder="Логин" class="form_input login w-100" pattern="[A-Za-z0-9]{,20}" required>
                
                <input type="email"  name="email" placeholder="Почта" class="form_input email w-100" required>
         
                <input type="password"  name="password" placeholder="Пароль" class="form_input password w-100" pattern="[A-Za-z0-9]{6,30}" required>
        
                <input type="password"  name="repeat_password" placeholder="Повтор пароль" class="form_input repeat_password w-100" pattern="[A-Za-z0-9]{6,30}" required>
        
               <div class="form-group mt-1 d-flex flex-row justify-content-between">
                    <span class=" text-decoration-none"><input type="checkbox" name="informated" id="1">
                     <a>Я принимаю согласие</a></span>
              
                <a href="./form-login_page.php" class="text-black text-decoration-none">Уже зарегистрированы? <span class=" text-set2 text-decoration-underline">Да</span></a>
               </div>

                <button type="submit" class=" form_btn text-uppercase">зарегистрироваться</button>
            
            </form>
        </div>
    </section>
  
    
</body>
</html>