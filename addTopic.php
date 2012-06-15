<?php
    include_once("./includes.php");
    entete("Nouveau Topic");
    verif_connexion();
?> 

<div class="container">     
    <form class="well form-horizontal" method="post" action="./transfert_addTopic.php">
        <?php
               echo"<input type='hidden' id='session' name='session' value='".$_SESSION['idUtil']."'>";
               echo"<input type='hidden' id='idforum' name='idforum' value='".$_GET['id']."'>";
        ?>
        <div class="control-group">
            <label class="control-label" for="input01"><b>Titre du topic</b></label>
            <div class="controls">
                <input type="text" class="input-medium" id="titre" name="titre">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01"><b>Contenu</b></label>
            <div class="controls">                
                <textarea class='input-xlarge' id="contenu" name="contenu"></textarea> 
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success">Envoyer</button>
            <button type="reset" class="btn btn-warning">Annuler</button>                   
        </div>
    </form>        
    


<?php
    pied();
?>   