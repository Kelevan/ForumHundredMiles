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
                    <a class="btn btn-danger" href="">
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
                    <a class="btn btn-danger" href="">
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
