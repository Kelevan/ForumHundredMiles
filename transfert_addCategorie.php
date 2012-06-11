<?php
    include_once("./db.php");

        if ($_POST["nomCat"]==""){
            header("location: ./addCategorie.php");
         
        }else
            {
                $req_connexion=query("select * from categorie where nomCat='".$_POST['nomCat']."'; ");
                if(mysql_num_rows($req_connexion)==0)
                {
                    query("insert into categorie(nomCat,descCat)values('".$_POST['nomCat']."','".($_POST['descCat'])."')");
                    header("location: ./listeCategorie.php");
                }
                else
                {

                }
        }
?>