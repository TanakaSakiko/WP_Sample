<?php
get_header();
get_template_part('template-parts/breadcrumb');
?>

<main class="page-contact">
  <div class="page-contact__inner l-inner">
    <?php
    $page = get_page_by_path('contact');
    $post = get_post($page);
    $content = $post->post_content;
    ?>
    <p class="page-contact__text"><?php echo $content; ?></p>

    <?php echo do_shortcode('[contact-form-7 id="132" title="お問い合わせフォーム"]') ?>

  </div>
</main><!-- /.page-contact -->

<?php get_footer(); ?>