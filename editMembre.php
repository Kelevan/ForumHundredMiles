<?php
    include_once("./includes.php");
    entete("Modifier un membre");
    verif_connexion();

    if(isset($_GET['id'])){                                
        $util_connexion=query("select * from utilisateur where idUtil=".$_GET['id']."");
        $row=mysql_fetch_array($util_connexion);
    }
?> 
    <div class="container">
        <ul class="nav nav-tabs">
            <li><a href="./listeMembre.php">Listes</a></li>
            <li><a href="./addMembre.php">Ajouter un membre</a></li>
        </ul> 
      <div class="row">          
        <div class="span12">
            <h3>Modifier un membre</h3><br/>
                <div class="tab-pane active" id="tab1">
                    <form class="well form-horizontal" method="post" action="./updateMembre.php">
                        <fieldset>
                            <?php
                                echo"<input type='hidden' id='idUtile' name='idUtile' value='".$_GET['id']."'>";
                            ?> 
                            <div class="control-group">
                                <label class="control-label" for="input01"><b>Pseudo</b></label>
                                <div class="controls">
                                    <?php 
                                        echo"<input type='text' class='input-medium' id='pseudo' name='pseudo' value='".$row[1]."'>"; 
                                    ?> 
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input02"><b>E-mail</b></label>
                                <div class="controls">
                                    <?php
                                        echo"<input type='email' class='input-medium' id='mail' name='mail' value='".$row[3]."'>";
                                    ?>
                                </div>
                            </div> 
                            <div class="control-group">
                                <label class="control-label" for="select01"><b>Changer son rôle</b></label>
                                <div class="controls">
                                    <select id="typeUtil" name="typeUtil">
                                    <?php
                                        $typeutil_connexion=query("select * from type_utilisateur");
                                        while ($row = mysql_fetch_array($typeutil_connexion, MYSQL_NUM)) {
                                        echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                        }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><b>Mot&nbsp;de&nbsp;passe&nbsp;:*</b></label>   
                                <div class="controls">
                                    <input type='password' class='input-xlarge' id='pass' name='pass'>
                                </div>
                            </div>
                            <div class="control-group">                                                       
                                <label class="control-label"><b>Confirmation:*</b></label>
                                <div class="controls">
                                    <input type='password' class='input-xlarge' id='pass2' name='pass2'>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <button type="reset" class="btn btn-warning" href='./listeMembre.php'>Annuler</button>
                            </div>
                        </fieldset>
                    </form>
                </div>	
            </div>
<?php
    pied();
?>           