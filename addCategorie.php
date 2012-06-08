<?php
    include_once("./includes.php");
    entete("Ajouter une Catégorie");
    verif_connexion();
?> 
<div class="container">
<div class="row">          
<div class="span12">
    <ul class="nav nav-tabs">
        <li><a href="./listeCategorie.php">Listes</a></li>
        <li><a href="./addCategorie.php">Ajouter une catégorie</a></li>
    </ul>
    <h3>Ajouter une catégorie</h3><br/>
    <div id="form_container">
    <div class="tab-pane active" id="tab1">
        <form class="well form-horizontal" method="post" action="./transfert_addCategorie.php">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="input01"><b>Nom de la catégorie</b></label>
                    <div class="controls">
                        <input type="text" class="input-medium" id="nomCat" name="nomCat">  
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input02"><b>Description</b></label>
                    <div class="controls">
                    <textarea class="input-xlarge" id="descCat" rows="3" name="descCat"></textarea>
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