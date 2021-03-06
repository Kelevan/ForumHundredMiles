<?php
    include_once("./includes.php");
    entete("Panel Membre");
    verif_connexion();
?> 
    <div class="container">
        <div class="row">          
            <div class="span12">
                <ul class="nav nav-tabs">
                    <li><a href="./listeMembre.php">Listes</a></li>
                    <li><a href="./addMembre.php">Ajouter un membre</a></li>
                </ul>
                <form class="well form-horizontal" method="post" action="./editMembre.php">
                    <table class="table table-bordered table-condensed">    
                        <thead class="row">
                            <tr>
                                <th class="span1"><center>ID </center></th>
                                <th class="span3">Pseudo</th>
                                <th class="span4">E-mail</th>
                                <th class="span2">Rôle</th>
                                <th class="span2"><center>Actions</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $req_connexion=query("select * from utilisateur");
                                while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                                    echo "<tr>
                                        <td>".$row[0]."</td>
                                        <td>".$row[1]."</td>
                                        <td>".$row[3]."</td>";
                                    
                                        $result=query("select nomTypeUtil from type_utilisateur where idType_Util=".$row[5]);

                                        if(mysql_num_rows($result)==0)
                                        {
                                            $nomTypeUtil = "";
                                        }else {
                                            $typeUtil=mysql_fetch_array($result);
                                            $nomTypeUtil = $typeUtil[0];
                                        }
                                        echo"<td>".$nomTypeUtil."</td>
                                        
                                        <td><center>
                                            <a class='btn' href='./editMembre.php?id=".$row[0]."'>
                                                    <i class='icon-pencil'></i>
                                                </a>
                                            <div id='SuppressionMembre".$row[0]."' class='modal hide fade'>
                                                <div class='modal-header'>
                                                    <button class='close' data-dismiss='modal'>&times;</button>
                                                    <h3>Suppression d'un utilisateur</h3>
                                                </div>
                                                <div class='modal-body'>
                                                    <h5>Etes-vous sur de vouloir supprimer l'utilisateur ".$row[1]." ?</h5>    
                                                </div>
                                                <div class='modal-footer'>
                                                    <a href='./deleteMembre.php?id=".$row[0]."' class='btn btn-primary'>Oui</a>
                                                    <a href='#' class='btn btn-warning' data-dismiss='modal'>Non</a>
                                                </div>
                                            </div>
                                            <a data-toggle='modal' href='#SuppressionMembre".$row[0]."' class='btn btn-danger'>
                                                <i class='icon-remove'></i>
                                            </a></center>
                                        </td>
                                        </tr>";

                                }
                            ?>
                            </tbody>
                        </table>
                 </form>
                </div>
            </div>
<?php
    pied();
?>        
