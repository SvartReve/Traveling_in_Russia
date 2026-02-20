<?php
    session_start();//Запускаем сессию
    if(!isset($_SESSION["user_id"]))//Если параметр 'id пользователя' не найден
    return header("Location:../form-login_page.php?message=Вы не авторизованы");//Выводим сообщение "Вы не авторизованы"
?>