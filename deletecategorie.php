<?php
    include_once("./db.php");
    
    echo "Vous avez supprime le membre numero ".$_GET['id']."";
    if (isset($_GET['id']))  
    {
        query("DELETE FROM categorie WHERE idCat=" .$_GET['id']."");
        die('<meta http-equiv="refresh" content="2;URL=./listeCategorie.php">');
    }
    else
    {
        echo"marche pas";
    }
    
?>
