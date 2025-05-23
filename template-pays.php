    <?php get_header() ?>
    <section class="pays global">
        <h1 class="pays__titre"></h1>
        <p class="pays__description"></p>

        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            }?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>