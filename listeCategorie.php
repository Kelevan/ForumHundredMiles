<?php
    include_once("./includes.php");
    entete("Panel Catégorie");
    verif_connexion();
?> 
<div class="container">
    <div class="row">          
        <div class="span12">    
            <ul class="nav nav-tabs">
                <li><a href="./listeCategorie.php">Listes</a></li>
                <li><a href="./addCategorie.php">Ajouter une catégorie</a></li>
            </ul>
            <div class="well">
                <table class="table table-bordered table-condensed">
                    <thead class="row">
                        <tr>
                            <th class="1"><center>ID </center></th>
                            <th class="span3">Nom</th>
                            <th class="span6">Description</th>
                            <th class="span2"><center>Actions</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $req_connexion=query("select * from categorie");
                        while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                            echo "<tr><td>".$row[0]."</td>
                                    <td>".$row[1]."</td>
                                    <td>".$row[2]."</td>
                                    <td><center>
                                        <a class='btn' href='./editCategorie.php?id=".$row[0]."'>
                                            <i class='icon-pencil'></i>
                                        </a>
                                        <div id='SuppressionCategorie".$row[0]."' class='modal hide fade'>
                                        <div class='modal-header'>
                                            <button class='close' data-dismiss='modal'>&times;</button>
                                            <h3>Suppression d une catégorie</h3>
                                        </div>
                                        <div class='modal-body'>
                                            <h5>Etes-vous sur de vouloir supprimer la catégorie ".$row[1]." ?</h5>    
                                        </div>
                                        <div class='modal-footer'>
                                            <a href='deleteCategorie.php?id=".$row[0]."' class='btn btn-primary'>Oui</a>
                                            <a href='#' class='btn btn-warning' data-dismiss='modal'>Non</a>
                                        </div>
                                        </div>    
                                        <a data-toggle='modal' href='#SuppressionCategorie".$row[0]."' class='btn btn-danger'>
                                            <i class='icon-remove'></i>
                                        </a> 
                                    </center></td>
                                </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
    pied();
?>    