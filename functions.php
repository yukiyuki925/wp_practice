<?php 
function add_files() {

  // リセットCSS
  wp_enqueue_style('reset-style', get_theme_file_uri('./reset.css'));

  // メインCSS
  wp_enqueue_style('main-style', get_stylesheet_uri());

  // google-sentence-style
  wp_enqueue_style('google-style', 'https://fonts.googleapis.com');
  wp_enqueue_style('google-style', 'https://fonts.gstatic.com');

  // google-fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;400;500;700&family=Noto+Sans+JP&family=Noto+Serif:wght@300&family=Roboto:wght@300&display=swap');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond&family=M+PLUS+1p:wght@100;400;500;700&family=Noto+Sans+JP&family=Noto+Serif:wght@300&family=Roboto:wght@300&display=swap');
}
add_action('wp_enqueue_scripts', 'add_files');