<?php
    include_once("./db.php");
      
        $req_connexion=query("SELECT * FROM categorie WHERE nomCat='".$_POST['nomCat']."'; ");
        if(mysql_num_rows($req_connexion)==0)
        {
            query("insert into categorie(nomCat,descCat)values('".$_POST['nomCat']."','".($_POST['descCat'])."')");
            header("location: ./listeCategorie.php");
        }
        else
        {
            
        }
?>
