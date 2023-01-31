<?php
get_header();
get_template_part('template-parts/breadcrumb');
?>

<section class="single-news wow fadeInUp">
  <div class="single-news__inner l-inner">

    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <h1 class="single-news__title"><?php echo the_title(); ?></h1>
        <div class="single-news__info">
          <p class="single-news__date"><time datetime="<?php the_time('c'); ?>">2<?php the_time('Y/n/j'); ?></time></p>
          <p class="single-news__label">
            <?php
            $category = get_the_category();
            if ($category[0]) :
              echo $category[0]->name;
            endif;
            ?>
          </p>
        </div>
        <figure class="single-news__picture">
          <?php
          if (has_post_thumbnail()) :
            the_post_thumbnail('large');
          else :
          ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/module/no-img.png" alt="no image">
          <?php endif; ?>
        </figure>
        <div class="single-news__content">
          <?php the_content(); ?>
        </div>
    <?php
      endwhile;
    endif;
    ?>

    <ul class="single-news__share share">
      <li class="share__facebook">
        <div class="fb-like" data-href="https://test.sntk-web.com" data-width="70" data-layout="button_count" data-action="like" data-share="true" data-size="large"></div>
      </li>
      <li class="share__twitter">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-lang="ja" data-show-count="false">Tweet</a>
      </li>
      <li class="share__hatena">
        <a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" data-hatena-bookmark-height="30" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
      </li>
      <li class="share__line">
        <div class="line-it-button" data-lang="ja" data-type="share-b" data-ver="3" data-url="http://test.stnk-web.com" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
      </li>
    </ul><!-- /.share -->

    <div class="single-news__pagelinks">
      <div class="single-news__pagelink--next">
        <?php next_post_link('%link'); ?>
      </div>
      <div class="single-news__pagelink--prev">
        <?php previous_post_link('%link'); ?>
      </div>
    </div>

    <div class="single-news__archive-link">
      <a href="<?php echo home_url('/archive'); ?>">NEWS一覧</a>
    </div>
  </div>
</section><!-- /.single-news -->

<?php get_footer(); ?>