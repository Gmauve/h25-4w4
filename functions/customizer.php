<?php
function theme_4w4_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    //////////// Création de la section Hero ////////////
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero', 'theme_4w4'),
        'priority' => 30,
    ));
    // Ajout de la donnée auteur
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
    
    ////////////////////////
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
    //////////// Création de la section Footer ////////////
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section Footer', 'theme_4w4'),
        'priority' => 30,
    ));
    // Ajout de la donnée adresse
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

    ////////////////////////
    // Ajout de la donnée telephone
    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('Numéro de téléphone', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // Ajout du contrôle de la donnée
    $wp_customize->add_control('footer_telephone', array(
        'label' => __('Numéro de téléphone', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
    
    ////////////////////////
    // Ajout de la donnée mission
    $wp_customize->add_setting('footer_mission', array(
        'default' => __('Mission', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // Ajout du contrôle de la donnée
    $wp_customize->add_control('footer_mission', array(
        'label' => __('Mission', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    //*******************************************//
    //////////// Création de la section Erreur 404 ////////////
    $wp_customize->add_section('section_404', array(
        'title' => __('Erreur 404', 'theme_4w4'),
        'priority' => 30,
    ));
    // Ajout de la donnée description 404
    $wp_customize->add_setting('description_404', array(
        'default' => __('Description d\'erreur 404', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // Ajout du contrôle de la donnée
    $wp_customize->add_control('description_404', array(
        'label' => __('Description d\'erreur 404', 'theme_4w4'),
        'section' => 'section_404',
        'type' => 'text',
    ));

    ////////////////////////
    // Ajout de la donnée image 404
    $wp_customize->add_setting('image_404', array(
        'default' => __('Image d\'erreur 404', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // Ajout du contrôle de la donnée
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_404', array(
        'label' => __('Image d\'erreur 404', 'theme_4w4'),
        'section' => 'section_404',
    )));

    ////////////////////////
    // Ajout de la donnée titre 404
    $wp_customize->add_setting('titre_404', array(
        'default' => __('Message d\'erreur 404', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // Ajout du contrôle de la donnée
    $wp_customize->add_control('titre_404', array(
        'label' => __('Message d\'erreur 404', 'theme_4w4'),
        'section' => 'section_404',
        'type' => 'text',
    ));
}
    
add_action('customize_register', 'theme_4w4_customize_register');
?>