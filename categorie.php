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
        <a href="./categorie.php">Musique</a></span>
        </li>
        </ul>
    </div> 

    <div class="container">
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th><a href="#">> Musique</a></th>

            </tr>
            <tr calss="row">
                <th colspan="7"><center>Forums </center></th>
                <th colspan="1">Sujets</th>
                <th colspan="1">Messages</th>
                <th colspan="3">Dernier message</th>
            </tr>
        </thead>
        <tbody>
            <tr calss="row">
                <td colspan="1">logo_new</td>
                <td colspan="1">img_micro</td>
                <td colspan="5"><a href="./forum.php">Lyrics</a><br/>Avancées des lyrics, idées, bout de texte, lyrics complète...</td>
                <td colspan="1">23</td>
                <td colspan="1">21</td>
                <td colspan="3">Jeu Mai 24,2012 8:50pm <br/>Tom</td>
            </tr>
            <tr>
                <td colspan="1">logo_new</td>
                <td colspan="1">img_ampoule</td>
                <td colspan="5"><a href="#">Riffs & idées</a><br/> Tous nos riffs et idées pour les futurs tracks</td>
                <td colspan="1">11</td>
                <td colspan="1">81</td>
                <td colspan="3">Jeu Mai 24,2012 10:50pm <br/>Kev</td>
            </tr>
        </tbody>
    </table>
<?php
    pied();
?>          
  </div>
  </body>
</html>       
  
