<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                ));
                ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, eaque ratione facere eius cupiditate repellat corrupti asperiores distinctio similique accusantium iste odit saepe, voluptas expedita iusto, quo quis optio cum?
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form() ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nostrum at quo eum soluta atque suscipit neque id quas hic minus, temporibus, mollitia exercitationem. Temporibus repudiandae doloremque dolorem cupiditate alias.
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer() ?>