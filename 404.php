<?php
    $description_404 = get_theme_mod('description_404', 'détails erreur 404');
    $image_404 = get_theme_mod('image_404', 'image erreur 404');
    $titre_404 = get_theme_mod('titre_404', 'message erreur 404');
?>
<?php get_header(); ?>
    <section class="err">
        <h1 class="err__titre"><?= $titre_404 ?></h1>
        <img src="<?= $image_404 ?>" alt="" class="err_img">
        <p class="err__description"><?= $description_404 ?></p>
        <?php get_template_part( 'gabarits/social' ); ?>
    </section>
    <?php get_footer(); ?>
</body>
</html>