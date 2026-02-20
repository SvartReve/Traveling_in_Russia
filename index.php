<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="/assets/media/Logotype.svg"
      type="image/x-icon"
    />
    <title>Путешествия по России: Главная страница</title>

    <!-- подключение стилей -->
    <link rel="stylesheet" href="assets/styles/header.css" />
    <link rel="stylesheet" href="assets/styles/footer.css" />
    <link href="assets/styles/menu-accordion.css" rel="stylesheet">

    <!--добавляем шрифты-->
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">

    <!-- подключение скриптов -->
    <script src="assets/scripts/animated-accordion.js"></script>

    <style>
      body {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      
      .page{
        width: 1280px;
        height: auto;
        background-color: page_gup.phpF6F3EC;
        box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.5);
      }

      .text_f_main {
        font-family:
          "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        color: page_gup.php1e325a;
      }

      .text_f {
        font-family:
          "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        color: #657f9c;
      }

      .text_f_w {
          text-decoration:none;
        font-family:
          "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        color: #fff;
      }

      .intro-area {
        MAX-width: 1280px;
        max-height: 320px;
        padding: 70px 20px 40px 0;
        background-image: url(assets/media/banner_1.svg);
        background-size: cover;
      }

      .intro-area div{
        width: 600px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .intro-area h1{
        color: #fff;
        margin: 0;
        font-size: 2.6em;
        text-align: center;
        
      }

      .intro-area h5{
        color: #fff;
        margin: 20px;
        font-size: 1.3em;
        text-align: center;
        
      }

      .intro-area button{
        color: #fff;
        font-size: 20px;
        padding: 10px 20px;
        border:1px solid #dd8747;
        border-radius: 10px;
        background-color: #dd8747;
      }

      .nationals {
        padding: 10px 40px 30px 40px;
        border-bottom: 2px solid rgb(236, 236, 236);
      }

      .nav_nations {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .block_nations {
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
      }

      .block_nations img {
       image-resolution: contain;
      }

      .block_nations h5 {
        margin: 5px 0 0 20px;
        font-size: 1.2em;
      }

      .block_nations p {
        font-size: 12px;
        margin: 5px 0 15px 20px;
      }
      .nations_btn {
        width: 120px;
        height: 30px;

        font-size:12px;

        margin: 0 15% 0 0;

        border: #41658f;
        border-radius: 5px;

        color: #ffff;
        background-color: #44659a;
        font-family:
          "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
      }

      .double{
        padding: 0 40px 30px 40px;
        display: flex; 
        justify-content: space-around;
      }

      .nav_photo_stories {
        width: 900px;
        display: flex;
        justify-content: space-between;
      }

      .block_photo_stories {
        display: flex;
        width: 250px;
        height: 140px;
        background-size: cover;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
      }

      .block_photo_stories div {
        align-self: self-end;
        width: 330px;
        height: 60px;
        background-color: #6d4735b0;
      }

      .photo_stories .text_f_w {
        margin: 10px 20px 5px 20px;
      }

      .photo_stories h5 {
        font-size: 1em;
      }

      .photo_stories a {
        font-size: 0.8em;
        color: #e0e0e0fd;
      }


      .populars{
        width: max-content; 
        padding: 20px; 
        background-color: #f0e7db; 
        margin: 20px 0 0 40px;
      }

      .populars h3{
        margin: 0 0 15px 0
      }

       .populars .nav_populars .accordion__header{
        background: url(assets/Images/arrow_menu.png) no-repeat 8px center; 
        color: #283a4e; 
        display: block; 
        padding: 10px 30px 10px 20px; 
        text-decoration: none;
      } 
    </style>
  </head>
  <body>
      
    <div class="page">

        <?php include "assets/components/header.php" ?>

    <main>

      <!-- баннер с рекламой -->
      <section class="intro-area">
        <div>
            <h1>Открой удивительные <br> народы России</h1>
            <h5>Культура, обычаи и традиции со всей страны</h5>
            <button onclick = "window.location.href='page_gup.php';">Путешествуй!</button>
        </div>
       
      </section>

      <section class="nationals">
        <h1 class="text_f_main" style="font-size:1.7em; margin: 5px 0 5px 0">Народы России</h1>
        <div class="nav_nations">
          <div class="block_nations">
            <img src="assets/media/img_block1_3.svg" height="200px" alt="Russian_img" />
            <div
              style="
                display: flex;
                justify-content: space-between;
                flex-direction: row;
                align-items: center;
              "
            >
              <div>
                <h5 class="text_f_main">Русские</h5>
                <p class="text_f">Русские в России</p>
              </div>
              <button onclick = "window.location.href='page_gup.php';" class="nations_btn">Узнать больше</button>
            </div>
          </div>

          <div class="block_nations">
            <img src="assets/media/img_block1_2.svg" height="200px" alt="Mordva_img" />
            <div
              style="
                display: flex;
                justify-content: space-between;
                flex-direction: row;
                align-items: center;
              "
            >
              <div>
                <h5 class="text_f_main">Мордва</h5>
                <p class="text_f">Мордва в России</p>
              </div>

              <button onclick = "window.location.href='page_gup.php';"class="nations_btn">Узнать больше</button>
            </div>
          </div>

          <div class="block_nations">
            <img src="assets/media/img_block1_1.svg" height="200px"alt="Tatar_img" />
            <div
              style="
                display: flex;
                justify-content: space-between;
                flex-direction: row;
                align-items: center;
              "
            >
              <div>
                <h5 class="text_f_main">Татары</h5>
                <p class="text_f">Татары в России</p>
              </div>

              <button onclick = "window.location.href='page_gup.php';"class="nations_btn">Узнать больше</button>
            </div>
          </div>
        </div>
      </section>

      <section class="double">

        <div class="float_left">
          <section class="photo_stories">
            <h1 class="text_f_main" style="font-size:1.7em; margin: 5px 0 5px 0;">Фотоистории</h1>
            <div class="nav_photo_stories">
              <div
                class="block_photo_stories"
                style="width:300px; height:180px; background-image: url(assets/media/img_block2_1.svg)"
              >
                <div>
                  <h5 class="text_f_w">Старинные обычаи Масленицы</h5>
                  <a class="text_f_w" href="page_gup.html">Смотреть</a>
                </div>
              </div>

              <div
                class="block_photo_stories"
                style="height:180px; background-image: url(assets/media/img_block2_2.svg)"
              >
                <div>
                  <h5 class="text_f_w">Мордовская свадьба</h5>
                  <a class="text_f_w" href="page_gup.html">Смотреть</a>
                </div>
              </div>

              <div
                class="block_photo_stories"
                style="width:300px; height:180px; background-image: url(assets/media/img_block2_3.svg)"
              >
                <div>
                  <h5 class="text_f_w">Традиции и быт татар</h5>
                  <a class="text_f_w" href="page_gup.html">Смотреть</a>
                </div>
              </div>
            </div>
          </section>
          <section style="background-image: url(assets/media/block_4.svg); background-size: cover; width: 900px; height: 380px;">

          </section>
        </div>

        <div class="float_right" style="margin-top:15px;">
            <aside class="populars">
                
              <h3 class="text_f_main" >Популярные рассказы</h3>

                <div id="accordion" class="accordion nav_populars">

                    <div class="accordion__item" style="border-top:1px solid #283a4e;">
                      <div class="accordion__header">
                    Гостеприимство Русских
                      </div>
                      <div class="accordion__body">
                        <div class="accordion__content">
                          <a href="page_gup.php">Общие сведения</a>
                          <a href="page_gup.php">Традиционные ремесла</a>
                          <a href="page_gup.php">Кулинарные традиции</a>
                          <a href="page_gup.php">Сказания и фольклор</a>
                          <a href="page_gup.php">Обряды и ритуалы</a>
                        </div>
                      </div>
                    </div>
                   
                    <div class="accordion__item" style="border-top:1px solid #283a4e;">
                      <div class="accordion__header">
                    Традиции Мордвы
                      </div>
                      <div class="accordion__body">
                        <div class="accordion__content">
                          <a href="page_gup.php">Общие сведения</a>
                          <a href="page_gup.php">Роль семьи и общины</a>
                          <a href="page_gup.php">Кухня</a>
                          <a href="page_gup.php">Истории</a>
                          <a href="page_gup.php">Обряды и ритуалы</a>
                        </div>
                      </div>
                    </div>
                   
                    <div class="accordion__item" style="border-top:1px solid #283a4e;">
                      <div class="accordion__header">
                        Праздник "Сабантуй"
                      </div>
                      <div class="accordion__body">
                        <div class="accordion__content">
                          <a href="page_gup.php">Общие сведения</a>
                          <a href="page_gup.php">Традиции</a>
                          <a href="page_gup.php">Кулинарные особенности</a>
                          <a href="page_gup.php">Одежда и культура</a>
                          <a href="page_gup.php">Современные изменения</a>
                        </div>
                      </div>
                    </div>
                    
                </div>
                
            </aside>
        </div>
      </section>
      <section style="background-image: url(assets/media/block_3.svg); background-size: cover; width: 1280px; height: 350px;" >

      </section>
    </main>
    <footer>
      <div class="logotype">
        <a href="index.html" class="logo">
          <img src="assets/media/Logotype.svg" alt="logotype" />
          <h1>Путешествия <br> по России</h1>
        </a>
      </div>

      <div class="about">
        <h5>О проекте</h5>
        <a href="">Сообщество в ВК</a>
        <a href="">Беседа в ТГ</a>
        <a href="">Контакты</a>
      </div>

      <div class="materials">
        <h5>Полезные материалы</h5>
        <a href="">О народах</a>
        <a href="">Традиции</a>
        <a href="">Фотоистории</a>
        <a href="">Блог</a>
      </div>

      <div class="links">
        <div class="socials">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <input type="text"><button>Подписаться</button>
  
        </div>
        <p>© 2026 Путешествия по России. Все права защищены</p>
      </div>
      
    </footer>
    </div>

    <script>
      new ItcAccordion(document.querySelector('.accordion'), {
        alwaysOpen: false
      });
    </script>
  </body>
</html>
