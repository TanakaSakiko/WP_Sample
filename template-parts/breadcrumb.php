<nav class="breadcrumb wow fadeIn">
  <div class="breadcrumb__inner l-inner">
    <ol class="breadcrumb__list">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display_list();
      }
      ?>
    </ol>
  </div>
</nav><!-- /.breadcrumb -->