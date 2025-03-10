<?php
function theme_4w4_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  // Création d'une nouvelle section dans le customizer
  $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero', 'theme_4w4'),
    'priority' => 30,
  ));
  // Ajout de la donnée
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Guillaume Nagy', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  // Ajout du contrôle de la donnée
  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_4w4'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  ///////////////////////////////////////////////
  // Ajout de la donnée image en background
  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  // Ajout du contrôle de la donnée
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Image en arrière plan', 'theme_4w4'),
    'section' => 'hero_section',
  )));

  //*******************************************//
  // Création d'une nouvelle section dans le customizer
  $wp_customize->add_section('footer_section', array(
    'title' => __('Section Footer', 'theme_4w4'),
    'priority' => 30,
  ));
  // Ajout de la donnée
  $wp_customize->add_setting('footer_adresse', array(
    'default' => __('Adresse', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  // Ajout du contrôle de la donnée
  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse', 'theme_4w4'),
    'section' => 'footer_section',
    'type' => 'text',
  ));
}

add_action('customize_register', 'theme_4w4_customize_register');

function mon_theme_supports() {

  add_theme_support('title-tag');
  // Activer le support des menus personnalisés
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-height' => true,
      'flex-width'  => true,
  ));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );

function theme_4w4_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');  
wp_enqueue_style('mon-style-style', get_stylesheet_uri()); 
} 
//
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');

/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */

function modifie_requete_principal( $query ) {
  if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
    $query->set( 'category_name', 'populaire' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
  }
}
add_action( 'pre_get_posts', 'modifie_requete_principal' );
?>