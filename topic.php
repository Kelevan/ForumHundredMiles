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
         
                             <!-- TABLEAU -->
    <legend><a href="./categorie.php">> Lyrics</a></Legend>
    <form class="well">  
        <table class="table table-bordered">      
            <thead>                         
                <tr class="row">                
                    <th></th>
                    <th><center>Topics </center></th>
                    <th><center>Réponses</center></th>
                    <th><center>Vues</center></th>
                    <th><center>Dernier Messages</center></th>
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