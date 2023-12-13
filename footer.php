<footer class="w-full bg-stone-800">
    <section class="flex flex-wrap container mx-auto py-12 px-6">
        <div class="w-full flex lg:justify-start justify-center">
            <!-- Logo -->
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'medium');
            if (has_custom_logo()) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="md:w-1/6 w-10/12 pb-8">';
            };
            ?>
        </div>
        <div class="w-full flex flex-wrap">
            <div class="lg:w-1/3 w-full flex flex-col justify-between lg:text-left text-center lg:order-1 order-3">

                <!-- Link indirizzo -->
                <?php
                $link = get_field('link_6', 'option');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="text-stone-500 lg:hover:text-stone-200 transition-all duration-300 py-4" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
                <div class="w-full flex flex-col py-2">
                    <!-- Privacy policy -->
                    <a class="w-full text-stone-500 lg:hover:text-stone-200 transition-all duration-300 py-4" href="<?php echo get_privacy_policy_url(); ?>">Privacy policy</a>
                    <!-- Credits -->
                    <a class="w-full text-stone-500 lg:hover:text-stone-200 transition-all duration-300 pt-2" href="https://federicotoldo.com/">Design and develop by Federico Toldo</a>
                </div>
            </div>
            <div class="lg:w-1/3 w-full flex flex-col lg:text-left text-center lg:order-2 order-1">
                <p class="text-xl uppercase tracking-wider text-stone-300 py-4">Sitemap</p>
                <!-- Menu Nav -->
                <nav class="w-full">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'secondary',
                        'container'         =>  false,
                        'menu_class'        => '2xl:text-4xl lg:text-3xl text-2xl',
                        'orderby'           => 'menu_order'
                    ));
                    ?>
                </nav>
            </div>
            <div class="lg:w-1/3 w-full flex flex-col justify-between lg:text-right text-center lg:order-3 order-2">
                <p class="text-xl uppercase tracking-wider text-stone-300 py-4">Contatti</p>
                <!-- Link telefono -->
                <?php
                $link = get_field('link_7', 'option');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="text-xl text-stone-500 lg:hover:text-stone-200 transition-all duration-300 py-4" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
                <!-- Link mail -->
                <?php
                $link = get_field('link_8', 'option');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="text-xl text-stone-500 lg:hover:text-stone-200 transition-all duration-300 py-4" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>

                <!-- Social -->
                <div class="lg:w-8/12 w-full flex justify-between self-end py-2">
                    <!-- Link tripadvisor -->
                    <?php
                    $link = get_field('link_3', 'option');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><img class="opacity-60 lg:hover:opacity-80 transition-all duration-300" src="<?php echo get_template_directory_uri() . '/assets/icon/simple-icons_tripadvisor.svg';?>" alt="Tripadvisor"></a>
                    <?php endif; ?>
                    <!-- Link facebook -->
                    <?php
                    $link = get_field('link_4', 'option');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><img class="opacity-60 lg:hover:opacity-80 transition-all duration-300" src="<?php echo get_template_directory_uri() . '/assets/icon/ic_baseline-facebook.svg';?>" alt="Facebook"></a>
                    <?php endif; ?>
                    <!-- Link instagram -->
                    <?php
                    $link = get_field('link_5', 'option');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><img class="opacity-60 lg:hover:opacity-80 transition-all duration-300" src="<?php echo get_template_directory_uri() . '/assets/icon/uil_instagram.svg';?>" alt="Instagram"></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>