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

        <?php $smp = social_meta_properties(); ?>
      <!-- Open Graph -->
      <meta property="og:url" content="<?php echo $smp->url; ?>">
      <meta property="og:type" content="article" />
      <meta property="og:site_name" content="Festival Groove'N'Move"/>
      <meta property="og:title" content="<?php echo $smp->title; ?>">
      <meta property="og:description" content="<?php echo $smp->description; ?>">
      <meta property="og:img" content="<?php echo $smp->image; ?>">
      <meta property="og:image" content="<?php echo $smp->image; ?>">

      <!-- TWITTER -->
      <meta name="twitter:card" value="<?php echo $smp->description; ?>">
      <meta name="twitter:title" content="<?php echo $smp->title; ?>">
      <meta name="twitter:description" content="<?php echo $smp->description; ?>">
      <meta name="twitter:image" content="<?php echo $smp->image; ?>">
      <!-- GOOGLE -->
      <meta itemprop="name" content="<?php echo $smp->title; ?>">
      <meta itemprop="description" content="<?php echo $smp->description; ?>">
      <meta itemprop="image" content="<?php echo $smp->image; ?>">




        <?php wp_head(); ?>



        <!-- Google analytics -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88853039-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-88853039-1');
</script>




        <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '682074251953986');
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=682074251953986&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">
  fbq('track', 'ViewContent');

  $( '.show_ticket_office' ).click(function() {
      fbq('track', 'Lead');
  });

  $( '.gform_button' ).click(function() {
      fbq('track', 'CompleteRegistration');
  });

</script>





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
