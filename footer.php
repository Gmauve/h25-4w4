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
    
    <!-- SVG wave -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#123456" fill-opacity="1" d="M0,128L34.3,154.7C68.6,181,137,235,206,229.3C274.3,224,343,160,411,117.3C480,75,549,53,617,42.7C685.7,32,754,32,823,69.3C891.4,107,960,181,1029,176C1097.1,171,1166,85,1234,48C1302.9,11,1371,21,1406,26.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</footer>
<?php wp_footer() ?>