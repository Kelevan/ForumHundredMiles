<?php
    include_once("./db.php");
      if(isset ($_POST["pass"]) and isset($_POST["pass2"]) and ($_POST["pass"]==$_POST["pass2"]))
      {
        query("UPDATE utilisateur SET pseudo='".$_POST['pseudo']."', mail='".$_POST['mail']."', idTypeUtil='".$_POST['typeUtil']."', password='".$_POST['pass2']."' WHERE idUtil='".$_POST['idUtile']."'");
        header("location: ./listeMembre.php");
      }else
      {
          echo"
            <div class='modal-body'>
                <div class='tab-pane active' id='connexion'>
                    <form class='well form-horizontal' method='post' action='./connect.php?action=login'>
                        <div class='control-group'>
                            <label class='control-label' for='input01'><b>E-mail</b></label>
                            <div class='controls'>
                                <input type='text' class='input-large' id='mail' name='mail'>  
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label' for='input01'><b>mot de passe</b></label>
                            <div class='controls'>
                                <input type='password' class='input-large' id='pass' name='pass'>  
                            </div>
                        </div>
                    </div>             
                    <div class='modal-footer'>
                        <button type='submit' class='btn btn-primary'>Se connecter</button>
                        <button data-dismiss='modal' class='btn btn-warning'>Annuler</button>
                    </div>
                </form>
                </div>
            </div>"; 
      }
?>
