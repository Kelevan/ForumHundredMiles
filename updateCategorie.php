<?php
    include_once("./db.php");
    
    echo "Vous avez modifie la categorie".$_GET['id']."";
    if (isset($_GET['id']))  
    {
        query("UPDATE categorie SET nomCat='".$_POST["Catnom"]."', descCat='".$_POST["catTextarea"]."'");
        die('<meta http-equiv="refresh" content="2;URL=./listeCategorie.php">');
    }
    else
    {
        echo"marche pas";
    }
    
?>
