<?php
    include_once("./includes.php");
    entete("Modifier un membre");
?> 
    <div class="container">
        <ul class="nav nav-tabs">
            <li><a href="./listeMembre.php">Listes</a></li>
            <li><a href="./addMembre.php">Ajouter un membre</a></li>
            <li><a href="./editMembre.php">Modifier un membre</a></li>
        </ul> 
      <div class="row">          
        <div class="span12">
            <h3>Modifier un membre</h3><br/>
                <div class="tab-pane active" id="tab1">
                <form class="well form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="select01"><b>Numéro du membre</b></label>
                            <div class="controls">
                                <?php
                                    $req_connexion=query("select (idUtil) from utilisateur");
                                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                       echo "<input value='".$row[0]."'>".$row[0]."</input>";
                                               
                                    }
                                ?>
                            </div>
                        </div>                         
                        <div class="control-group">
                            <label class="control-label" for="input01"><b>Pseudo</b></label>
                            <div class="controls">
                                <input type="text" class="input-medium" id="pseudo" name="pseudo">  
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input02"><b>E-mail</b></label>
                            <div class="controls">
                                <input type="email" class="input-medium" id="mail" name="mail">  
                            </div>
                        </div> 
                        <div class="control-group">
                            <label class="control-label" for="select01"><b>Changer son droit</b></label>
                            <div class="controls">
                            <select id="select02">
                                <?php
                                    $req_connexion=query("select * from type_utilisateur");
                                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                       echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                               
                                    }
                                ?>
                            </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><b>Mot&nbsp;de&nbsp;passe&nbsp;:*</b></label>   
                            <div class="controls">
                                <input type="password" class="input-xlarge" id="pass" name="pass">
                            </div>
                        </div>
                        <div class="control-group">                                                       
                            <label class="control-label"><b>Confirmation:*</b></label>
                            <div class="controls">
                                <input type="password" class="input-xlarge" id="pass2" name="pass2">
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
<?php
    pied();
?>           