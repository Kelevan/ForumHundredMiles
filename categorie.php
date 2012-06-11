<?php
    include_once("./includes.php");
    entete("Musique");
    verif_connexion();
?>    
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
                <th></th>
                <th><center>Forums </center></th>
                <th>Sujets</th>
                <th>Messages</th>
                <th>Vues</th>
                <th>Dernier message</th>
            </tr>
        </thead>
        <tbody>
            <tr calss="row">
                <td>logo_new</td>
                <td>img_micro</td>
                <td><a href="./forum.php">Lyrics</a><br/>Avancées des lyrics, idées, bout de texte, lyrics complète...</td>
                <td>23</td>
                <td>21</td>
                <td>Jeu Mai 24,2012 8:50pm <br/>Tom</td>
            </tr>
            <tr>
                <td>logo_new</td>
                <td>img_ampoule</td>
                <td><a href="#">Riffs & idées</a><br/> Tous nos riffs et idées pour les futurs tracks</td>
                <td>11</td>
                <td>81</td>
                <td>Jeu Mai 24,2012 10:50pm <br/>Kev</td>
            </tr>
        </tbody>
    </table>
<?php
    pied();
?>               
  
