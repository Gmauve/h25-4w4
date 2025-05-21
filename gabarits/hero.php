<?php
/**
 * Template-part héro
 */
?>
<?php
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
for ($k=0; $k<3; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}
?>
<section class="hero">
    <div class="hero__carrousel hero__carrousel--active" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
    <div class="hero__radio">
        <input class="hero__radio__input" data-id_radio="0" type="radio" name="carrousel">
        <input class="hero__radio__input" data-id_radio="1" type="radio" name="carrousel">
        <input class="hero__radio__input" data-id_radio="2" type="radio" name="carrousel">
    </div>
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
        <p class="hero__description">
            <?php bloginfo('description'); ?>
        </p>
        <p class="hero__courriel">
            <?php bloginfo('admin_email'); ?>
        </p>
        <p class="hero__adresse">
            5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
        </p>
        <p class="hero_auteur">Auteur : <?= $hero_auteur ?></p>
        <div class="hero__icone">
            <?php get_template_part( 'gabarits/social' ); ?>
        </div>
    </div>
</section>