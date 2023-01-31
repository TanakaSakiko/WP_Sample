<?php
get_header();
get_template_part('template-parts/breadcrumb');
?>

<main class="page-recruit">

  <?php
  $page = get_page_by_path('recruit');
  $page_id = $page->ID;
  ?>
  <div class="recruit-message wow fadeInUp">
    <div class="recruit-message__inner l-inner">
      <p class="recruit-message__title u-sp"><?php echo nl2br(SCF::get('recruit_title', $page_id)); ?></p>
      <p class="recruit-message__title u-pc"><?php echo SCF::get('recruit_title', $page_id); ?></p>
      <p class="recruit-message__subtitle"><?php echo SCF::get('recruit_subtitle', $page_id); ?></p>
      <p class="recruit-message__text"><?php echo nl2br(SCF::get('recruit_text', $page_id)); ?></p>
    </div>
    <?php
    $image_sp = SCF::get('recruit_image-sp', $page_id);
    $image_pc = SCF::get('recruit_image-pc', $page_id);
    if (empty($image_sp)) :
    ?>
      <figure class="recruit-message__picture"><img src="<?php echo wp_get_attachment_url($image_pc); ?>" alt="image"></figure>
    <?php else : ?>
      <figure class="recruit-message__picture u-sp"><img src="<?php echo wp_get_attachment_url($image_sp); ?>" alt="image"></figure>
      <figure class="recruit-message__picture u-pc"><img src="<?php echo wp_get_attachment_url($image_pc); ?>" alt="image"></figure>
    <?php endif; ?>
  </div><!-- /.recruit-message -->

  <section class="recruit-detail wow fadeInUp">
    <div class="recruit-detail__inner l-inner">
      <h2 class="l-section__title--page">募集中の職種</h2>
      <div class="recruit-detail__wrap">
        <p class="recruit-detail__title"><?php echo SCF::get('recruit_occupation', $page_id); ?></p>
        <dl class="recruit-detail__list">
          <div class="recruit-detail__item">
            <dt>雇用形態</dt>
            <dd><?php echo SCF::get('recruit_status', $page_id); ?></dd>
          </div>
          <div class="recruit-detail__item">
            <dt>給与</dt>
            <dd><?php echo SCF::get('recruit_salary', $page_id); ?></dd>
          </div>
          <div class="recruit-detail__item">
            <dt>仕事内容</dt>
            <dd><?php echo SCF::get('recruit_description', $page_id); ?></dd>
          </div>
          <div class="recruit-detail__item">
            <dt>勤務時間</dt>
            <dd><?php echo SCF::get('recruit_time', $page_id); ?></dd>
          </div>
          <div class="recruit-detail__item">
            <dt>応募資格</dt>
            <dd>
              <p><?php echo nl2br(SCF::get('recruit_qualification', $page_id)); ?></p>
            </dd>
          </div>
        </dl>
        <p class="recruit-detail__btn"><a href="#" class="c-btn">応募する</a></p>
        <p class="recruit-detail__text">求人サイトへ遷移します</p>
      </div>
    </div>
  </section><!-- /.recruit-detail -->

  <section class="recruit-movie wow fadeInUp">
    <div class="recruit-movie__inner l-inner">
      <h2 class="l-section__title--page">社内ムービー</h2>
      <div class="recruit-movie__movie">
        <div class="rectuit-movie__iframe-wrap"></div>
      </div>
    </div>
  </section><!-- /.recruit-movie -->

</main><!-- page-recruit -->

<?php get_footer(); ?>