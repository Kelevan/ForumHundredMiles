<?php
    include_once("./includes.php");
    entete("Panel Forum");
?> 
    <div class="container">   
        <ul class="nav nav-tabs">
            <li><a href="./listeForum.php">Listes</a></li>
            <li><a href="./addForum.php">Ajouter un forum</a></li>
            <li><a href="./editForum.php">Modifier un forum</a></li>
        </ul>
        <div class="container">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr class="row">               
                    <th><b>Liste des forums</b></th>
                </tr>
                <tr class="row">
                    <th><center>ID </center></th>
                    <th>Nom du forum</th>
                    <th>Modifications</th>
                </tr>
            </thead>
        <tbody>
            <tr class="row">
                <td>1</td>
                <td>Lyrics</td>
                <td>
                    <a class="btn" href="./editForum.php">
                        <i class="icon-pencil"></i>
                    </a>
                    <div id="SuppresionForum" class="modal hide fade">
                        <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h3>Suppression d'un forum</h3>
                        </div>
                        <div class="modal-body">
                        <h5>Etes-vous sur de vouloir supprimer le forum Lyrics ?</h5>    
                        </div>
                        <div class="modal-footer">
                        <a href="#" class="btn btn-primary">Oui</a>
                        <a href="#" class="btn btn-warning" data-dismiss="modal">Non</a>
                        </div>
                    </div>    
                    <a data-toggle="modal" href="#SuppresionForum" class="btn btn-danger">
                        <i class="icon-remove"></i>
                    </a>                   
                </td>
            </tr>
        </tbody>
     </table>
    </div>
    
<?php
    pied();
?>    