<?php
$res ='<link rel="stylesheet" href="style.css"/>';
require_once("connexion.php");

//border autour des articles ?

$args = array(
    'numberposts' => 3,
    'order' => 'DES'
    );
    $my_posts = get_posts( $args );
    
    if( ! empty( $my_posts ) ){
    $output .= '<table>';
    foreach ( $my_posts as $p ){
    $output .= "<td>".get_the_post_thumbnail( $p->ID, 'medium' ) . "<br>";
    $output .= '<a href="' . get_permalink( $p->ID ) . '">'
    . $p->post_title . '</a><br>' . get_the_date( 'l F j, Y', $p->ID ) . '</td>';
    }
    $output .= '</table>';
    }

    $res .= $output;
    

?>