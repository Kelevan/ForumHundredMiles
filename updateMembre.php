<?php
    include_once("./db.php");
      if(isset ($_POST["pass"]) and isset($_POST["pass2"]) and ($_POST["pass"]==$_POST["pass2"]))
      {
        query("UPDATE utilisateur SET pseudo='".$_POST['pseudo']."', mail='".$_POST['mail']."', idTypeUtil='".$_POST['typeUtil']."', password='".$_POST['pass2']."' WHERE idUtil='".$_POST['idUtile']."'");
        header("location: ./listeMembre.php");
      }else
      {
        header("location: ./updateMember.php?id='".$_GET['id']."'");
      }
?>
