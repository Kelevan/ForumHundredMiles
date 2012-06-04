<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
        <div class="row">          
            <div class="span12">

                <ul class="nav nav-tabs">
                    <li><a href="./listeMembre.php">Listes</a></li>
                    <li><a href="./addMembre.php">Ajouter un membre</a></li>
                    <li><a href="./editMembre.php">Modifier un membre</a></li>
                </ul>

                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr class="row">               
                            <th><b>Liste des utilisateurs</b></th>
                        </tr>
                        <tr class="row">
                            <th><center>ID </center></th>
                            <th>Pseudo</th>
                            <th>E-mail</th>
                            <th>Modifications</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row">
                            <td>1</td>
                            <td>KirbyFR</td>
                            <td>Kirby@live.fr</td>
                            <td>
                            <a class="btn" href="./editMembre.php">
                                    <i class="icon-pencil"></i>
                                </a>
                                <div id="myModal" class="modal hide fade">
                                    <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>
                                    <h3>Suppression d'un utilisateur</h3>
                                    </div>
                                    <div class="modal-body">
                                    <h5>Etes-vous sur de vouloir supprimer l'utilisateur KirbyFr ?</h5>    
                                    </div>
                                    <div class="modal-footer">
                                    <a href="#" class="btn btn-primary">Oui</a>
                                    <a href="#" class="btn btn-warning" data-dismiss="modal">Non</a>
                                    </div>
                                </div>    
                                <a data-toggle="modal" href="#myModal" class="btn btn-danger">
                                    <i class="icon-remove"></i>
                                </a>  
                            </td>
                        </tr>
                        <tr class="row">
                            <td>2</td>
                            <td>Kelevan</td>
                            <td>Kelevan@live.fr</td>
                            <td>
                                <a class="btn" href="./editMembre.php">
                                    <i class="icon-pencil"></i>
                                </a>
                                <div id="myModal" class="modal hide fade">
                                    <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>
                                    <h3>Suppression d'un utilisateur</h3>
                                    </div>
                                    <div class="modal-body">
                                    <h5>Etes-vous sur de vouloir supprimer l'utilisateur Kelevan ?</h5>    
                                    </div>
                                    <div class="modal-footer">
                                    <a href="#" class="btn btn-primary">Oui</a>
                                    <a href="#" class="btn btn-warning" data-dismiss="modal">Non</a>
                                    </div>
                                </div>    
                                <a data-toggle="modal" href="#myModal" class="btn btn-danger">
                                    <i class="icon-remove"></i>
                                </a>  
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
<?php
    pied();
?>        
