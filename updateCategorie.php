<?php
    include_once("./db.php");
    
    echo "Vous avez modifie la categorie".$_GET['id']."";
    if (isset($_GET['id']))  
    {
        query("UPDATE categorie SET nomCat='".$_POST[catNom]."', descCat='".$_POST[catTextarea]."' WHERE idCat='".$_GET['id']."'");
        die('<meta  content="2;URL=./listeCategorie.php">');
    }
    else
    {
        echo"marche pas";
    }
    
?>
