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
         <legend><a href="#">> Sous-Forum</a></legend>
         <table class="table table-bordered table-condensed">            
            <thead>               
                <tr>
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
                        <td><a href='./forum.php?id=".$row[0]."'>".$row[1]."</a></td>
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
        <table class="table table-bordered table-condensed">
        <legend><a href="#">> Lyrics</a></legend>
            <thead>
                <tr>
                    <th><center>Sujets </center></th>
                    <th>Auteur</th>
                    <th>Réponses</th>
                    <th>Vus</th>
                    <th>Dernier message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ré-Écriture des lyrics<br/>[  Aller à la page <a>1</a>,<a>2</a>]</td>
                    <td>Valou</td>
                    <td>18</td>
                    <td>72</td>
                    <td>Mer nov 23,2011 9:38pm<br/>Dav</td>
                </tr>
            </tbody>
        </table>
    </div>      
        
<?php
    pied();
?>                 
