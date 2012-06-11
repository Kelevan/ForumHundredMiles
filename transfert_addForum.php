<?php
    include_once("./db.php");

        if ($_POST["nomForum"]==""){
            header("location: ./addForum.php");
         
        }else
            {
                $req_connexion=query("select * from forum where nomForum='".$_POST['nomForum']."'; ");
                if(mysql_num_rows($req_connexion)==0)
                {
                    query("insert into forum(nomForum,id_Cat,idForumPere)values('".$_POST['nomForum']."','".($_POST['nomCat'])."','".($_POST['Forum']).")");
                    header("location: ./listeForum.php");
                }
                else
                {

                }
        }
?>