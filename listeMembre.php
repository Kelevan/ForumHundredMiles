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
                <td colspan="2">
                    <a class="btn" href="./editMembre.php">
                        <i class="icon-pencil"></i>
                    </a>
                    <a class="btn btn-danger" href="">
                        <i class="icon-remove"></i>
                    </a>
                </td>
            </tr>
            <tr class="row">
                <td colspan="2">2</td>
                <td colspan="4">Kelevan</td>
                <td colspan="4">Kelevan@live.fr</td>
                <td colspan="2">
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
