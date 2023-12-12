<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('federicotoldo_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#1c1917">
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

<body <?php body_class("bg-stone-900 scroll-smooth"); ?>>

    <header class="w-full fixed z-50">
        <div class="relative bg-stone-800 z-40">
            <div class="flex container mx-auto py-5 px-6 justify-between items-center">
                <!-- Cta -->
                <div class="lg:w-3/12 lg:flex justify-start hidden">
                    <a href="#" class="w-auto uppercase tracking-wider text-stone-100 lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-100 border-stone-100 py-2 px-5 transition-all duration-300">
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
                    echo '<a href="' . home_url() . '" class="lg:w-3/12 w-auto text-center font-semibold text-stone-100 lg:hover:text-stone-300 lg:hover:tracking-wide transition-all duration-300">' . get_bloginfo('name') . '</a>';
                };
                ?>
                <!-- Hamburgher -->
                <div id="hamburgerButton" class="group lg:w-3/12 w-auto flex items-center justify-end">
                    <p id="menuOpen" class="lg:flex hidden text-stone-300 group-hover:text-stone-100">Menu</p>
                    <p id="menuClose" class="hidden text-stone-300 group-hover:text-stone-100">Close</p>
                    <button title="Menu Button" class="py-4 px-[.5rem] ml-3 bg-transparent lg:group-hover:bg-stone-100 border lg:group-hover:ml-5 border-stone-100 transition-all duration-300">
                        <span class="flex h-px w-8 bg-stone-100 lg:group-hover:bg-stone-900"></span>
                        <span class="flex h-px w-8 mt-3 bg-stone-100 lg:group-hover:bg-stone-900"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="menu" class="absolute flex flex-col justify-center top-0 right-0 lg:w-1/2 w-full h-screen overflow-x-hidden bg-stone-800 z-30 px-8 transition-all duration-500">
            <nav class="w-full lg:text-right text-center mb-6">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => '2xl:text-8xl lg:text-7xl text-6xl text-gray-100',
                    'orderby'           => 'menu_order'
                ));
                ?>
            </nav>
            <!-- Cta -->
            <div class="lg:w-3/12 w-full lg:hidden flex lg:justify-start justify-center pt-8">
                <a href="#" class="w-full text-center uppercase tracking-wider text-stone-100 lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-100 border-stone-100 py-3 px-5 transition-all duration-300">
                    Prenota ora
                </a>
            </div>
            <!-- Cta -->
            <div class="lg:w-3/12 w-full lg:hidden flex lg:justify-start justify-center pt-8">
                <a href="#" class="w-full text-center uppercase tracking-wider text-stone-100 lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-100 border-stone-100 py-3 px-5 transition-all duration-300">
                    Chiedei un preventivo
                </a>
            </div>

        </div>
    </header>