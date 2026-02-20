<?php
    session_start();
    include "check.php";//Включаем исполнение файла check.php
    
    //Закрываем использование сессий
    unset($_SESSION["user_id"]);
    unset($_SESSION["role"]);
    unset($_SESSION["name"]);
    unset($_SESSION["surname"]);
    unset($_SESSION["patronymic"]);
    return header("Location:../index.php?message=Вы вышли");//Возвращаем сообщение "Вывышли"

?>