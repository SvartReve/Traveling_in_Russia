<?php
 try {
        //Вводим имя хоста, название БД, имя пользователя, пароль и используемую кодировку
        $connect = new PDO('mysql:host=localhost;dbname=r9009086_34;charset=utf8', 'r9009086_34', 'Http900php908',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    } catch (PDOException $e) {
        //Добавляем обработчик ошибки:
        //В случае неправильного подключения к БД появится информация о данном исключении
        die($e->getMessage());
    }
?>
