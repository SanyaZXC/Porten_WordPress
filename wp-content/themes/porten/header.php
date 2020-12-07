<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo( 'description' ); ?></title>
  <link rel="stylesheet" href="css/style.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__top-inner">
          <div class="header__information">
            <img class="header__phone-img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/Vector.svg" alt="">
            <a class="header__link" href="tel:+88121234567"> 8(812) 123-45-67 </a>
            <span class="header__item"> | </span>
            <span class="header__item"> Работаем 7 дней в неделю </span>
            <span class="header__item"> | </span>
            <span class="header__item"> 9:00 - 18:00</span>
          </div>
          <div class="header__authorization">
            <a href="#"><img class="header__authorization-img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/ic_sharp-log-in.svg" alt="enter"></a>
            <div class="header__authorization-inner">
              <a class="header__link " href="#">
                Войти
              </a>
              <span class="header__item"> / </span>
              <a class="header__link" href="#">
                Регистрация
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <div class="header__bottom-inner">
          <a class="logo__link" href="#">
            <img class="logo__img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.svg" alt="logo">
          </a>
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__item menu__item--active"><a class="menu__item-link  menu__item-link--active"
                  href="#">Понравилось </a></li>
              <li class="menu__item"><a class="menu__item-link" href="#">личный кабинет </a></li>
              <li class="menu__item"><a class="menu__item-link" href="#">настройки</a></li>
              <li class="menu__item-basket"><a class="menu__item-link" href="#"> <img class="menu__img"
                    src="<?php bloginfo( 'template_url' ); ?>/assets/img/bx_bx-cart.svg" alt="chip-basket"></a> </li>
              <li class="menu__item-search"><a class="menu__item-link" href="#"> <img class="menu__img"
                    src="<?php bloginfo( 'template_url' ); ?>/assets/img/gridicons_search.svg" alt="search"></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>