<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta name="format-detection" content="telephone=no,address=no,email=no" />
<title>practice</title>
<meta name="description" content="" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="header-wrapper">
      <div class="header-image">
        <a class="logo1" href="<?php echo esc_url(home_url('/')); ?>"><img class="logo1"
            src="<?php echo esc_url(get_theme_file_uri("./images/logo-1.png")); ?>"
            alt="<?php bloginfo('name'); ?>"></a>
        <a class="logo2" href="<?php echo esc_url(home_url('/')); ?>"><img class="logo2-2"
            src="<?php echo esc_url(get_theme_file_uri("./images/logo-2.png")); ?>"
            alt="<?php bloginfo('name'); ?>" /></a>
      </div>
      <div class="header-sentence">
        <p>都会の喧騒を忘れる空間で</p>
        <p>楽しいひとときを</p>
      </div>
    </div>
  </header>