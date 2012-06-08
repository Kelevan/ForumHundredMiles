<?php
    include_once("./includes.php");
    entete("Modifier un forum");
    verif_connexion();
    
    if(isset($_GET['id'])){                                
        $forum_connexion=query("select * from forum where idForum=".$_GET['id']."");
        $row=mysql_fetch_array($forum_connexion);
    }
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
                        <label class="control-label" for="input01"><b>Nom du forum</b></label>
                        <div class="controls">
                            <?php
                                echo"<input type='text' class='input-medium' id='nomCat' name='nomCat' value='".$row[1]."'>";
                            ?>  
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>Nom catégorie</b></label>
                        <div class="controls">
                            <select id="select01">
                                <?php
                                    $cat_connexion=query("select * from categorie");
                                    while ($cat = mysql_fetch_array($cat_connexion, MYSQL_NUM)) {
                                    echo "<option value='".$cat[0]."'>".$cat[1]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>Nom du forum père</b></label>
                        <div class="controls">
                            <select id="select01">
                                <?php
                                    while ($row = mysql_fetch_array($forum_connexion, MYSQL_NUM)) {
                                            echo "<option value=".$row[0].">".$row[1]."</option>";
                                            };
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Modifier</button>
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