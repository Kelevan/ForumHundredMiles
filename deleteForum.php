<?php
    include_once("./db.php");
    
    echo "Vous avez supprime le forum numero ".$_GET['id']."";
    if (isset($_GET['id']))  
    {
        query("DELETE FROM forum WHERE idForum=" .$_GET['id']."");
        die('<meta http-equiv="refresh" content="2;URL=./listeForum.php">');
    }
    else
    {
        echo"marche pas";
    }
    
?>