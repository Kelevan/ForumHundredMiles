<?php
    include_once("./includes.php");
    entete("Administration");
?> 
<html lang="en">

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
      <table class="table table-bordered table-condensed">
        <thead>
             <tr>
                <div class="btn">Nouveau
                </div>
            </tr>
            <tr>
                Page <a href="#">1</a> sur <a href="#">2</a> [<a href="#">11</a>sujets]
            </tr>
            <tr class="row">
                <th><a href="./categorie.php">> Lyrics</a></th>
            </tr>
            <tr class="row">
                <th colspan="7"><center>Topics </center></th>
                <th colspan="1">Réponses</th>
                <th colspan="1">Vues</th>
                <th colspan="3">Dernier Messages</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./message.php">You See</a></td>
                <td colspan="1">0</td>
                <td colspan="1">30</td>
                <td colspan="3">Tom</td>
            </tr>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./message.php">To My dad</a></td>
                <td colspan="1">0</td>
                <td colspan="1">19</td>
                <td colspan="3">Valou</td>
            </tr>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./message.php">Life on Demand </a></td>
                <td colspan="1">5</td>
                <td colspan="1">18</td>
                <td colspan="3">Valou</td>
            </tr>
            <tr class="row">
                <td colspan="12"> <center><a href="#">Marquer tout comme lus</a></center></td>
            </tr>
            <tr class="row">
                <td colspan="12"> <div class="btn">Nouveau</div> Page <a href="#">1</a> sur <a href="#">2</a> [<a href="#">11</a>sujets]</td>
            </tr>
        </tbody>
    </table>
<?php
    pied();
?>        
  </div>
  </body>
</html>