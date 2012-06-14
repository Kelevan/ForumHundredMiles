<?php
    include_once("./db.php");
    
        $req_connexion=query("select * from utilisateur where pseudo='".$_POST['destinataire']."'; ");
        if(mysql_num_rows($req_connexion)==0)
        {
            echo'Destinataire inconnu';
            $url="./messagerie.php";
            die('<meta http-equiv="refresh" content="1;URL='.$url.'">');
        }else
        {
            if(!empty($_POST['titre']) && !empty($_POST['envoie']))
            {

                $idDest_connexion=query("SELECT idUtil FROM utilisateur WHERE pseudo='".$_POST['destinataire']."'");
                $idDest=mysql_fetch_array($idDest_connexion);
                $idDest_result=$idDest[0];
                query("INSERT INTO messageprive(titreMsgPrive,contenuMsgPrive,destinataireId,auteurId) VALUES('".$_POST['titre']."','".$_POST['envoie']."','".$idDest_result."','".$_POST['session']."')");
                header("location: ./messagerie.php");
            }
            else
            {
                echo"Vous n'avez pas rempli tous les champs";
                $url="./messagerie.php";
                die('<meta http-equiv="refresh" content="1;URL='.$url.'">');
            }
        }
?>