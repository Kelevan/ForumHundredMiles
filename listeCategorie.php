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
                <th><a href="#">Gestion des utilisateurs</a></th>
            </tr>
            <tr class="row">
                <th colspan="2"><center>ID </center></th>
                <th colspan="4">Nom de la catégorie</th>
                <th colspan="4">Modifications</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="2">1</td>
                <td colspan="4">Organisation</td>
                <td colspan="4">boutons</td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
<?php
    pied();
?>    