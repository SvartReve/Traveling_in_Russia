<?php
	include "./check_admin.php";//Проверка прав администратора
	include "../connect.php";//Подключение к БД
	
	$connect->exec("DELETE FROM `catalog` WHERE `film_id`=".$_GET["id"]."");//Удаление строки из таблицы в БД
	return header("Location:../catalog_page.php?message=Товар удалён");//Вывод сообщения "Товар удален"
?>