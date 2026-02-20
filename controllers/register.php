<?php
    include "../connect.php";//Включаем исполнение файла connect.php
    
    //Получаем значения, которые необходимо записать в таблицу 'users'
    $form['name'] = $_POST['name'];
    $form['surname'] = $_POST['surname'];
    $form['patronymic'] = $_POST['patronymic'];
    $form['login'] = $_POST['login'];
    $form['email'] = $_POST['email'];
    //
    $form['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $form['role'] = 'client';
    $form['photo'] = 'images/user.jpg';
    
    
    $STH = $connect->prepare("SELECT * FROM `users` WHERE `email`=? ");
    $STH->execute([$form['email']]);
    
    $id = 'zero';
    $STH->setFetchMode(PDO::FETCH_ASSOC);//Создаем ассоциативный массив найденых записей
    while($row = $STH->fetch())
    {
        $id = $row['user_id'];
    }

    if($id === 'zero'){
        
        $STH = $connect->prepare("INSERT INTO `users` SET `name`=:name, `surname`=:surname, `patronymic`=:patronymic, 
                `login`=:login, `email`=:email, `password`=:password, `role`=:role,`photo`=:photo" );
        $STH->execute($form);
        
        return header("Location:../index.php?message=Вы зарегистрировались");  
    }
    
    return header("Location:../index.php?message=Данная почта уже зарегистрирована");  
     

?>

