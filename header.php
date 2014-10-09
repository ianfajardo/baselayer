<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=device-width , intial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->
    <style>
    <?php
          if ( ! display_header_text() ) :
    ?>
    .site-title,
    .site-description {
        clip: rect(1px 1px 1px 1px); /* IE7 */
        clip: rect(1px, 1px, 1px, 1px);
        position: absolute;
    }
<?php
    // If the user has set a custom color for the text, use that.
    elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) :
?>
    .site-title a {
        color: #<?php echo esc_attr( $text_color ); ?>;
    }
<?php endif; ?>
    </style>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <? header_image(); ?>
  <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
      <?php wp_nav_menu( array( 'menu' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
  </nav>

  <div class="masthead">
    <div id="header" class="site-header">
      <h1 class="site-title"><?php bloginfo( 'name' ); ?> </h1>
      <h2 class="site-description"><?php bloginfo( 'description') ?></h2>
    </div>
  </div>

