<?php
    include_once("./db.php");
      
        if(!isset($_POST['titre'])==0)
        {
            query("INSERT INTO messageprive(titreMsgPrive,contenuMsgPrive,destinataireId,auteurId) VALUES('".$_POST['titre']."','".$_POST['repondre']."','".$_POST['idauteur']."','".$_POST['session']."')");
            header("location: ./messagerie.php");
        }
        else
        {
            echo"NO ok";echo"".$_POST['titre']."";echo"".$_POST['repondre']."";echo"".$_POST['idauteur']."";echo"".$_POST['session']."";
        }
?>
