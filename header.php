<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/png">
	  <!--script src="https://kolpino-dkocentr.ru/wp-content/themes/kolpino-cdko/js/jquery.min.js"></script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <style type="text/css">
      .icon {
        padding-bottom: 5px;
        height: 20px;
        width: auto;
      }
    </style>
  </head>

  <body>
  <?php wp_head(); ?>

    <div class="blog-masthead">
      <img class="img-header" src="<?php bloginfo('template_url'); ?>/img/background.jpg" alt="" />
      <div class="line"></div>  
        <div class="container">
        <?php 
          $args = array(
            'theme_location' => 'menu',
            'menu' => '',
            'container' => false,
            'container_class' => '',
            'container_id' => '',
            'menu_class' => '',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<nav class = "nav">%3$s</ul>',
            'depth' => 2,
            'walker' => ''
          );
        
          wp_nav_menu( $args ); ?>
          <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

          <!-- nav menu -->
          <!--nav class="nav">
            
            <a class="nav-link active" href="#">Главная</a>
            <a class="nav-link" href="#">Новости</a>
            <a class="nav-link" href="#">Месяцеслов</a>
            <a class="nav-link" href="#">Расписание</a-->
            
            <!--li class="menu-item"><a class="dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Требы и обряды</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="./ispoved">Исповедь</a>
              <a class="dropdown-item" href="./prichas">Причастие</a>
              <a class="dropdown-item" href="#">Миропомазание</a>
              <a class="dropdown-item" href="#">Венчание</a>
              <a class="dropdown-item" href="#">Соборование</a>
            </div>
            </li-->
            
            <!--a class="nav-link" href="#">Галерея</a>
            <a class="nav-link" href="#">Контакты</a>
          </nav-->
        </div>
    </div>

    <!--div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Церковь новомученников и исповедников</h1>
        <p class="lead blog-description">Официальный сайт</p>
      </div>
    </div-->

