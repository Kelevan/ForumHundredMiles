<?php
    include_once("./includes.php");
    entete("Administration");
?> 
<html lang="en">
  <body>
    <div class="container">
    <div class="row">          
    <div class="span12">
    <div class="hero-unit">
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
    </div>
<?php
    pied();
?>        
    </div>
  </body>
</html>           
