<?php

    include "../connect.php";
    include "check.php";

    $form['old_password'] = $_POST['old_password'];
    //Шифруем пароль с помощью фунции password_hash
    //Первым параметром передаются данные, введенные в инпут, вторым 0 метод хеширования
    $form['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //Формируем запрос
    $STH =  $connect->prepare("SELECT * FROM `users` WHERE `user_id`='".$_SESSION['user_id']."'");
    $STH->execute();
    // Если пароль из таблицы совпадает с паролем, введенным в форму
    while($row = $STH->fetch())
    {
        if(password_verify($form['old_password'], $row['password']))
        {
            // То переписываем пароль на новый
            $STH = $connect->prepare("UPDATE `users` SET `password`='".$form['password']."' 
                                    WHERE `user_id`='".$_SESSION['user_id']."'");
            $STH->execute();//Передаем данные для запроса
            //Переходим на станицу редактирования профиля с сообщением "Данные профиля изменены"
            return header("Location:../form-update_profile_page.php?message=Данные профиля изменены");
        }
        else return header("Location:../form-update_profile_page.php?message=Введены некорректный старый пароль");
    } 
