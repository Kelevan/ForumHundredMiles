<?php
    include_once("./db.php");
    
    if (isset($_GET['id']))  
    {
        query("DELETE FROM categorie WHERE idCat=" .$_GET['id']."");
        //die('<meta http-equiv="refresh" content="2;URL=./listeCategorie.php">');
        header("location: ./listeCategorie.php");
    }
    else
    {
        echo"marche pas";
    }
    
?>
