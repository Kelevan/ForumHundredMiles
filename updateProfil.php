<?php
    include_once("./db.php");
        
        $mdp_connexion=query("SELECT password FROM utilisateur WHERE idUtil='".$_POST['session']."'");
        $mdp=  mysql_fetch_array($mdp_connexion);
    
        if ($_POST['mdpactuel']==$mdp[0])
        {
            if($_POST['mdp1']==$_POST['mdp2'])
            {
                query("UPDATE utilisateur SET mail='".$_POST['mail']."', password='".$_POST['mdp1']."'");
            }else
            {
                echo"Les mots de sont pas identiques";
            }
        }else {
            echo"Mauvais mot de passe actuel";
        }
?>
