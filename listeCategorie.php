<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
    <div class="row">          
    <div class="span12">
    
        <ul class="nav nav-tabs">
        <li><a href="./listeCategorie.php">Listes</a></li>
        <li><a href="./addCategorie.php">Ajouter une catégorie</a></li>
        <li><a href="./editCategorie.php">Modifier une categorie</a></li>
        </ul>
        <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr class="row">               
                <th><b>Liste des catégories</b></th>
            </tr>
            <tr class="row">
                <th><center>ID </center></th>
                <th>Nom de la catégorie</th>
                <th>Modifications</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td>1</td>
                <td>Organisation</td>
                <td>
                    <a class="btn" href="./editCategorie.php">
                        <i class="icon-pencil"></i>
                    </a>
                    <div id="myModal" class="modal hide fade">
                        <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h3>Suppression d'une catégorie</h3>
                        </div>
                        <div class="modal-body">
                        <h5>Etes-vous sur de vouloir supprimer la catégorie organisation ?</h5>    
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
        </tbody>
    </table>
    </div>
    </div>
    </div>
<?php
    pied();
?>    