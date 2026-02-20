<?php
    include "check.php";
    include "../connect.php";
        $path = "images/user-avatar/". $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "../".$path);
    // Обновляем запись пользователя
    $STH = $connect->query("UPDATE `users` SET `photo`='".$path."' WHERE `user_id`=".$_SESSION['user_id']."");
    // Возвращаемся на страницу изменения профиля
    return header("Location:../form-update_profile_page.php?id=".$_SESSION['user_id']."");
?>