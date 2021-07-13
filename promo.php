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
    $res.= "<tr>  <th> <td>".'<a href="../wp-content/themes/72/fiche-du-stagiaire/?id='.$d['id'] .'"> <button> Voir + </button> </a>  </td> </th> </tr>';
    $res .= "</table>";
    $res .= "</div>";


}

?>
