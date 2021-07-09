<?php
$res ='<link rel="stylesheet" href="style.css"/>';
require_once("connexion.php");


if(isset($_GET["id"]) {
$sql ="SELECT id, Nom, Prenom, Descrip FROM stagiaires WHERE id = id";
$query = $db->prepare($sql);
$query->execute();


while( $d = $query->fetch()){


    $res.= "<div class='apprenants'>";
    $res.= " ".$d['Prenom'] ." ". $d['Nom'] ."<br>";
    $res.= .$d['Descrip'];
    //$res.= .$d['Image'];
    
    $res.= "</div>";

}
}


?>
?>