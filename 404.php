<?php
    $description_404 = get_theme_mod('description_404', 'message erreur 404');
    $image_404 = get_theme_mod('image_404', 'image erreur 404');
    $titre_404 = get_theme_mod('titre_404', 'titre erreur 404');
    $couleur_404 = get_theme_mod('couleur_404', 'couleur texte 404');
?>
<?php get_header(); ?>
    <section class="err" style="background-image: url(<?= $image_404 ?>); color: <?= $couleur_404 ?>">
        <h1 class="err__titre"><?= $titre_404 ?></h1>
        <p class="err__description"><?= $description_404 ?></p>
        <a class="err__retour" href="<?php echo home_url() ?>" style="background-color: <?= $couleur_404 ?>;">Retour à l'accueil</a>
        <?php wp_nav_menu(array(
            "menu" => "erreur404",
            "container" => "nav",
            "container_class" => "erreur404__menu",
        ));
        ?>
    </section>
    <?php get_footer(); ?>
</body>
</html>