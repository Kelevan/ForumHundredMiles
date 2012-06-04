<?php
    include_once("./includes.php");
    entete("Forum");
?> 
 <div class="container">     
    <ul class="breadcrumb">
        <li>
            <a href="./index.php">Home</a> <span class="divider">/</span>
            <a href="./categorie.php">Musique</a> <span class="divider">/</span>
            <a href="./Forum.php">Lyrics</a></span>
        </li>
    </ul>
     
<!------------------ SOUS-FORUMS ------------------>
     <form class="well">
         <legend><a href="#">> Sous-Forum</a></legend>
         <table class="table table-bordered table-condensed">            
            <thead>               
                <tr>
                    <th></th>
                    <th><center>Forums </center></th>
                    <th>Sujets</th>
                    <th>Messages</th>
                    <th>Dernier Messages</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>logo_new</td>
                    <td><a href="./topic.php">Lyrics <br/></a>Lyrics terminée et opérationnelles.</td>
                    <td>11</td>
                    <td>24</td>
                    <td>Mer mar 14, 2012 3:05pm<br/>Tom</td>
                </tr>
                <tr>              
                    <td>logo_new</td>
                    <td><a href="#">Traduction<br/></a>Traduction des lyrics existantes.</td>
                    <td>7</td>
                    <td>9</td>
                    <td>Jeu dec 09, 2010 2:20am<br/>Valou</td>
                </tr>
                <tr >
                    <td>logo_new</td>
                    <td><a href="#">Idées<br/></a>Idées de lyrics qui trainent.</td>
                    <td>4</td>
                    <td>24</td>
                    <td>Jeu dec 09, 2010 8:50pm<br/>Ben</td>
                </tr>
            </tbody>
        </table>
     </form>
     
<!------------------ TOPICS ------------------>
    <!--- <div class="row">     
        <div class="span3">
            <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Dernier fichier upload</li>
                <li><a href="./audio/SleepAway.mp3">2 see</a></li>
            </ul>
            </div>
        </div> 
        
        <div class="span9">-->
        <form class="well">   
            <table class="table table-bordered table-condensed">
            <legend><a href="#">> Lyrics</a></legend>
            <thead>
                <tr>
                    <th></th>
                    <th><center>Sujets </center></th>
                    <th>Auteur</th>
                    <th>Réponses</th>
                    <th>Vus</th>
                    <th>Dernier message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>logo_new</td>
                    <td>Ré-Écriture des lyrics <br/> [  Aller à la page <a>1</a>,<a>2</a>]</td>
                    <td>Valou</td>
                    <td>18</td>
                    <td>72</td>
                    <td>Mer nov 23,2011 9:38pm <br/> Dav</td>
                </tr>
            </tbody>
            </table>
        </form>
        </div>        
    <!-- </div> -->
     
<?php
    pied();
?>                 
