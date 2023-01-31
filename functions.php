<?php
/**
 * テーマのセットアップ
 **/
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
  wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0', 'all');

  wp_enqueue_script('pagescroll', get_template_directory_uri() . '/assets/js/pagescroll.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('original', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), true);
  wp_enqueue_script('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// メニューの登録
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'archive';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

?>