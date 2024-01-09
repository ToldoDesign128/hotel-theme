<?php get_header();
$page_id = get_queried_object_id(); ?>
<!-- Hero -->
<section id="hero" class="w-full lg:h-screen h-auto flex lg:flex-row flex-wrap overflow-hidden">
    <?php if (have_rows('section_1')) : ?>
        <?php while (have_rows('section_1')) : the_row();

            $hero_text = get_sub_field('testo_hero');
        ?>
            <div class="lg:w-1/2 lg:h-full h-[60vh] w-full">
                <?php $video = get_sub_field('video_hero'); ?>
                <video class="h-full object-cover" src="<?php echo esc_attr($video); ?>" autoplay muted loop></video>
            </div>
            <!-- Hero text -->
            <div class="textContainer lg:w-1/2 lg:h-full h-auto w-full flex flex-col justify-center lg:pl-24 px-6 py-24">

                <?php if (have_rows('testo_hero')) : ?>
                    <?php while (have_rows('testo_hero')) : the_row();

                        $hero_title = get_sub_field('titolo_hero');
                        $hero_subtitle = get_sub_field('sottotitolo_hero');
                        $hero_pulsante = get_sub_field('pulsante_hero');

                        $hero_pulsante_url = $hero_pulsante['url'];
                        $hero_pulsante_text = $hero_pulsante['title'];
                        $hero_pulsante_target = $hero_pulsante['target'] ? $hero_pulsante['target'] : '_self';
                    ?>

                        <div class="heroAnimation1 py-4 lg:mt-16">
                            <h1 class="font-serif 2xl:text-8xl lg:text-7xl text-6xl text-stone-200">
                                <?php echo esc_html($hero_title); ?>
                            </h1>
                            <h2 class="font-serif 2xl:text-3xl lg:text-2xl text-xl text-stone-300 pt-2">
                                <?php echo esc_html($hero_subtitle); ?>
                            </h2>
                        </div>
                        <div class="heroAnimation2 lg:w-8/12 w-full lg:text-xl text-lg py-4 text-stone-400">
                            <?php echo the_sub_field('testo_hero_paragrafo'); ?>
                        </div>
                        <a class="heroAnimation3 w-fit uppercase tracking-wider text-stone-100 lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-100 border-stone-100 py-2 px-5 mt-4 transition-all duration-300" href="<?php echo esc_url($hero_pulsante_url); ?>" target="<?php echo esc_attr($hero_pulsante_target); ?>"><?php echo esc_html($hero_pulsante_text); ?></a>

                    <?php
                    endwhile; ?>
                <?php endif; ?>
            </div>

        <?php
        endwhile; ?>
    <?php endif; ?>
</section>

<!-- Stiky post section -->
<section>
    <?php
    $sticky = get_option('sticky_posts');
    rsort($sticky);
    $args = array(
        'post__in' => $sticky,
        'posts_per_page' => 1
    );
    $sticky_query = new WP_Query($args);
    if (isset($sticky[0])) {
        while ($sticky_query->have_posts()) : $sticky_query->the_post();

            $stiky_banner_button = get_field('stiky_banner_button');
            $stiky_banner_button_url = $stiky_banner_button['url'];
            $stiky_banner_button_text = $stiky_banner_button['title'];
            $stiky_banner_button_target = $stiky_banner_button['target'] ? $stiky_banner_button['target'] : '_self';
    ?>

            <div class="w-full lg:h-96 h-60 relative overflow-hidden">
                <?php
                if (has_post_thumbnail()) {
                    echo get_the_post_thumbnail(null, 'full', ['class' => 'brightness-[.25]']);
                };
                ?>
                <div class="h-full absolute w-full top-0 py-24 px-4 flex flex-col items-center justify-center text-center lg:text-4xl text-2xl text-stone-300">
                    <?php echo the_content() ?>
                    <a class="w-fit uppercase tracking-wider lg:text-xl text-lg text-stone-100 lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-100 border-stone-100 py-2 px-5 mt-8 transition-all duration-300" href="<?php echo esc_url($stiky_banner_button_url); ?>" target="<?php echo esc_attr($stiky_banner_button_target); ?>">
                        <?php echo esc_html($stiky_banner_button_text); ?>
                    </a>
                </div>

            </div>

    <?php
        endwhile;
    }
    wp_reset_postdata(); ?>
