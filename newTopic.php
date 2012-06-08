<?php
    include_once("./includes.php");
    entete("Nouveau Topic");
    verif_connexion();
?> 

<div class="container">     
    <form method="post"class="well form-horizontal">
        <div class="control-group">
            <label class="control-label" for="input01"><b>Titre du topic</b></label>
            <div class="controls">
                <input type="text" class="input-medium" id="input01">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">                
            <textarea name="content" style="width:50%" id="input02"></textarea> 
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="Upluader un Fichier">Uploader&nbsp;un&nbsp;Fichier</label>
            <div class="controls">
                <input class="input-file" id="fileInput" type="file">
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success">Envoyer</button>
            <button class="btn btn-warning">Annuler</button>                   
        </div>
    </form>        
    


<?php
    pied();
?>   