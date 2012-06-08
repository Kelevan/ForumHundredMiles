<?php
    include_once("./includes.php");
    entete("Panel Forum");
?> 
    <div class="container">   
        <ul class="nav nav-tabs">
            <li><a href="./listeForum.php">Listes</a></li>
            <li><a href="./addForum.php">Ajouter un forum</a></li>
            <li><a href="./editForum.php">Modifier un forum</a></li>
        </ul>
        <form class="well form-horizontal" method="post" action="./editeditForum.php">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr class="row">               
                        <th><b>Liste des forums</b></th>
                    </tr>
                    <tr class="row">
                        <th><center>ID </center></th>
                        <th>Nom du forum</th>
                        <th>Forum Père</th>
                        <th>Modifications</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                    $req_connexion=query("select * from forum");
                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
                        echo "<tr class='row'><td>".$row[0]."</td>
                            <td>".$row[1]."</td>";
                        $result=query("select nomForum from forum where idForum=".$row[3]);
                        
                        if(mysql_num_rows($result)==0)
                        {
                            $nomForumPère = "";
                        }else {
                            $forumpere=mysql_fetch_array($result);
                            $nomForumPère = $forumpere[0];
                        }
                        echo"<td>".$nomForumPère."</td>
                        <td><a class='btn' href='./editForum.php?id=".$row[0]."'><i class='icon-pencil'></i></a>
                        <div id='SuppressionForum".$row[0]."' class='modal hide fade'>
                            <div class='modal-header'>
                                <button class='close' data-dismiss='modal'>&times;</button>
                                <h3>Suppression d'un utilisateur</h3>
                            </div>
                            <div class='modal-body'>
                                <h5>Etes-vous sur de vouloir supprimer l'utilisateur KirbyFr ?</h5>    
                            </div>
                            <div class='modal-footer'>
                                <a href='#' class='btn btn-primary'>Oui</a>
                                <a href='#' class='btn btn-warning data-dismiss=modal'>Non</a>
                            </div>
                        </div>
                        <a data-toggle='modal' href='#SuppressionForum".$row[0]."' class='btn btn-danger'>
                            <i class='icon-remove'></i>
                        </a></td>
                        </tr>";

                    }
                ?>
            </tbody>
        </table>
    </form>
    
<?php
    pied();
?>    