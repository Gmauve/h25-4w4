<footer>
<?php
$footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
$footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
$footer_mission = get_theme_mod('footer_mission', 'Default Title');
?>  
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "footer__menu",
                ));
                ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <?= $footer_adresse ?>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form() ?>
                </div>
            </div>
            <div class="piedpage__s1__telephone">
                <?= $footer_telephone ?>
            </div>
            <div class="piedpage__s1__description">
                <?= $footer_mission ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer() ?>