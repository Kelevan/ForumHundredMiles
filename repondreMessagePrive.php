<?php
    include_once("./db.php");
      
        if(!empty($_POST['repondre']))
        {
            query("INSERT INTO messageprive(titreMsgPrive,contenuMsgPrive,destinataireId,auteurId) VALUES('".$_POST['titre']."','".$_POST['repondre']."','".$_POST['idauteur']."','".$_POST['session']."')");
            header("location: ./messagerie.php");
        }
        else
        {
            echo"Vous n'avez pas rempli le champ de réponse";
            $url="./messagerie.php";
            die('<meta http-equiv="refresh" content="1;URL='.$url.'">');
        }
?>
