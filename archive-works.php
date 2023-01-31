<?php
get_header();
get_template_part('template-parts/breadcrumb');
?>

<section class="archive-work wow fadeInUp">
  <div class="archive-work__inner l-inner">
    <ul class="archive-work__list">

      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>
          <li class="archive-work__item">
            <figure class="archive-work__picture">
              <?php
              if (has_post_thumbnail()) :
                the_post_thumbnail('large');
              else :
              ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/module/no-img.png" alt="no image">
              <?php endif; ?>
            </figure>
            <h2 class="archive-work__title"><?php the_title(); ?></h2>
          </li>
      <?php
        endwhile;
      endif;
      ?>

    </ul>
  </div>
</section><!-- /.archive-work -->

<?php get_footer(); ?>