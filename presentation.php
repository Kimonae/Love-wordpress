<?php

$res ='<link rel="stylesheet" href="style.css"/>';
require_once("connexion.php");

<?php

$res ='<link rel="stylesheet" href="style.css"/>';
require_once("connexion.php");

$dir = "../wordpress/wp-content/themes/72/Presentations";
$da = "/wordpress/wp-content/themes/72/Presentations";
$a = scandir($dir);

$res.= "Présentations des projets de l'acs";
//print_r($a);
foreach ($a as $fichiers){ 

    $res .= "<a href='$da/$fichiers'>" . "<br>" . $fichiers . "</a>";

  

}


/*if (file_exists($fichiers)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($fichiers).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fichiers));
    readfile($fichiers);
    exit;
}*/
?>