</section>

<!-- Section 2 -->
<section class="animationContainer w-full lg:h-screen h-auto flex lg:flex-row flex-wrap overflow-hidden">
    <?php if (have_rows('sezione_2')) : ?>
        <?php while (have_rows('sezione_2')) : the_row();
        ?>
            <!-- Section 2 text -->
            <div class="textAnimation lg:w-1/2 lg:h-full h-auto w-full flex flex-col justify-center lg:pl-32 px-6 py-24 lg:order-1 order-2">
                <div class="heroAnimation2 lg:w-10/12 w-full lg:text-2xl text-xl py-4 text-stone-400">
                    <?php echo the_sub_field('testo_sezione_2'); ?>
                </div>
            </div>

            <!-- Section 2 text -->
            <div class="imageAnimationContainer lg:w-1/2 lg:h-full w-full flex flex-col lg:order-2 order-1">
                <?php if (have_rows('immagini_sezione_2')) :
                    while (have_rows('immagini_sezione_2')) : the_row();

                        $imageUno = get_sub_field('immagine_1');
                        $imageDue = get_sub_field('immagine_2');
                        $size = 'full';

                        if (!empty($imageUno)) : ?>
                            <div class="w-full lg:h-[50vh] h-[30vh] overflow-hidden">
                                <img class="imageAnimationUno w-full h-full object-cover" src="<?php echo esc_url($imageUno['url']); ?>" alt="<?php echo esc_attr($imageUno['alt']); ?>" />
                            </div>
                            <div class="w-full lg:h-[50vh] h-[30vh] overflow-hidden">
                                <img class="imageAnimationDue w-full h-full object-cover" src="<?php echo esc_url($imageDue['url']); ?>" alt="<?php echo esc_attr($imageDue['alt']); ?>" />
                            </div>
                        <?php endif; ?>

                    <?php
                    endwhile; ?>
                <?php endif; ?>
            </div>
        <?php
        endwhile; ?>
    <?php endif; ?>
</section>

<!-- Section 3 -->
<section class="animationContainerDue w-full lg:h-screen h-auto flex lg:flex-row flex-wrap overflow-hidden">
    <?php if (have_rows('sezione_3')) : ?>
        <?php while (have_rows('sezione_3')) : the_row();
        ?>
            <!-- Section 3 text -->
            <div class="imageAnimationContainer lg:w-1/2 lg:h-full w-full flex flex-col">
                <?php $imageTre = get_sub_field('immagine_3');
                if (!empty($imageTre)) : ?>
                    <div class="w-full lg:h-full h-[40vh] overflow-hidden">
                        <img class="imageAnimation w-full h-full object-cover" src="<?php echo esc_url($imageTre['url']); ?>" alt="<?php echo esc_attr($imageTre['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>

            <!-- Section 3 text -->
            <div class="textAnimation lg:w-1/2 lg:h-full h-auto w-full flex flex-col justify-center lg:pl-32 px-6 py-24">
                <div class="lg:w-10/12 w-full lg:text-2xl text-xl py-4 text-stone-400">
                    <?php echo the_sub_field('testo_sezione_3'); ?>
                </div>
            </div>

        <?php
        endwhile; ?>
    <?php endif; ?>
</section>

