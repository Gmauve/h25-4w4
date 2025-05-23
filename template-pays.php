    <?php get_header() ?>
    <section class="pays global">
        <h1 class="pays__titre">Les plus beaux pays</h1>
        <p class="pays__description">Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</p>

        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            }?>
            <?php endwhile; endif; ?>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#A7E99C" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,80C480,107,600,181,720,213.3C840,245,960,235,1080,218.7C1200,203,1320,181,1380,170.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        
        <!-- ////////////////////////////////////////////////  section rest-api -->
        <section class="destination">
            <?php search_theme_directories("destination") ?>
            <h2 class="destination__titre">Articles de search</h2>
            <div class="destination__list"></div>
        </section>

        <p>Date: <?php the_field('date') ?>&#176;C</p>
        <p>Heure: <?php the_field('heure') ?>&#176;C</p>
        <p>Conférencier: <?php the_field('conferencier') ?>&#176;C</p>
        <p>Coordonnées: <?php the_field('coordonnees') ?>&#176;C</p>

    </section>
    <?php get_footer(); ?>
</body>
</html>