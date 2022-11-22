<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php bloginfo('name'); ?> | 
            <?php is_home() ? bloginfo('description') : wp_title(''); ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url'); ?>/assets/images/icon/fav.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url'); ?>/assets/images/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>Winessy</title>
		<?php
			wp_head();
		?>
    </head>
    
    <body>
    <header class="header">
        <div class="logo">
           
                <?php the_custom_logo(); ?>
            
        
        </div>
        <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <menu class="header-menu">
            <li><a href="https://winessy.eu/">Home</a></li>
            <li><a href="https://winessy.eu/app">Marketplace</a></li>
            <li class="act"><a class="active" href="<?php echo home_url(); ?>">Blog</a></li>
            <li><a href="https://docs.winessy.eu/">About</a></li>
        </menu>
        <div class="header-mobil-menu">
            <menu>
                <li><a href="https://winessy.eu/">Home</a></li>
                <li><a href="https://winessy.eu/app">Marketplace</a></li>
                <li class="act"><a class="active" href="<?php echo home_url(); ?>">Blog</a></li>
                <li><a href="https://docs.winessy.eu/">About</a></li>
                <div class="social">
                    <ul class="list__social">
                        <li><a target="_blank" href="https://www.linkedin.com/company/winessy/"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/linkedin.svg" alt="linkidin"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/WinessyNFT/"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/facebook.svg" alt="facebook"></a></li>
                        <li><a target="_blank" href="https://twitter.com/Winessy_invest"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/twitter.svg" alt="twitter"></a></li>
                    </ul>
                </div>
            </menu>
        </div>
    </header>