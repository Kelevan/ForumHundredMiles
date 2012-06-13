<?php
    include_once("./db.php");
      
        $req_connexion=query("SELECT * FROM messageprive");
        if(mysql_num_rows($req_connexion)==0)
        {
            query("INSERT INTO messageprive(titreMsgPrive,contenuMsgPrive,destinataireId,auteurId)values('".$_POST['nomCat']."','".($_POST['descCat'])."')");
            header("location: ./messagerie.php?id=".$_SESSION['idUtil']."");
        }
        else
        {
            
        }
?>
