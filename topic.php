<?php
    include_once("./includes.php");
    entete("Lirycs");
    verif_connexion();
?> 
    <div class="container">
            <ul class="breadcrumb">
            <a href="./index.php">Home</a> <span class="divider">/</span>    
            <?php
                $req_connexion=query("select idCat, nomCat from categorie c,forum f where c.idCat = f.id_Cat and f.idForum='".$_GET['id']."'");
                while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                {
                    echo "<a href=./categorie.php?id=".$row[0].">".$row[1]."</a><span class='divider'> /</span>";             

                    $req_connexion1=query("select * from forum where idForum='".$_GET['id']."'");
                    while ($row = mysql_fetch_array($req_connexion1, MYSQL_NUM)) 
                    {
                        echo "<a href=./forum.php?id=".$row[0].">".$row[1]."</a><span class='divider'> /</span>";

                        $req_connexion2=query("select * from forum where idForumPere='".$_GET['id']."'");
                        while ($row = mysql_fetch_array($req_connexion2, MYSQL_NUM)) 
                        {
                            echo "<a href=./topic.php?id=".$row[0].">".$row[1]."</a>";
                        }
                    }
                } 
            ?>
            </ul>
         
                             <!-- TABLEAU -->
    
    <form class="well">
        <legend> Lyrics</Legend>
        <table class="table table-bordered">      
            <thead>                         
                <tr class="row">
                    <th><center>Topics </center></th>
                    <th><center>Réponses</center></th>
                    <th><center>Vues</center></th>
                    <th><center>Dernier Messages</center></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $req_connexion=query("select * from topic where idTopic='".$_GET['id']."'");
                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                    {
                        echo " <tr class='row'>
                        <td><a href='./Message.php?id=".$row[0]."'>".$row[1]."</a></td>    
                        <td></td>
                        <td></td>
                        <td></td>  
                        </tr>
                        ";
                        }
                ?>
            </tbody>
        </table>
    </form>
    
    <div class="pagination">
        <ul>            
            <li><a href="#">Prev</a></li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next</a></li>
        </ul>    
    </div>
    <div class="btn-group form-actions">
        <a href="./newTopic.php" class="btn btn-success">Nouveau</a>
    </div>
                                 
<?php
    pied();
?>        