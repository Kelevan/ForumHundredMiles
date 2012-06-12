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
                $req_connexion=query("select * from categorie where idCat='".$_GET['id']."'");
                while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                {
                echo "<a href=./categorie.php?id=".$row[0].">".$row[1]."</a><span class='divider'> /</span>";             
                }  
                
                $req_connexion1=query("select * from forum where idforum='".$_GET['id']."'");
                while ($row = mysql_fetch_array($req_connexion1, MYSQL_NUM)) 
                {
                echo "<a href=./forum.php?id=".$row[0].">".$row[1]."</a>";             
                } 
            ?>
           
        </li>
    </ul>
     
<!------------------ SOUS-FORUMS ------------------>
     <form class="well">
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
                <tr>
                   
                    <td><a href="./topic.php">Lyrics <br/></a>Lyrics terminée et opérationnelles.</td>
                    <td>11</td>
                    <td>24</td>
                    <td><a href="./message.php">You&nbsp;See</a><br/>Mer mar 14, 2012 3:05pm<br/>Tom</td>
                </tr>
                <tr>        
                    <td><a href="#">Traduction<br/></a>Traduction des lyrics existantes.</td>
                    <td>7</td>
                    <td>9</td>
                    <td>Jeu dec 09, 2010 2:20am<br/>Valou</td>
                </tr>
                <tr>
                    <td><a href="#">Idées<br/></a>Idées de lyrics qui trainent.</td>
                    <td>4</td>
                    <td>24</td>
                </tr>
            </tbody>
        </table>
     </form>
     
<!------------------ TOPICS ------------------>
    <form class="well">   
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
    </form>      
        
<?php
    pied();
?>                 
