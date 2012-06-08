<?php
    include_once("./db.php");
    
    echo "Vous avez supprime le membre numero ".$_GET['id']."";
    if (isset($_GET['id']))  
    {
        query("DELETE FROM utilisateur WHERE idUtil=" .$_GET['id']."");
        die('<meta http-equiv="refresh" content="2;URL=./listeMembre.php">');
    }
    else
    {
        echo"marche pas";
    }
    
?>
