<?php
$res ='<link rel="stylesheet" href="style.css"/>';
require_once("connexion.php");


if(isset($_GET["id"])) {
$id = strip_tags($_GET["id"]);
$sql ="SELECT id, Nom, Prenom, Descrip, Imgs, 3pro, CapPro, Tech, GitPro, Heb, Git, Linked FROM stagiaires WHERE id = :id";
$query = $db->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT); 
$query->execute();


while( $d = $query->fetch()){


    $res.= "<div class='apprenants'>";
    $res.= " ".$d['Prenom'] ." ". $d['Nom'] ."<br>";
    $res.= " "; 
    $res.= $d['Descrip'];
    $res .="<img src='../wp-content/themes/72/Imgs/".$d['Imgs']."'> </img> "." <br>";
    $res.=  " href machin " .$d['3pro'];
    $res.= "<br> <br>"; 
    $res.= "Capture du projet:" .$d['CapPro'];
    $res.= "<br> <br>"; 
    $res.= "Mes techs sont : " . $d['Tech'];
    $res.= "<br>"; 
    $res.= "Voir mon " . "<a href=".$d['Git'].">Github </a>";
    $res.= " " . " ou directement " . " "; 
    $res.= "<a href=".$d['GitPro'].">Le projet </a>";
    $res.= "<br> <br>"; 
    $res.=$d['Heb'];
    $res.= "<br>"; 
    $res.= "<a href=".$d['Linked'].">Linkedin </a>";
    $res.= "</div>";


}
    /*

    La page détail d'un apprenant :

Ses trois meilleurs projets : 3pro
Capture du projet : CapPro
Les technologies utilisées : Tech
Lien du projet déposé sur le github : GitPro
Lien sur hébergement : Heb
Lien vers son github : Git
Lien vers son linkedin : Linked
*/
    
}




?>


