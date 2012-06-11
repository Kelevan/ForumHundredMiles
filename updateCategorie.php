<?php
    include_once("./db.php");
    
      
        query("UPDATE categorie SET nomCat='".$_POST['catNom']."', descCat='".$_POST['catTextarea']."' WHERE idCat=".$_POST['idCate']."");
        //header("location: ./listeCategorie.php");
    
    
?>
