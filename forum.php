<?php
    include_once("./includes.php");
    entete("Forum");
    verif_connexion();
?> 
 <div class="container">     
    <ul class="breadcrumb">
        <li>
            <a href="./index.php">Home</a> <span class="divider">/</span>
            <?php
                $req_connexion=query("select idCat, nomCat from categorie c,forum f where c.idCat = f.id_Cat and f.idForum='".$_GET['id']."'");
                while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                {
                    echo "<a href=./categorie.php?id=".$row[0].">".$row[1]."</a><span class='divider'> /</span>";             


                    $req_connexion1=query("select * from forum where idforum='".$_GET['id']."'");
                    while ($row = mysql_fetch_array($req_connexion1, MYSQL_NUM)) 
                    {
                    echo "<a href=./forum.php?id=".$row[0].">".$row[1]."</a>";             
                    }
                } 
            ?>
        </li>
    </ul>
     
<!------------------ SOUS-FORUMS ------------------>
     <div class="well">
         <legend>Sous-Forum</legend>
         <table class="table table-bordered table-condensed">            
            <thead>               
                <tr class="row">
                    <th><center>Forums </center></th>
                    <th>Sujets</th>
                    <th>Messages</th>
                    <th>Dernier Messages</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $req_connexion=query("select * from forum where idForumPere='".$_GET['id']."'");
                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                    {
                        echo " <tr class='row'> 
                        <td><a href='./topic.php?id=".$row[0]."'>".$row[1]."</a></td>
                        <td></td>                                
                        <td></td>
                        <td></td>  
                        </tr>
                        ";
                        }
                ?>
            </tbody>
        </table>
     </div>     
     
<!------------------ TOPICS ------------------>
    <div class="well"> 
        <legend>Topics</legend>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr class="row">
                    <th><center>Sujets</center></th>
                    <th>Auteur</th>
                    <th>Réponse</th>
                    <th>Vues</th>
                    <th>Dernier Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $req_connexion=query("select * from topic where id_Forum='".$_GET['id']."'");
                    while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                    {
                        echo " <tr class='row'> 
                        <td><a href='./message.php?id=".$row[0]."'>".$row[1]."</a></td>";
                    $util_connexion=query("SELECT pseudo FROM utilisateur WHERE idUtil='".$row[4]."'");
                    $util_find=mysql_fetch_array($util_connexion);
                    $util=$util_find[0];
                    
                        echo "<td>".$util."</td>                                
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        ";
                        }
                ?>
            </tbody>
        </table>
    </div>      
        
<?php
    pied();
?>                 
