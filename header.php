<!doctype html>
<html class="no-js no-touch" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo home_url(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo home_url(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo home_url(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo home_url(); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo home_url(); ?>/safari-pinned-tab.svg" color="#2d89ef">
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="<?php echo home_url(); ?>/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="alternate" type="application/atom+xml" href="<?php echo home_url('feed/atom'); ?>" title="RSS feed">
    <link rel="alternate" type="application/rss+xml" href="<?php echo home_url('feed'); ?>" title="RSS feed">

    <?php wp_head(); ?>
</head>
<body <?php body_class(isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark' ? 'dark' : ''); ?>>
  <div class="wrapper--narrow">
    <div class="switch-theme">
      <svg class="switch-theme-sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.2 45.2" width="16" height="16"><path fill="#439bce" d="M22.6 11.3a11.3 11.3 0 100 22.6 11.3 11.3 0 000-22.6zM22.6 8c-1.2 0-2.2-1-2.2-2.3V2.2a2.2 2.2 0 114.4 0v3.5c0 1.3-1 2.2-2.2 2.2zM22.6 37.2c-1.2 0-2.2 1-2.2 2.2V43a2.2 2.2 0 104.4 0v-3.6c0-1.2-1-2.2-2.2-2.2zM33 12.2c-1-.8-1-2.2 0-3l2.4-2.6a2.2 2.2 0 013.1 3.1L36 12.2c-.8.9-2.2.9-3 0zM12.2 33c-.8-1-2.2-1-3 0l-2.6 2.4a2.2 2.2 0 003.1 3.1l2.5-2.5c.9-.8.9-2.2 0-3zM37.2 22.6c0-1.2 1-2.2 2.2-2.2H43a2.2 2.2 0 110 4.4h-3.6c-1.2 0-2.2-1-2.2-2.2zM8 22.6c0-1.2-1-2.2-2.3-2.2H2.2a2.2 2.2 0 100 4.4h3.5c1.3 0 2.2-1 2.2-2.2zM33 33c.8-1 2.2-1 3 0l2.5 2.4a2.2 2.2 0 11-3 3.1L32.8 36c-.8-.8-.8-2.2 0-3zM12.2 12.2c.9-.8.9-2.2 0-3L9.7 6.5a2.2 2.2 0 00-3 3.1L9 12.2c.9.9 2.3.9 3.1 0z"/></svg>
      <svg class="switch-theme-moon" xmlns="http://www.w3.org/2000/svg" viewBox="-12 0 448 448" width="16" height="16"><path d="M224 448c85.7 1 164-48.5 200.1-126.2a171 171 0 01-72 14.2 176.2 176.2 0 01-176-176c.9-65.7 37.2-125.8 94.8-157.3C255.4.7 239.7-.2 224 0a224 224 0 100 448zm0 0"/></svg>
    </div>
    <header class="header">
      <?php $hasSecondaryMenu = wp_get_nav_menu_items(get_nav_menu_locations()['secondary']); ?>
      <?php if(is_front_page()): ?><h1 class="header-title"><?php endif; ?><a href="<?php echo home_url(); ?>" class="header-title-link"><?php _e("Jean-David Daviet", "jdd"); ?></a><?php if(is_front_page()): ?></h1><?php endif; ?>
      <?php wp_nav_menu([
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'container'         => 'nav',
        'container_class'   => 'navbar',
        'items_wrap'        => '<ul class="navbar-list">%3$s' . ( $hasSecondaryMenu ? '<li class="navbar-item"><button class="navbar-link" data-js="toggle-menu">Plus&hellip;</button>' : '' ) . '</li></ul>',
        'walker'            => new Jdd_Menu_Walker()
      ]); ?>
    </header>
    <?php if($hasSecondaryMenu):
      wp_nav_menu([
        'menu'              => 'secondary',
        'theme_location'    => 'secondary',
        'container'         => 'nav',
        'container_class'   => 'secondary-navbar',
        'items_wrap'        => '<button class="secondary-navbar-close" data-js="toggle-menu">&#10006;</button><ul class="secondary-navbar-list navbar-list">%3$s<li class="navbar-item"><button class="secondary-navbar-link navbar-link" data-js="toggle-menu">Fermer le menu</button></li></ul>',
        'walker'            => new Jdd_Menu_Walker()
      ]);
    endif; ?>
