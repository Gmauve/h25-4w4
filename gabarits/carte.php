<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
  <figure class="carte__image">
    <!-- <img src="voyage.jpg" alt="Image de voyage"> -->
  </figure>
  <div class="carte__contenu">
    <?php
      if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail');
      }
    ?>
    <h2 class="carte__titre"><?php the_title(); ?></h2>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, " ... " ); ?></p>
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite ...</a>
    <?php  
      $post_categories = get_the_category();
      $cat_a_retirer = array(15); // Categories a exclure

      foreach ($post_categories as $category) {
        $filtered_categories = array_filter($post_categories, function($post_categories) use ($cat_a_retirer) {
            return !in_array($post_categories->term_id, $cat_a_retirer);
        });
      }

      foreach ($filtered_categories as $category) {
          echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
      }
    ?>
  </div>
</article>