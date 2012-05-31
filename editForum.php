<?php
    include_once("./includes.php");
    entete("Administration");
?> 
<div class="container">
    <ul class="nav nav-tabs">
        <li><a href="./listeForum.php">Listes</a></li>
        <li><a href="./addForum.php">Ajouter un forum</a></li>
        <li><a href="./editForum.php">Modifier un forum</a></li>
    </ul>    
    <div class="row">          
    <div class="span12">
    <h3>Ajouter un forum</h3><br/>
    <div id="form_container">
        <div class="tab-pane active" id="tab1">
            <form class="well form-horizontal">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>Numéro du forum</b></label>
                        <div class="controls">
                        <select id="select01">
                            <option>1</option>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01"><b>Nom du forum</b></label>
                        <div class="controls">
                            <input type="text" class="input-medium" id="input01" value="Tom">  
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>ID catégorie</b></label>
                        <div class="controls">
                        <select id="select01">
                            <option>1</option>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>ID forum père</b></label>
                        <div class="controls">
                        <select id="select01">
                            <option>0</option>
                            <option>1</option>
                        </select>
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