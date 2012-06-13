<?php
    include_once("./includes.php");
    entete("Messagerie");
    verif_connexion();
?> 
   
    <div class="container">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Messagerie</a></li>
                <li><a href="#tab2" data-toggle="tab">Envoyer&nbsp;un&nbsp;MP</a></li>
            </ul>

            <div class="tab-content">
                <!---- MESSAGERIE ----->
                <div class="tab-pane active" id="tab1">
                    <form class="well form-horizontal" method="post" action="./messageprive.php">                        
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr class="row">
                                    <th></th>
                                    <th><h4>Sujets</h4></th>
                                    <th><h4>Auteur</h4></th>
                                    <th><h4>Sélection</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $req_connexion=query("SELECT * FROM messageprive,utilisateur WHERE messageprive.auteurId=utilisateur.idUtil AND destinataireId='".$_SESSION['idUtil']."'");
                                while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                    echo "<tr class='row'>
                                            <td></td>
                                            <td><a href=./messageprive.php?id=".$row[0].">".$row[1]."</a></td>";
                                                
                                $req2_connexion=query("SELECT pseudo FROM messageprive,utilisateur WHERE messageprive.auteurId=utilisateur.idUtil AND auteurId=".$row[4]."");
                                $auteur_result=mysql_fetch_array($req2_connexion);
                                $auteur=$auteur_result[0];

                                    echo "
                                            <td>".$auteur."</td>
                                            <td></td>
                                         </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </form>                    
                </div>
                <!---- ENVOI MP ----->
                <div class="tab-pane" id="tab2">
                    <form method="post"class="well form-horizontal" method="post" action="./sendMessagePrive.php"><div class="control-group">
                        <label class="control-label" for="inputdestinateur"><b>Destinataire</b></label>
                        <div class="controls">
                            <?php
                                $util_connexion=query("SELECT pseudo FROM utilisateur");
                                $listePseudo=mysql_fetch_array($util_connexion, MYSQL_NUM); 
                                $liste = '"';
                                while ($user = mysql_fetch_array($listePseudo)) {
                                    $liste = $liste.$user[0].'","';
                                }
                            ?>
                             <input type="text" class="input-medium" data-provide="typeahead" id="destinataire" name="destinataire" data-items="4" data-source='[<?php echo $liste[0] ?>]'>
                            
                        </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01"><b>Sujet</b></label>
                            <div class="controls">
                                <input type="text" class="input-medium" id="input01">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textcorps"><b>Corps</b></label>
                            <div class="controls">                
                                <textarea name="corps" style="width:50%" id="input02"></textarea> 
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Envoyer</button>
                            <button type="reset" class="btn btn-warning">Annuler</button>                   
                        </div>
                    </form> 
                </div>
            </div>
        </div>   
<?php
    pied();
?>              
