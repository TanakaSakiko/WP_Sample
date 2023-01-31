<?php
get_header();
get_template_part('template-parts/breadcrumb');
?>

<main class="page-service wow fadeInUp">
  <div class="page-service__inner l-inner">
    <ul class="page-service__list">

      <?php
      $page = get_page_by_path('service');
      $page_id = $page->ID;
      $service = SCF::get('repeat_service', $page_id);
      foreach ($service as $field) :
        $image_url = wp_get_attachment_image_src($field['service_image'], 'medium');
      ?>
        <li class="page-service__item ">
          <div class="page-service__picture-wrap">
            <figure class="page-service__picture"><img src="<?php echo $image_url[0]; ?>" alt="image"></figure>
          </div>
          <div class="page-service__text-wrap">
            <h2 class="page-service__title"><?php echo $field['service_title']; ?></h2>
            <p class="page-service__text"><?php echo nl2br($field['service_text']); ?></p>
          </div>
        </li>
      <?php endforeach; ?>

    </ul>
  </div>
</main><!-- /.page-service -->

<?php get_footer(); ?>