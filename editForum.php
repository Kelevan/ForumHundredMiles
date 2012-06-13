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
    </ul>    
    <div class="row">          
    <div class="span12">
    <h3>Ajouter un forum</h3><br/>
            <form class="well form-horizontal" method="post" action="./updateForum.php">
                <fieldset>
                    <?php
                        echo"<input type='hidden' id='idForum' name='idForum' value='".$_GET['id']."'>";
                    ?> 
                    <div class="control-group">
                        <label class="control-label" for="input01"><b>Nom du forum</b></label>
                        <div class="controls">
                            <?php
                                echo"<input type='text' class='input-medium' id='nomForum' name='nomForum' value='".$row[1]."'>";
                            ?>  
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>Nom catégorie</b></label>
                        <div class="controls">
                            <select id="nomCat" name="nomCat">
                                    <?php
                                        $req_connexion=query("select * from categorie");
                                        while ($cat = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                        echo "<option value='".$cat[0]."'>".$cat[1]."</option>";

                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="select01"><b>Nom du forum père</b></label>
                        <div class="controls">
                            <select id="forumPere" name="forumPere">
                                    <?php
                                        $req_connexion=query("select * from forum");
                                        echo"<option value='".$row[3]."'>0</option>";
                                        while ($forum = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                        echo "<option value='".$forum[0]."'>".$forum[1]."</option>";

                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <button type="reset" class="btn btn-warning" href='./listeForum.php'>Annuler</button>
                    </div>
                </fieldset>
            </form>
    </div>
    </div>  
<?php
    pied();
?>