<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <?php $blog_name =  get_bloginfo('name'); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php echo $blog_name; ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#00ffff">
        <meta name="theme-color" content="#000000">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <?php wp_head(); ?>


    </head>
    <body <?php body_class(); ?>>


        <nav id="site_nav">

          <div class="container">
            <ul >
                <?php if( !is_front_page() ) : ?>
                    <li class="branding"><a href="<?php echo get_home_url(); ?>"><?php echo $blog_name; ?></a></li>
                <?php endif; ?>
                <?php chilly_nav('primary-navigation'); ?>
            </ul>
            </div>

        </nav>

          <a href="#" id="menu_button">Menu</a>
          <a href="<?php echo get_home_url();?>" class="logo_link"></a>
