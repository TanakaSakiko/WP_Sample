<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>WEB DESIGN SPECIALIST | お客様の夢を叶えるWebサイトを制作</title>
  <meta name="description" content="お客様の夢を叶えること。それがWebサイトのゴールであり、私たちが目指すことです。だからこそちゃんと成果を出すサイトを全力でお作りします。お客様の笑顔を見たい。夢を実現する手助けをさせてください。" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:title" content="TOP - WEB DESIGN SPECIALIST" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="WEB DESIGN SPECIALIST" />
  <meta property="og:description" content="お客様の夢を叶えること。それがWebサイトのゴールであり、私たちが目指すことです。お客様の笑顔を見たい。夢を実現する手助けをさせてください。" />
  <?php
  wp_head();
  if (is_single()) :
  ?>
    <!-- twitter share -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!-- hatena share -->
    <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
    <!-- line share -->
    <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v11.0" nonce="cWAkdruz"></script>
<?php else : ?>
  </head>

  <body>
  <?php endif; ?>

  <header class="header js-header">
    <div class="header__inner">

      <?php if (is_home() || is_front_page()) : ?>
        <h1 class="header__logo header-logo js-header__logo">
          <a class="header-logo__link" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </h1><!-- header-logo -->
      <?php else : ?>
        <div class="header__logo header-logo js-header__logo">
          <a class="header-logo__link" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div><!-- header-logo -->
      <?php endif; ?>

      <div class="header__drawer drawer u-sp">
        <input type="checkbox" id="drawer-btn" class="drawer__input">
        <label for="drawer-btn" class="drawer__btn"><span class="drawer__line"></span></label>

        <?php
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'drawer',
            'container' => 'nav',
            'container_class' => 'drawer__nav drawer-nav',
            'menu_class' => 'drawer-nav__list',
          )
        );
        ?>

      </div><!-- /.drawer -->

      <?php
      wp_nav_menu(
        array(
          'depth' => 1,
          'theme_location' => 'global',
          'container' => 'nav',
          'container_class' => 'header__nav header-nav u-pc',
          'menu_class' => 'header-nav__list',
        )
      );
      ?>

    </div>
  </header><!-- /.header -->

  <?php if (is_front_page() || is_home()) : ?>
    <div class="top js-top wow fadeIn">
      <div class="top__inner l-inner">
        <div class="top__content">
          <p class="top__title">WEB <br class="u-sp">DESIGN <br class="u-sp">SPECIALIST</p>
          <p class="top__text">お客様の夢を叶える<br class="u-sp">Webサイトを制作</p>
          <p class="top__btn"><a class="c-btn--transparent" href="<?php echo home_url('/contact'); ?>">CONTACT</a></p>
        </div>
        <div class="top__scroll">SCROLL</div>
      </div>
    </div><!-- /.top -->

  <?php else : ?>
    <div class="sub-top js-top wow fadeIn">
      <div class="sub-top__inner l-inner">
        <div class="sub-top__content">

          <?php if (is_page('service')) : ?>
            <h2 class="sub-top__title">SERVICE</h2>
            <p class="sub-top__text">事業内容</p>
          <?php elseif (is_post_type_archive('works') || is_singular('works')) : ?>
            <h2 class="sub-top__title">WORKS</h2>
            <p class="sub-top__text">制作実績</p>
          <?php elseif (is_page('company')) : ?>
            <h2 class="sub-top__title">COMPANY</h2>
            <p class="sub-top__text">私たちについて</p>
          <?php elseif (is_page('recruit')) : ?>
            <h2 class="sub-top__title">RECRUIT</h2>
            <p class="sub-top__text">採用情報</p>
          <?php elseif (is_page('contact')) : ?>
            <h2 class="sub-top__title">CONTACT</h2>
            <p class="sub-top__text">お問い合わせ</p>
          <?php else : ?>
            <h2 class="sub-top__title">NEWS</h2>
            <p class="sub-top__text">お知らせ</p>
          <?php endif; ?>

        </div>
      </div>
    </div><!-- /.sub-top -->

  <?php endif; ?>