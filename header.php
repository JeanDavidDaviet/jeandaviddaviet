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
<body>
    <header class="wrapper--narrow header">
        <div class="row">
            <?php if(is_front_page()): ?><h1><?php endif; ?><a href="<?php echo home_url(); ?>">Jean-David Daviet</a><?php if(is_front_page()): ?></h1><?php endif; ?>
            <nav class="navbar">
                <ul class="navbar__list row">
                    <li class="navbar__item"><a href="<?php echo home_url('developpement-sites-wordpress'); ?>" class="navbar__link">WordPress</a></li>
                    <?php /* ?><li class="navbar__item"><a href="{{ path('page', { slug: 'developpement-sites-woocommerce' }) }}" class="navbar__link">WooCommerce</a></li><?php */ ?>
                    <li class="navbar__item"><a href="<?php echo home_url('blog'); ?>" class="navbar__link">Blog</a></li>
                    <?php /* ?><li class="navbar__item"><a href="{{ path('notes" class="navbar__link">Notes</a></li><?php */ ?>
                    <?php /* if(get_current_user_id() === 1): ?><li class="navbar__item"><a href="{{ path('portfolio" class="navbar__link">Portfolio</a></li><?php endif; */ ?>
                </ul>
            </nav>
        </div>
    </header>