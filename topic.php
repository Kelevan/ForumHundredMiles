<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="./index.php">Home</a> <span class="divider">/</span></li>
            <li><a href="./categorie.php">Musique</a> <span class="divider">/</span></li>
            <li><a href="./forum.php">Lyrics</a> <span class="divider">/</span></li>
            <li><a href="./topic.php">Lyrics</a> </li>
        </ul>
    </div>      
                             <!-- TABLEAU -->
    <div class="container">   
      <table class="table table-bordered ta">
        <thead>
            <legend><a href="./categorie.php">> Lyrics</a></Legend>
             <tr>
                <div class="btn">Nouveau
                </div>
            </tr>
            <tr>
                Page <a href="#">1</a> sur <a href="#">2</a> [<a href="#">11</a>sujets]
            </tr>
            <tr class="row">
                <th><center>Topics </center></th>
                <th>Réponses</th>
                <th>Vues</th>
                <th>Dernier Messages</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td>logo_new</td>
                <td><a href="./message.php">You See</a></td>
                <td>0</td>
                <td>30</td>
                <td>Tom</td>
            </tr>
            <tr class="row">
                <td>logo_new</td>
                <td><a href="./message.php">To My dad</a></td>
                <td>0</td>
                <td>19</td>
                <td>Valou</td>
            </tr>
            <tr class="row">
                <td>logo_new</td>
                <td><a href="./message.php">Life on Demand </a></td>
                <td>5</td>
                <td>18</td>
                <td>Valou</td>
            </tr>
        </tbody>
    </table>
    <td> <center><a href="#">Marquer tout comme lus</a></center></td>
    </tr>
    <tr class="row">
        <td> <div class="btn">Nouveau</div> Page <a href="#">1</a> sur <a href="#">2</a> [<a href="#">11</a>sujets]</td>
    </tr>    
<?php
    pied();
?>        