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
                <!---- MESSAGERI ----->
                <div class="tab-pane active" id="tab1">
                    <form class="well form-horizontal">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><h4>Sujets</h4></th>
                                    <th><h4>Auteur</h4></th>
                                    <th><h4>Sélection</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label class="large label label-info"><center>NEW</center></label></td>
                                    <td><a href="./messageprive.php">NewParôle</a></td>
                                    <td><a href="#">Val</a></td>
                                    <td><label class="checkbox"><input type="checkbox"></label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="#">Song</a></td>
                                    <td><a href="#">Titi</a></td>
                                    <td><label class="checkbox"><input type="checkbox"></label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="#">Parôle Of the dead</a></td>
                                    <td><a href="#">Val</a></td>
                                    <td><label class="checkbox"><input type="checkbox"></label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="#">Guitard</a></td>
                                    <td><a href="#">Toto</a></td>
                                    <td><label class="checkbox"><input type="checkbox"></label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="#">Intro</a></td>
                                    <td><a href="#">Val</a></td>
                                    <td><label class="checkbox"><input type="checkbox"></label></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-actions"> 
                            <div class="pull-right">
                            <button type="submit" class="btn btn-success">Supprimer</button>
                            </div>
                        </div>
                    </form>                    
                </div>

                <!---- ENVOI MP ----->
                <div class="tab-pane" id="tab2">
                    <form method="post"class="well form-horizontal"><div class="control-group">
                        <label class="control-label" for="inputdestinateur"><b>Destinataire</b></label>
                        <div class="controls">
                            <input type="text" class="input-medium" id="input01">
                        </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01"><b>Sujet&nbsp;du&nbsp;MP</b></label>
                            <div class="controls">
                                <input type="text" class="input-medium" id="input01">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">                
                                <textarea name="content" style="width:50%" id="input02"></textarea> 
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="Upluader un Fichier"><b>Uploader&nbsp;un&nbsp;Fichier</b></label>
                            <div class="controls">
                                <input class="input-file" id="fileInput" type="file">
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
