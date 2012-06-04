<?php
    include_once("./includes.php");
    entete("Nouveau Topic");
?> 

<div class="container">     
    <form method="post" action="somepage" class="well form-horizontal">
        <div class="control-group">
            <label class="control-label" for="input01"><b>Titre du topic</b></label>
            <div class="controls">
                <input type="text" class="input-medium" id="input01">  
            </div>
            <div class="controls">
                <label class="control-label" for="input02">
                <textarea name="content" style="width:50%" id="input02"></textarea>  
                </label>
            </div>
        </div>

    </form>        
        <div class="form-actions">
            <button type="submit" class="btn btn-success">Envoyer</button>
            <button type="reset" class="btn btn-warning">Annuler</button>                   
        </div>


<?php
    pied();;
?>   