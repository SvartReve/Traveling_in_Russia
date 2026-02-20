<?php
	include "check_admin.php";//Проверяем права администратора
	include "../connect.php";//Подключаемся к БД

	$id = $_POST["id"];//Получаем id пользователя

	$STH = $connect->prepare("SELECT * FROM `application` WHERE `user_id`='".$_SESSION["user_id"]."' AND `application_id`='".$id."'");
	$STH->execute();//Получаем все строки заказа из БД

	$order = $STH->fetch();
	$STH = $connect->exec("DELETE FROM `application` WHERE `application_id`='".$id."'");//Удаляем заказ из БД

	return header("Location:../application_page.php?message=Заказ удалён");//Выводим сообщение "Заказ удален" 
?>