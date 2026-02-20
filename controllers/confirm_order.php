<?php
    include "check.php";
    include "../connect.php";
    $connect->exec("UPDATE `application` SET `status` = 'Подтвержденный' WHERE `application_id`=".$_POST["id"]."");

    return header("Location:../application_page.php?message=Состояние заказа изменено"); 
?>