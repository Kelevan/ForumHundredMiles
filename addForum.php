<?php
    include_once("./includes.php");
    entete("Ajouter un forum");
    verif_connexion();
?> 
<div class="container">
    <ul class="nav nav-tabs">
        <li><a href="./listeForum.php">Listes</a></li>
        <li><a href="./addForum.php">Ajouter un forum</a></li>
    </ul>    
    <div class="row">          
    <div>
    <h3>Ajouter un forum</h3><br/>
    <div id="form_container">
        <div class="tab-pane active" id="tab1">
            <form class="well form-horizontal" method="post" action="./transfert_addForum.php">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="input01"><b>Nom du forum</b></label>
                        <div class="controls">
                            <input type="text" class="input-medium" id="nomForum" name="nomForum">  
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>ID catégorie</b></label>
                        <div class="controls">
                        <select id="nomCat" name="nomCat">
                                <?php
                                    $req_connexion=query("select * from categorie");
                                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                       echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                               
                                    }
                                ?>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>ID forum père</b></label>
                        <div class="controls">
                        <select id="Forum" name="Forum">
                                <?php
                                    $req_connexion=query("select * from forum");
                                    echo"<option value='".$row[3]."'>0</option>";
                                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                       echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                               
                                    }
                                ?>
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