
<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-techup-style', get_template_directory_uri() . '/style.css' );
}
function test_func( $atts ){
  $test = "test";
  //include pagemachin
  return $test;
}
add_shortcode( 'test', 'test_func' );
//[test] dans un shortcode sur une page...



function accueil( $atts ){
 include ("accueil.php");
  return $res;
}
add_shortcode( 'acc', 'accueil' );

function slider( $atts ){
  include ("slider.php");
   return $res;
 }
 add_shortcode( 'slider', 'slider' );



function articles( $atts ){
  include ("articles.php");
   return $res;
 }
 add_shortcode( 'art', 'articles' );


 function promo( $atts ){
  include ("promo.php");
   return $res;
 }
 add_shortcode( 'pro', 'promo' );

 function presentation( $atts ){
  include ("presentation.php");
   return $res;
 }
 add_shortcode( 'pre', 'presentation' );


 function fiche( $atts ){
  include ("fiche.php");
   return $res;
 }
 add_shortcode( 'fiche', 'fiche' );

?>
