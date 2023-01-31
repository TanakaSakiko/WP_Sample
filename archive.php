<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="archive-news l-section wow fadeInUp">
  <div class="archive-news__inner l-inner">
    <ul class="archive-news__list">

      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>
          <li class="archive-news__item news-item">
            <a class="news-item__link" href="<?php the_permalink(); ?>">
              <div class="news-item__content">
                <div class="news-item__header">
                  <p class="news-item__date"><time datetime="<?php the_time('c') ?>"><?php the_time('Y/n/j') ?></time></p>
                  <?php
                  $category = get_the_category();
                  if ($category[0]) :
                  ?>
                    <p class="news-item__label"><?php echo $category[0]->cat_name; ?></p>
                  <?php endif; ?>
                </div>
                <p class="news-item__title"><?php the_title(); ?></p>
              </div>
            </a>
          </li><!-- /.news-item -->
      <?php
        endwhile;
      endif;
      ?>

    </ul>

    <?php get_template_part('template-parts/pagination'); ?>

  </div>
</section><!-- /.archive-news -->

<?php get_footer(); ?>