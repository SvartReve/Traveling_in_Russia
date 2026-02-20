<?php
    include "./check.php";    
    include "../connect.php";

    $form['user_id'] = $_SESSION['user_id'];
    $form['title'] =  $_POST['title']; 
    $form['genre'] = $_POST['genre'];
    
    if($_POST['age'] == true)
    $form['age'] =  "18+";
    else
    $form['age'] =  "нет";
    
    
    $form['director'] = $_POST['director'];
    $form['time'] = $_POST['time'];
    $form['country'] = $_POST['country'];
    $form['languages'] = $_POST['languages'];
    $form['description'] = $_POST['description'];

    try{
        $STH = $connect->prepare("INSERT INTO `application` SET `user_id`=:user_id, `title`=:title, `genre`=:genre, `age`=:age, `director`=:director, `time`=:time, `country`=:country, `languages`=:languages, `description`=:description" );
        $STH->execute($form);
    
        return header("Location:../index.php?message=Заявка успешно сформирована");  
    
    }catch(PDOException $e){
        
      return header("Location:../index.php?message=Заявка не сформирована, ошибка при вводе данных");  
    }
    
?>
