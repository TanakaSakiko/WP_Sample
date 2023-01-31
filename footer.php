<?php if(!is_page('contact')): ?>
<section class="contact l-section wow fadeInUp" id="contact">
  <div class="contact__inner l-inner">
    <h2 class="l-section__title">CONTACT</h2>
    <p class="l-section__subtitle">お問い合わせ</p>
    <p class="contact__text">Webサイトの制作のご依頼やお見積りなど、<br class="u-sp">お気軽にご相談ください。</p>
    <p class="contact__btn"><a class="c-btn" href="<?php echo home_url('/contact'); ?>">MORE</a></p>
  </div>
</section><!-- /.contact -->
<?php endif; ?>

<footer class="footer wow fadeIn">
  <div class="footer__inner l-inner">
    <?php
    wp_nav_menu(
      array(
        'depth' => 1,
        'theme_location' => 'footer',
        'container' => 'nav',
        'container_class' => 'footer__nav footer-nav',
        'menu_class' => 'footer-nav__list',
      )
    );
    ?>
    <p class="footer__text"><small>© PON DESIGN</small></p>
  </div>
</footer><!-- /.footer -->

<div class="pagetop js-pagetop"><a href="#TOP"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/module/pagetop.png" alt="トップへスクロール"></a>
</div>

<?php wp_footer(); ?>
</body>

</html>