<?php get_header();
$page_id = get_queried_object_id(); ?>
<section class="w-full h-[80vh] flex items-center pt-24">
    <div class="container mx-auto px-6">
        <h1 class="lg:text-8xl text-6xl text-center text-stone-300">404</h1>
        <p class="lg:text-xl text-lg text-center text-stone-400 my-4">Purtroppo la pagina non è stata trovata</p>
        <div class="w-full flex items-center justify-center mt-8">
            <a href="<?php echo home_url(); ?>" class="w-auto uppercase tracking-wider text-stone-200 lg:hover:text-stone-900 border bg-transparent lg:hover:bg-stone-200 border-stone-200 py-2 px-5 transition-all duration-300">Torna alla Home</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>