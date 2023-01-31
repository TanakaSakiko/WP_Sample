<?php get_header(); ?>

<section class="news l-section wow fadeInUp" id="news">
  <div class="news__inner l-inner">
    <div class="news__title">
      <h2 class="l-section__title">NEWS</h2>
      <p class="l-section__subtitle">お知らせ</p>
    </div>
    <ul class="news__list">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
      ?>
          <li class="news__item news-item">
            <a class="news-item__link" href="<?php the_permalink(); ?>">
              <div class="news-item__content">
                <div class="news-item__header">
                  <p class="news-item__date"><time datetime="<?php the_time('c') ?>"><?php the_time('Y/n/j') ?></time></p>
                  <p class="news-item__label">
                    <?php
                    $category = get_the_category();
                    if ($category[0]) :
                      echo $category[0]->cat_name;
                    endif;
                    ?>
                  </p>
                </div>
                <p class="news-item__title"><?php the_title(); ?></p>
              </div>
            </a>
          </li><!-- /.news-item -->
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>

    </ul>
  </div>
</section><!-- /.news -->

<section class="service l-section wow fadeInUp" id="service">
  <div class="service__inner l-inner">
    <h2 class="l-section__title">SERVICE</h2>
    <p class="l-section__subtitle">事業内容</p>
    <ul class="service__list">

      <?php
      $page = get_page_by_path('service');
      $page_id = $page->ID;
      $service = SCF::get('repeat_service', $page_id);
      foreach ($service as $field) :
        $image_url = wp_get_attachment_image_src($field['service_image'], 'medium');
      ?>
        <li class="service__item">
          <figure class="service__picture"><img src="<?php echo $image_url[0]; ?>" alt="image"></figure>
          <h3 class="service__title"><?php echo $field['service_title']; ?></h3>
          <p class="service__text"><?php echo $field['service_excerpt']; ?></p>
        </li>
      <?php endforeach; ?>

    </ul>
    <p class="service__btn u-pc"><a class="c-btn" href="<?php echo home_url('/service'); ?>">MORE</a></p>
  </div>
</section><!-- /.service-->

<section class="works l-section wow fadeInUp" id="works">
  <div class="works__inner">
    <div class="works__slider">
      <div class="swiper">
        <div class="swiper-wrapper">

          <?php
          $args = array(
            'post_type' => 'works',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) :
              $query->the_post();
          ?>
              <div class="swiper-slide">
                <?php
                if (has_post_thumbnail()) :
                  the_post_thumbnail('large');
                else :
                ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/module/no-img.png" alt="no image">
                <?php endif; ?>
              </div>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>

        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
    <div class="works__content">
      <h2 class="l-section__title">WORKS</h2>
      <p class="l-section__subtitle">制作実績</p>
      <p class="works__text">様々なジャンルのWebサイト制作が可能です。<br>ご購入やお申込み数の増加などを実現します！</p>
      <p class="works__btn"><a class="c-btn" href="<?php echo home_url('/works'); ?>">MORE</a></p>
    </div>
  </div>
</section><!-- /.works -->

<section class="company l-section wow fadeInUp" id="company">
  <div class="company__inner l-inner">
    <h2 class="l-section__title">COMPANY</h2>
    <p class="l-section__subtitle">私たちについて</p>

    <?php
    $page = get_page_by_path('company');
    $page_id = $page->ID;
    ?>
    <div class="company__concept concept">
      <h3 class="concept__title u-sp">
        <span><?php echo SCF::get('company_message-sp1', $page_id); ?></span>
        <span><?php echo SCF::get('company_message-sp2', $page_id); ?></span>
      </h3>
      <h3 class="concept__title u-pc">
        <span><?php echo SCF::get('company_message-pc', $page_id); ?></span>
      </h3>
      <p class="concept__text"><?php echo nl2br(SCF::get('company_message-text', $page_id)); ?></p>
    </div><!-- /.concept -->

    <p class="company__btn"><a class="c-btn" href="<?php echo home_url('/company'); ?>">MORE</a></p>
  </div>
</section><!-- /.company -->

<section class="recruit l-section wow fadeInUp" id="recruit">
  <div class="recruit__wrap">
    <figure class="recruit__picture--sp u-sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit_pic-sp.jpg" alt="image">
    </figure>
    <div class="recruit__inner l-inner">
      <div class="recruit__content">
        <h2 class="l-section__title">RECRUIT</h2>
        <p class="l-section__subtitle">採用情報</p>
        <p class="recruit__text">私たちと一緒に働きませんか？</p>
        <p class="recruit__btn"><a class="c-btn" href="<?php echo home_url('/recruit') ?>">MORE</a></p>
      </div>
      <figure class="recruit__picture--pc u-pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit_pic-pc.jpg" alt="image">
      </figure>
    </div>
  </div>
</section><!-- /.recruit -->

<?php get_footer(); ?>