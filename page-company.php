<?php
get_header();
get_template_part('template-parts/breadcrumb');
?>

<section class="company-message wow fadeInUp">
  <div class="company-message__inner l-inner">
    <h2 class="l-section__title--page">メッセージ</h2>

    <?php
    $page = get_page_by_path('company');
    $page_id = $page->ID;
    ?>
    <div class="company-message__concept concept">
      <h3 class="concept__title u-sp">
        <span><?php echo SCF::get('company_message-sp1', $page_id); ?></span>
        <span><?php echo SCF::get('company_message-sp2', $page_id); ?></span>
      </h3>
      <h3 class="concept__title u-pc">
        <span><?php echo SCF::get('company_message-pc', $page_id); ?></span>
      </h3>
      <p class="concept__text"><?php echo nl2br(SCF::get('company_message-text', $page_id)); ?></p>
    </div><!-- /.concept -->

  </div>
</section><!-- /.page-company -->

<div class="company-greeting wow fadeInUp">
  <div class="company-greeting__inner l-inner">
    <div class="company-greeting__picture-wrap">
      <?php $image = SCF::get('company_ceo-image',$page_id); ?>
      <figure class="greeting__picture"><img src="<?php echo wp_get_attachment_url($image); ?>" alt="ceo">
    </div>
    </figure>
    <div class="company-greeting__message">
      <?php echo nl2br(SCF::get('company_ceo-text')); ?>
    </div>
  </div>
</div><!-- company-greeting -->

<section class="company-profile wow fadeInUp">
  <div class="company-profile__inner l-inner">
    <h3 class="l-section__title--page">会社概要</h3>
    <dl class="company-profile__list">
      <div class="company-profile__item">
        <dt>社名</dt>
        <dd><?php echo SCF::get('company_name', $page_id); ?></dd>
      </div>
      <div class="company-profile__item">
        <dt>設立</dt>
        <dd><?php echo SCF::get('company_founded', $page_id); ?></dd>
      </div>
      <div class="company-profile__item">
        <dt>代表取締役</dt>
        <dd><?php echo SCF::get('company_ceo-name', $page_id); ?></dd>
      </div>
      <div class="company-profile__item">
        <dt>資本金</dt>
        <dd><?php echo SCF::get('company_capital', $page_id); ?></dd>
      </div>
      <div class="company-profile__item">
        <dt>所在地</dt>
        <dd><?php echo SCF::get('company_address', $page_id); ?></dd>
      </div>
    </dl>
    <div class="company-profile__map-wrap">
      <div class="company-profile__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207446.24819341738!2d139.60078282813424!3d35.668441463109744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2z5p2x5Lqs6YO95p2x5Lqs!5e0!3m2!1sja!2sjp!4v1625836353014!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    <div class="company-profile__map-link"><a href="https://goo.gl/maps/DE6bSZdCyT9GXbn19">Google mapで見る</a></div>
  </div>
</section><!-- profile -->

<?php get_footer(); ?>