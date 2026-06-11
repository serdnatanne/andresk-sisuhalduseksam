<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-inner">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            Rõõmus Laine OÜ
        </a>

        <nav class="main-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>">Esileht</a>
            <a href="<?php echo esc_url(home_url('/uudised')); ?>">Uudised</a>
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>">Kontakt</a>
        </nav>
    </div>
</header>
