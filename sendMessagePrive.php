<?php
    include_once("./db.php");
      
        if(!isset($_POST['sujet'])==0)
        {
            
            $idDest_connexion=query("SELECT idUtil FROM utilisateur WHERE pseudo='".$_POST['destinataire']."'");
            $idDest=mysql_fetch_array($idDest_connexion);
            $idDest_result=$idDest[0];
            query("INSERT INTO messageprive(titreMsgPrive,contenuMsgPrive,destinataireId,auteurId) VALUES('".$_POST['titre']."','".$_POST['envoie']."','".$idDest_result."','".$_POST['session']."')");
            header("location: ./messagerie.php");
        }
        else
        {
            echo"NO ok </br>"; echo"".$_POST['titre']."</br>";echo"".$_POST['envoie']."</br>";echo"".$_POST['destinataire']."</br>";echo"".$_POST['session']."</br>";
        }
?>