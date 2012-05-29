<?php
    include_once("./includes.php");
    entete("Administration");
?> 
<html lang="en">
    <body>
 <div class="container">
        <ul class="breadcrumb">
        <li>
        <a href="./index.php">Home</a> <span class="divider">/</span>
        <a href="./categorie.php">Musique</a> <span class="divider">/</span>
        <a href="./Forum.php">Lyrics</a></span>
        </li>
        </ul>
    </div> 

      <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr class="row">
                
                <th><a href="#">> Sous-Forum</a></th>

            </tr>
            <tr class="row">
                <th colspan="7"><center>Forums </center></th>
                <th colspan="1">Sujets</th>
                <th colspan="1">Messages</th>
                <th colspan="3">Dernier Messages</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./topic.php">Lyrics <br/></a>Lyrics terminée et opérationnelles.</td>
                <td colspan="1">11</td>
                <td colspan="1">24</td>
                <td colspan="3">Mer mar 14, 2012 3:05pm<br/>Tom</td>
            </tr>
            <tr class="row">              
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="#">Traduction<br/></a>Traduction des lyrics existantes.</td>
                <td colspan="1">7</td>
                <td colspan="1">9</td>
                <td colspan="3">Jeu dec 09, 2010 2:20am<br/>Valou</td>
            </tr>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="#">Idées<br/></a>Idées de lyrics qui trainent.</td>
                <td colspan="1">4</td>
                <td colspan="1">24</td>
                <td colspan="3">Jeu dec 09, 2010 8:50pm<br/>Ben</td>
            </tr>
        </tbody>
    </table>
    </div>
      
    <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr class="row">
                <th><a href="#">> Lyrics</a></th>

            </tr>
            <tr class="row">
                <th colspan="6"><center>Sujets </center></th>
                <th colspan="1">Auteur</th>
                <th colspan="1">Réponses</th>
                <th colspan="2">Vus</th>
                <th colspan="2">Dernier message</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="5">Ré-Écriture des lyrics <br/> [  Aller à la page <a>1</a>,<a>2</a>]</td>
                <td colspan="1">Valou</td>
                <td colspan="1">18</td>
                <td colspan="2">72</td>
                <td colspan="2">Mer nov 23,2011 9:38pm <br/> Dav</td>
            </tr>
        </tbody>
    </table>
<?php
    pied();
?>            
    </div>
    </body>
</html>       
