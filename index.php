<?php
    include_once("./includes.php");
    entete("Administration");
?> 


    <div class="container">
      <div class="row">  
<!----------- Tab FICHIERS ----------->         
        <div class="span6">             
            <legend>Derniers&nbsp;Ajouts</legend>
            <form class="form-actions">
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th><h4>Nom&nbsp;du&nbsp;fichier</h4></th>
                            <th><h4>Topic</h4></th>
                            <th><h4>Propriétaire</h4></th>
                            <th><h4>Types</h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="./audio/SleepAway.mp3">2 see</a></td>
                            <td><a href="./message.php">You&nbsp;See</td>
                            <td>Val</td>
                            <td>Audio</td>
                        </tr>
                        <tr>
                            <td><a href="./audio/Kalimba.mp3">Kalimba</a></td>
                            <td><a href="./message.php">To&nbsp;My&nbsp;Dad</td>
                            <td>Val</td>
                            <td>Audio</td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

<!----------- Tab Topics/Messages ----------->
        <div class="span6">             
            <legend>Dernières&nbsp;news</legend>
            <form class="form-actions">
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th><h4>Topic</h4></th>
                            <th><h4>Auteur</h4></th>
                            <th><h4>Date</h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="./message.php">Lyrics</a></td>
                            <td>Val</td>
                            <td>31/05/12</td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
      </div>
<?php
    pied();
?>              
