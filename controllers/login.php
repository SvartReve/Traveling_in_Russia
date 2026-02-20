<?php
    session_start();//Запускаем исполнение сессии
    include "../connect.php";//Включаем исполнение файла connect.php
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Создаем запрос к таблице 'users'
    $STH = $connect->prepare("SELECT * FROM `users` WHERE `email`=? ");
    $STH->execute([$email]);//Передаем данные для запроса
    $STH->setFetchMode(PDO::FETCH_ASSOC);//Создаем ассоциативный массив найденых записей
    while($row = $STH->fetch())
    {
        //Если пароль из таблицы совпадает с паролем, выведем в форму
        if(password_verify($password, $row['password']))
        {
            $_SESSION["user_id"] = $row["user_id"];//Передаем параметр сессии id пользователя
            $_SESSION["role"] = $row["role"];//Передаем роль
            $_SESSION["name"] = $row["name"];//И имя пользователя
            $_SESSION["surname"] = $row["surname"];
            $_SESSION["patronymic"] = $row["patronymic"];
            return header("Location:../index.php?message=Вы успешно авторизовались");//Переходим на страницу корзины
        }
    }
    
    //Иначе выводим сообщение об ошибке авторизации
    return header("Location:../index.php?message=Ошибка логина или пароля")

?>