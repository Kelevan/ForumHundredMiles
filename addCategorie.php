<?php
    include_once("./includes.php");
    entete("Administration");
?> 
<div class="container">
<div class="row">          
<div class="span12">
    <ul class="nav nav-tabs">
        <li><a href="./listeCategorie.php">Listes</a></li>
        <li><a href="./addCategorie.php">Ajouter une catégorie</a></li>
        <li><a href="./editCategorie.php">Modifier une categorie</a></li>
    </ul>
    <h3>Ajouter une catégorie</h3><br/>
    <div id="form_container">
    <div class="tab-pane active" id="tab1">
        <form class="well form-horizontal">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="input01"><b>Nom de la catégorie</b></label>
                    <div class="controls">
                        <input type="text" class="input-medium" id="input01" value="Musiques">  
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input02"><b>Description</b></label>
                    <div class="controls">
                    <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
                    </div>
                </div> 
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="reset" class="btn btn-warning">Annuler</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</div>
</div> 
<?php
    pied();
?>