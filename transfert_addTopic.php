<?php
    include_once("./db.php");

        if ($_POST["idTopic"]==""){
            header("location: ./addTopic.php");
         
        }else
            {
                $req_connexion=query("select * from topic where idTopic='".$_POST['idTopic']."'; ");
                if(mysql_num_rows($req_connexion)==0)
                {
                    query("insert into topic(nomTopic,dateTopic,id_Forum,id_Util)values('".$_POST['titre']."','".($_POST['descCat'])."')");
                    header("location: ./listeCategorie.php");
                }
                else
                {
                    
                }
        }
?>