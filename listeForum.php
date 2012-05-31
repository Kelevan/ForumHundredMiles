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
                <td>Organisation</td>
                <td>
                    <a class="btn" href="./editForum.php">
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