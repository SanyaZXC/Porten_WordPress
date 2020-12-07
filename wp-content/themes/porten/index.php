<?php get_header(); ?>
  <section class="first-screen" style="background-image: url(<?php the_field( 'top' ) ?>);">
    <div class="container">
      <div class="first-screen-inner">
        <div class="first-screen__logo">
          <img class="first-screen__logo-img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo2.svg" alt="logo">
        </div>
        <div class="first-screen__content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus interdum purus, est tortor pulvinar ut in.
          Fringilla a
          diam enim sed justo, sed iaculis sagittis. Tortor id eu interdum nec ut iaculis. Penatibus ullamcorper
          ultricies morbi
          ipsum sem metus pharetra, mi. Tortor nibh magna feugiat id nunc, dui nisl viverra.
        </div>
      </div>
    </div>
  </section>
  <section class="new">
    <div class="new-season">
      <h1 class="title">СЕЗОН 2020/21</h1>
      <span class="line"></span>
      <ul class="new-season__list">
        <li class="new-season__item"><a href="#" class="new-season__link">
            <div class="new-season__background-grey"><img  src="<?php the_field( 'new_season_1' ) ?>" alt=""></div>
            <h3 class="new-season__item-title"><?php the_field( 'new_season_name_1' ) ?></h3>
            <h4 class="new-season__item-cost"><?php the_field( 'new_season_price_1' ) ?></h4>
          </a>
        </li>
        <li class="new-season__item"><a href="#" class="new-season__link">
            <div class="new-season__background-grey"><img src="<?php the_field( 'new_season_2' ) ?>" alt=""></div>
            <h3 class="new-season__item-title"><?php the_field( 'new_season_name_2' ) ?></h3>
            <h4 class="new-season__item-cost"><?php the_field( 'new_season_price_2' ) ?></h4>
          </a></li>
        <li class="new-season__item"><a href="#" class="new-season__link">
            <div class="new-season__background-grey"><img src="<?php the_field( 'new_season_3' ) ?>" alt=""></div>
            <h3 class="new-season__item-title"><?php the_field( 'new_season_name_3' ) ?></h3>
            <h4 class="new-season__item-cost"><?php the_field( 'new_season_price_3' ) ?></h4>
          </a></li>
      </ul>
    </div>
    <div class="new-collection" style="background-image: url(<?php the_field( 'new_collection_photo' ) ?>);">
      <div class="title">Новая коллекция</div>
      <div class="line"></div>
      <a class="button" href="#">Каталог</a>
    </div>collection_2018
  </section>

  <section class="collection-2018">
    <img src="<?php the_field( 'collection_2018' ) ?>" class="collection-2018__photo">
    <div class="collection-2018-inner">
      <h1 class="collection-2018__title">коллекция 2018</h1>
      <div class="line"></div>
      <div class="collection-2018__content"><?php the_field( 'text_collection_2018' ) ?></div>
      <a class="button" href="#">посмотреть коллекцию</a>
    </div>
  </section>
  <section class="new-goods">

  </section>
  <section class="our-brands">
    <div class="container">
      <div class="our-brands-inner">
        <h1 class="title">наши бренды</h1>
        <div class="line"></div>
        <ul class="our-brands__list">
          <li class="our_brands__item"><img class="our_brands__item-img" src="<?php the_field( 'brend_photo_1' ) ?>"
              alt="Coco fine jewlery"></li>
          <li class="our_brands__item"><img class="our_brands__item-img" src="<?php the_field( 'brend_photo_2' ) ?>"
              alt="Coco fine jewlery"></li>
          <li class="our_brands__item"><img class="our_brands__item-img" src="<?php the_field( 'brend_photo_3' ) ?>"
              alt="Coco fine jewlery"></li>
          <li class="our_brands__item"><img class="our_brands__item-img" src="<?php the_field( 'brend_photo_4' ) ?>"
              alt="Coco fine jewlery"></li>
        </ul>
      </div>
    </div>
  </section>

<?php get_footer(); ?>