<?php
    include_once("./db.php");
    
    if (isset($_GET['id']))  
    {
        query("DELETE FROM utilisateur WHERE idUtil=".$_GET['id']."");
        header("location: ./listeMembre.php");
    }
    else
    {
        echo"marche pas";
    }
    
?>
