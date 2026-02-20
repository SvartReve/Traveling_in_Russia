<?php
    include "./connect.php";
    include "./controllers/check.php";


    $STH = $connect->prepare('SELECT * FROM `users` WHERE `user_id`="'.$_SESSION["user_id"].'"');
    $STH->execute();
    
    $user = '';
    $user_info = '';
    
    while($row = $STH->fetch()){
            $user .= '
                <h3 class="user-nikname">'.$row["login"].'</h3>
                <div class="user-avatar" style=" background-image: url(./'.$row["photo"].');"></div>
                <a  class="change_profile_btn w-100" type="button" href="form-update_profile_page.php?id='.$row["user_id"].'">Редактировать</a>';
            $user_info .='
                    <h6>ФИО: '.$row["surname"].' '.$row["name"].' '.$row["patronymic"].'</h6>
                    <h6>Почта: '.$row["email"].'</h6>';
    }
    
      $STH = $connect->prepare('SELECT * FROM `counters` WHERE `user_id`="'.$_SESSION["user_id"].'"');
    $STH->execute();
    
    $stat ='';
    
      while($row = $STH->fetch()){
            $stat .= '
                <p>Время активности: '.$row["time_counter"].'</p>
                <p>Фильмов посмотренно: '.$row["film_counter"].'</p>
                <p>Сохранено фильмов: '.$row["fav_counter"].'</p>
                 <p>Комментариев: '.$row["com_counter"].'</p>';
    }
    
    
    $STH = $connect->query("SELECT * FROM `favourite` WHERE `user_id`=".$_SESSION['user_id']." ORDER BY `created_at` DESC");
    $STH->execute();
    
    $fav_film = '';
    
    while($row = $STH->fetch()){
        $fav_film .=
            '<div class="card">
            
                  <a href="product_page.php?id='.$row["film_id"].'"><img class="card_img" src="'.$row["img"].'" alt="img_film"></a>
                <div class="film_info">
                
                    <p class="film_title">'.$row["title"].'</p>
                    <p>'.$row["year"].'
                    '.$row["country"].'
                    '.$row["genre"].'</p>
                </div>
            </div>';

    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- BASIC -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./images/favicon/KIWI.png" type="image/x-icon" /><!-- favicon --><!-- Description in browser search -->

    <title>Профиль</title>

    <!-- LINKS -->
    
    <!-- Bootstrap css & js -->
    <link rel="stylesheet" href="assets/styles//bootstrap/bootstrap.min.css">
    <script src="assets/scripts/js/bootstrap/bootstrap.min.js"></script>

    <link rel="stylesheet" href="assets/styles/base.css">
    <link rel="stylesheet" href="assets/styles/profile.css">
    <link rel="stylesheet" href="assets/styles/header.css">
    <style>
        body{
           margin:auto;
        }
    </style>

</head>

<body>
    
    <div class="page"> 
    <?php include "assets/components/header.php"; ?>


    <!-- Секция с информацией пользователя -->
    <section>
        <div class="container user_profile d-flex flex-wrap ">
            <!-- Блок с аватаом, кнопкой редактирования и информацией о пользователе -->
            <div class="sidebar">
                
                <div class="box_user d-flex flex-column">

                    <!-- Логин пользователя -->
                    <!-- Аватар пользователя -->
                    <!-- Кнопка редактирования -->
                    <?= $user ?>   
                  
                    <a class="btn-user-logout" href="./controllers/logout.php">Выйти из профиля</a>

                </div>
               
                <div class="box_info">

                    <a class="information_btn" style="user-select:none;" href="">Информация пользователя:</a>

                    <!-- Некоторая информация о пользователе -->
                    <div class="information">

                        <?= $user_info ?>
                        <?= $stat ?>
                        <a href="application_page.php" >заявки </a>
                    </div>
                </div>
              
            </div>
    
        </div>
    </section>

    <?php include "./footer.php"; ?>
    <script src="./js/open_info.js"></script>
    </div>
</body>
</html>



   