<?php
    $description_404 = get_theme_mod('description_404', 'erreur 404');
    $image_404 = get_theme_mod('image_404', 'image erreur 404');
?>
<?php get_header(); ?>
    <section class="err">
        <h1 class="err__titre"></h1>
        <img src="<?= $image_404 ?>" alt="" class="err_img">
        <p class="err__description"><?= $description_404 ?></p>
    </section>
    <?php get_footer(); ?>
</body>
</html>