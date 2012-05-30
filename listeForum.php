<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
    <div class="row">          
    <div class="span12">
    
        <ul class="nav nav-tabs">
        <li><a href="./listeForum.php">Listes</a></li>
        <li><a href="./addForum.php">Ajouter un forum</a></li>
        <li><a href="./editForum.php">Modifier un forum</a></li>
        </ul>
        <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr class="row">               
                <th><a href="#">Gestion des forums</a></th>
            </tr>
            <tr class="row">
                <th colspan="2"><center>ID </center></th>
                <th colspan="4">Nom du forum</th>
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