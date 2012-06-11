<?php
    include_once("./db.php");
    
    if (isset($_GET['id']))  
    {
        query("DELETE FROM forum WHERE idForum=" .$_GET['id']."");
        header("location: ./listeForum.php");
    }
    else
    {
        echo"marche pas";
    }
    
?>