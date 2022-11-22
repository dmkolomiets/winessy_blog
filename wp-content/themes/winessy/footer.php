<footer>
        <div class="container">
            <div class="logo__menu">
                <div class="footer__logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/footer_logo.png" alt="logo">
                </div>
                <menu class="footer_menu">
                    <li><a href="https://winessy.eu/">Home</a></li>
                    <li><a href="https://winessy.eu/app">Marketplace</a></li>
                    <li class="act"><a class="active" href="<?php echo home_url(); ?>">Blog</a></li>
                    <li><a href="https://docs.winessy.eu/">About</a></li>
                </menu> 
            </div>

            <div class="contact__data">
                <div class="location block">
                    <div class="icon__wrap">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/location.svg" alt="">
                    </div>
                    <div class="descr">France<br>
                        <span>
                            <a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a>
                        </span>
                    </div>
                </div>
                <div class="email block">
                    <div class="icon__wrap">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/mail.svg" alt="">
                    </div>
                    <div class="descr">Questions and suggestions<br>
                        <a href="mailto:<?php the_field('mail', 2); ?>"><?php the_field('mail', 2); ?></a>
                    </div>
                </div>
                <div class="telegram__support block">
                    <div class="icon__wrap">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/telegram.svg" alt="">
                    </div>
                    <div class="descr">Telegram support <br>
                        <a target="_blank" href="https://t.me/<?php the_field('telegram_support', 2); ?>">@<?php the_field('telegram_support', 2); ?></a>
                    </div>
                </div>
            </div>

            <div class="social__card">
                <div class="footer__card">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/american-express.svg" alt="ae">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/mastercard.svg" alt="mc">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/visa.svg" alt="visa">
                </div>
                <div class="social">
                    <ul class="list__social">
                        <li><a target="_blank" href="https://www.linkedin.com/company/winessy/"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/linkedin.svg" alt="linkidin"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/WinessyNFT/"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/facebook.svg" alt="facebook"></a></li>
                        <li><a target="_blank" href="https://twitter.com/Winessy_invest"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/twitter.svg" alt="twitter"></a></li>
                    </ul>
                </div>
            </div>

            <div class="copiright__terms">
                <div class="copiright">
                    Copyright © 2021-2022 Winessy. All rights reserved.
                </div>
                <ul class="terms">
                    <li><a target="_blank" href="https://drive.google.com/file/d/1InmB8nEUj515TYqNiqRmDZGTCCByrfy-/view">Terms & conditions</a></li>
                    <li><a target="_blank" href="https://drive.google.com/file/d/1NTyvkD2dKAmzZL7MRfby5DwV6wZK4bxo/view">Privacy policy</a></li>
                    <li class="cookies"><a target="_blank" href="https://drive.google.com/file/d/161ZSpwkxiTAfVs97vpUXPWQFPZsh1zVh/view">Cookies policy</a></li>
                </ul>
            </div>

        </div>
        <?php 
            wp_footer();
        ?>
    </footer>