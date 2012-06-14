<?php
    include_once("./db.php");
    
    if (isset($_GET['id']))  
    {
        query("DELETE FROM categorie WHERE idCat=" .$_GET['id']."");
        header("location: ./listeCategorie.php");
    }
    else
    {
        echo"marche pas";
    }
    
?>
