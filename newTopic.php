<?php
    include_once("./includes.php");
    entete("Nouveau Topic");
?> 

<div class="container">     
    <form method="post" action="somepage" class="well">
        <div class="control-group">
            <label class="control-label" for="input01"><b>Titre du topic</b></label>
            <div class="controls">
                <input type="text" class="input-medium" id="input01">  
            </div>
        </div>
        <textarea name="content" style="width:50%"></textarea>            
        <div class="control-group">
            <label class="control-label" for="Upluader un Fichier">Uploader&nbsp;un&nbsp;Fichier</label>
            <div class="controls">
                <input class="input-file" id="fileInput" type="file">
            </div> 
        </div>  
        <div class="form-actions">
            <div class="row">
                <div class="span1"> <button type="submit" class="btn btn-success">Envoyer</button></div>
                <div class="span1"> <button type="reset" class="btn btn-warning">Annuler</button></div>                    
            </div>
        </div>
    </form>
      



<?php
    pied();
?>   