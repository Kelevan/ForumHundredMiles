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
        <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr class="row">               
                <th><a href="#">Gestion des utilisateurs</a></th>
            </tr>
            <tr class="row">
                <th colspan="2"><center>ID </center></th>
                <th colspan="4">Pseudo</th>
                <th colspan="4">E-mail</th>
                <th colspan="2">Modifications</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="2">1</td>
                <td colspan="4">KirbyFR</td>
                <td colspan="4">Kirby@live.fr</td>
                <td colspan="2">boutons</td>
            </tr>
            <tr class="row">
                <td colspan="2">2</td>
                <td colspan="4">Kelevan</td>
                <td colspan="4">Kelevan@live.fr</td>
                <td colspan="2">boutons</td>
            </tr>
        </tbody>
    </table>
    </div>
        <h3>Panel Administration</h3><br/><br/>
        <h5>Gestion des membres</h5><br/>
            <ul>
                <a class="btn btn-success" href="./addMembre.php">Ajouter un membre</a>
                <a class="btn btn-success" href="./editMembre.php">Modifier un membre</a>
                <a class="btn btn-success" href="./supprMembre.php">Supprimer un membre</a><br/>
            </ul>
            <h5>Gestion des catégories</h5><br/>
            <ul>
                <a class="btn btn-primary" href="./addCategorie.php">Ajouter une catégorie</a>
                <a class="btn btn-primary" href="./editCategorie.php">Modifier une catégorie</a>
                <a class="btn btn-primary" href="./supprCategorie.php">Supprimer une catégorie</a><br/>
            </ul>
            <h5>Gestion des forums</h5><br/>
            <ul>
                <a class="btn btn-primary" href="./addForum.php">Ajouter un forum</a>
                <a class="btn btn-primary" href="./editMembre.php">Modifier un forum</a>
                <a class="btn btn-primary" href="./supprForum.php">Supprimer un forum</a><br/>
            </ul>
            <h5>Gestion des Droits</h5><br/>
            <ul>
                <a class="btn btn-danger" href="./addDroit.php">Ajouter un droit</a>
                <a class="btn btn-danger" href="./supprDroit.php">Supprimer un droit</a><br/>
            </ul>
    
    </div>
    </div>
<?php
    pied();
?>        
