<?php

$res ='<link rel="stylesheet" href="style.css"/>';
require_once("connexion.php");

$sql ="SELECT id, Nom, Prenom, Descrip, Propos, Imgs FROM stagiaires";
$query = $db->prepare($sql);
$query->execute();


while( $d = $query->fetch()){
    

    $res .= "<div class='Promo'>";
    $res .="<table>";
    $res .= "<th> ".$d['Prenom'] ."<td> ". $d['Nom'] . " </td> </th>" ."<br>";
    $res .= "<tr> <th> <td>". $d['Propos'] ." </td> </th> </tr>  <tr> <tr> <th> <td> <br>" ."<img src='../wp-content/themes/72/Imgs/".$d['Imgs'] . "'> </img>" ." </td> </th> </tr> </tr> </tr> <br>";
    $res .= "<tr> <th> <td> voir plus bouton </td> </th> </tr>";
    $res .= "</table>";
    $res .= "</div>";

    /*
    rajouter
    La page détail d'un apprenant :
Une photo du stagiaire
Son texte 'A propos de moi'
Ses trois meilleurs projets
Capture du projet
Une descriptionWordpress 4
Les technologies utilisées
Lien du projet déposé sur le github
Lien sur hébergement
Lien vers son github
Lien vers son linkedin





    */
}

?>