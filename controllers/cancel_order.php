<?php
    include "check.php";
    include "../connect.php";
    $connect->exec(
        "UPDATE `application` SET `status`='Отмененный', `reason`='".$_POST["reason"]."' WHERE `application_id` = '".$_POST["id"]."'");
        return header("Location:../application_page.php?message=Состояние заказа изменено"); 
?>