<!-- Section 4 -->
<section class="animationContainerTre w-full lg:h-screen h-auto flex lg:flex-row flex-wrap overflow-hidden">
    <?php if (have_rows('sezione_4')) : ?>
        <?php while (have_rows('sezione_4')) : the_row();
        ?>
            <!-- Section 4 text -->
            <div class="textAnimation lg:w-1/2 lg:h-full h-auto w-full flex flex-col justify-center lg:pl-32 px-6 py-24 lg:order-1 order-2">
                <div class="heroAnimation2 lg:w-10/12 w-full lg:text-2xl text-xl py-4 text-stone-400">
                    <?php echo the_sub_field('testo_sezione_4'); ?>
                </div>
            </div>

            <!-- Section 4 text -->
            <div class="imageAnimationContainer lg:w-1/2 lg:h-full w-full flex flex-col lg:order-2 order-1">
                <?php if (have_rows('immagini_sezione_4')) :
                    while (have_rows('immagini_sezione_4')) : the_row();

                        $imageUno = get_sub_field('immagine_5');
                        $imageDue = get_sub_field('immagine_6');
                        $imageTre = get_sub_field('immagine_7');
                        $imageQuat = get_sub_field('immagine_8');
                        $size = 'full';

                        if (!empty($imageUno)) : ?>
                            <div class="flex lg:h-1/2 h-full">
                                <div class="w-full lg:h-[50vh] h-[30vh] overflow-hidden">
                                    <img class="imageAnimationUno w-full h-full object-cover" src="<?php echo esc_url($imageUno['url']); ?>" alt="<?php echo esc_attr($imageUno['alt']); ?>" />
                                </div>
                                <div class="w-full lg:h-[50vh] h-[30vh] overflow-hidden">
                                    <img class="imageAnimationDue w-full h-full object-cover" src="<?php echo esc_url($imageDue['url']); ?>" alt="<?php echo esc_attr($imageDue['alt']); ?>" />
                                </div>
                            </div>
                            <div class="lg:flex hidden lg:h-1/2 h-full">
                                <div class="w-full lg:h-[50vh] h-[30vh] overflow-hidden">
                                    <img class="imageAnimationTre w-full h-full object-cover" src="<?php echo esc_url($imageTre['url']); ?>" alt="<?php echo esc_attr($imageTre['alt']); ?>" />
                                </div>
                                <div class="w-full lg:h-[50vh] h-[30vh] overflow-hidden">
                                    <img class="imageAnimationQuattro w-full h-full object-cover" src="<?php echo esc_url($imageQuat['url']); ?>" alt="<?php echo esc_attr($imageQuat['alt']); ?>" />
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php
                    endwhile; ?>
                <?php endif; ?>
            </div>
        <?php
        endwhile; ?>
    <?php endif; ?>
</section>

<!-- Section 5 -->
<section class="animationContainerQuattro w-full lg:h-screen h-auto flex lg:flex-row flex-wrap overflow-hidden">
    <?php if (have_rows('sezione_5')) : ?>
        <?php while (have_rows('sezione_5')) : the_row();

            $ristorante_pulsante = get_sub_field('pulsante_ristorante');

            $ristorante_pulsante_url = $ristorante_pulsante['url'];
            $ristorante_pulsante_text = $ristorante_pulsante['title'];
            $ristorante_pulsante_target = $ristorante_pulsante['target'] ? $ristorante_pulsante['target'] : '_self';
        ?>
            <!-- Section 5 text -->
            <div class="imageAnimationContainer lg:w-1/2 lg:h-full w-full flex flex-col">
                <?php $imageNove = get_sub_field('immagine_9');
                if (!empty($imageNove)) : ?>
                    <div class="w-full lg:h-full h-[40vh] overflow-hidden">
                        <img class="imageAnimationUno w-full h-full object-cover" src="<?php echo esc_url($imageNove['url']); ?>" alt="<?php echo esc_attr($imageNove['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>

            <!-- Section 5 text -->
            <div class="textAnimation lg:w-1/2 lg:h-full h-auto w-full flex flex-col justify-center lg:pl-32 px-6 py-24">
                <div class="lg:w-10/12 w-full py-4">
                    <div class="mb-20 lg:text-5xl text-3xl text-stone-300">
                        <?php echo the_sub_field('testo_sezione_5'); ?>
                    </div>
                    <a class="w-fit uppercase tracking-wider text-stone-100 lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-100 border-stone-100 py-2 px-5 transition-all duration-300" href="<?php echo esc_url($ristorante_pulsante_url); ?>" target="<?php echo esc_attr($ristorante_pulsante_target); ?>"><?php echo esc_html($ristorante_pulsante_text); ?></a>
                </div>
            </div>
        <?php
        endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>