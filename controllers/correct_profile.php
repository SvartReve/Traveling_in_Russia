<?php
    include "../connect.php";
    include 'check.php';

    $form['name'] = $_POST['name'];
    $form['surname'] = $_POST['surname'];
    $form['patronymic'] = $_POST['patronymic'];
    $form['email'] = $_POST['email'];
    //Формируем SQL-запрос
    $STH = $connect->prepare("UPDATE `users` SET `name`='".$form['name']."', `surname`='".$form['surname']."',
    `patronymic`='".$form['patronymic']."', `email`='".$form['email']."' WHERE `user_id`='".$_SESSION['user_id']."'");
    $STH->execute();

    return header("Location:../form-update_profile_page.php?message=Данные профиля изменены"); 
?>