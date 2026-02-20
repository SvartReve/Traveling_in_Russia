<?php 
    session_start();
    include "connect.php";
    
    $info = '<a class="nav-ico-link" href="login_page.php">
            <img src="assets/media/icon-font-user.svg" width="18px" alt="sign in"></a>';
    
    
    if(isset($_SESSION["user_id"])){
    $STH = $connect->prepare('SELECT * FROM `users` WHERE `user_id`='.$_SESSION["user_id"]);
    $STH->execute();
    
    $info = '';
    $photo = '';
    $link = ' login_page.php';
    while($row = $STH->fetch()){
           
        $info .= '<a class="nav-ico-profile" href="profile_page.php" title="Войти в профиль"> <img src="assets/media/user_avatar/'.$row['photo'].'" width="50px" height="40px" alt="profile"> </a>';
        
        $photo .= $row['photo'];
       
        $link = 'profile_page.php';
    }}
    
?>

<div class="message" ><?= (isset($_GET["message"])) ? $_GET["message"] : ""; ?></div>

  <!-- Шапка сайта с навигацией и логотипом -->
    <header>
      <a href="index.php" class="logo">
        <img src="assets/media/Logotype.svg" alt="logotype" /> <!--картинка логотипа-->
        <h1>Путешествия по России</h1> <!--текст логотипа-->
      </a>

      <!-- навигация шапки -->
      <nav class="main-navigation">
        <div class="nav-list">
          <a class="nav-link" href="page_gup.php">О народах</a>
          <a class="nav-link" href="page_gup.php">Традиции</a>
          <a class="nav-link" href="page_gup.php">Фотоистории</a>
          <a class="nav-link" href="page_gup.php">Блог</a>
        </div>

        <!-- иконки (функциональные) -->
        <div class="nav-ico">

          <!-- поиск по сайту -->
          <a class="nav-ico-link" href="">
            <img src="assets/media/icon-font-search.svg" width="18px" alt="search">
          </a>

          <!-- добавление в избранное -->
          <a class="nav-ico-link" href="page_gup.php">      
            <img src="assets/media/icon-font-heart.svg" width="18px" alt="like">
          </a>

          <!-- регистрация или авторизация -->
          <?= $info ?>
        </div>
      </nav>
    </header>
