<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('federicotoldo_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#ff3333">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php if (is_archive()) {
            echo get_the_archive_title();
        } else {
            echo the_title();
        }  ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class("bg-stone-100 dark:bg-stone-900 scroll-smooth"); ?>>

    <header class="w-full fixed z-50">
        <div class="relative bg-stone-200 dark:bg-stone-800 z-40">
            <div class="flex container mx-auto py-5 px-6 justify-between items-center">
                <!-- Cta -->
                <div class="lg:w-3/12 lg:flex justify-start hidden">
                    <a id="headerCta" href="#" class="w-auto uppercase tracking-wider text-stone-900 lg:hover:text-stone-100 dark:text-stone-100 dark:lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-900 dark:lg:hover:bg-stone-100 border-stone-900 dark:border-stone-100 py-2 px-5 transition-all duration-300">
                        Prenota ora
                    </a>
                </div>
                <!-- Logo -->
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'medium');
                if (has_custom_logo()) {
                    echo '<a  href="' . home_url() . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="max-h-12"></a>';
                } else {
                    echo '<a href="' . home_url() . '" class="lg:w-3/12 w-auto text-center font-semibold text-stone-900 dark:text-stone-100 lg:hover:text-stone-600 dark:lg:hover:text-stone-300 lg:hover:tracking-wide transition-all duration-300">' . get_bloginfo('name') . '</a>';
                };
                ?>
                <!-- Hamburgher -->
                <div id="hamburgerButton" class="group lg:w-3/12 w-auto flex items-center justify-end">
                    <p id="menuOpen" class="lg:flex hidden text-stone-700 dark:text-stone-300 group-hover:text-stone-900 dark:group-hover:text-stone-100">Menu</p>
                    <p id="menuClose" class="hidden text-stone-700 dark:text-stone-300 group-hover:text-stone-900 dark:group-hover:text-stone-100">Close</p>
                    <button title="Menu Button" class="py-4 px-[.5rem] ml-3 bg-transparent lg:group-hover:bg-stone-900 dark:lg:group-hover:bg-stone-100 border lg:group-hover:ml-5 border-stone-900 dark:border-stone-100 rounded-full transition-all duration-300">
                        <span class="flex h-px w-8 bg-stone-900 lg:group-hover:bg-stone-100 dark:bg-stone-100 lg:dark:group-hover:bg-stone-900"></span>
                        <span class="flex h-px w-8 mt-3 bg-stone-950 lg:group-hover:bg-stone-100 dark:bg-stone-100 lg:dark:group-hover:bg-stone-900"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="menu" class="absolute flex items-center top-0 right-0 lg:w-1/2 w-full h-screen overflow-x-hidden bg-stone-200 dark:bg-stone-800 z-30 px-8 transition-all duration-500">
            <nav class="w-full text-right">
            <?php
                  wp_nav_menu(array(
                     'theme_location'    => 'primary',
                     'container'         =>  false,
                     'menu_class'        => 'lg:text-8xl md:text-6xl text-4xl text-gray-900 dark:text-gray-100',
                     'orderby'           => 'menu_order'
                  ));
                  ?>
            </nav>
        </div>
    </header>