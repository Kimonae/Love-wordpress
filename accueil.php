<?php

$res ='<link rel="stylesheet" href="style.css"/>';
require_once("connexion.php");


$sql ="SELECT id, Nom, Prenom, Descrip FROM stagiaires";
$query = $db->prepare($sql);
$query->execute();


while( $d = $query->fetch()){
    

    $res.= "<div class='apprenants'>";
    $res.= " ".$d['Prenom'] ." ". $d['Nom'] ."<br>";
    $res.= '<a href="../wp-content/themes/72/fiche.php?id='.$d['id'] .'"> <button> Voir + </button> </a>'; //marche pas à refaire
    
    $res.= "</div>";

}


//return $d ?
?>



