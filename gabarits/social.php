<?php
/**
 * Template-part réseaux sociaux
 */
?>
<?php
for ($k=0; $k<3; $k++) {
    $hero_sociale[$k] = get_theme_mod('icone_sociale_' . $k, '');
}
?>
<img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
<img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
<img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
<img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">

<?php
    /************
    <div style="background-image: url(<?php echo $hero_sociale[0] ?>)" width="20" height="20"></div>
    <div style="background-image: url(<?php echo $hero_sociale[1] ?>)" width="20" height="20"></div>
    <div style="background-image: url(<?php echo $hero_sociale[2] ?>)" width="20" height="20"></div>
    <div style="background-image: url(<?php echo $hero_sociale[3] ?>)" width="20" height="20"></div>
    ************/
?>
