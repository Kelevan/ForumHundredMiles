<?php
    include_once("./db.php");
      if(($_POST['pass']=$_POST['pass2']))
      {
        query("UPDATE utilisateur SET pseudo='".$_POST['pseudo']."', mail='".$_POST['mail']."', idTypeUtil='".$_POST['typeUtil']."', password='".$_POST['pass2']."' WHERE idUtil='".$_POST['idUtile']."'");
        header("location: ./listeMembre.php");
      }else
      {
          echo"Les mots de passes ne sont pas identhiques";
          header("location: ./listeMembre.php");
      };
?>
