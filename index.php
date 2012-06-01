<?php
    include_once("./includes.php");
    entete("Administration");
?> 



    <div class="container">
      <div class="row">  
<!----------- Tab FICHIERS ----------->         
        <div class="span6">   
            <legend>Derniers&nbsp;Ajouts</legend>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr class="row">
                        <th colspan="4"><h4>Nom&nbsp;du&nbsp;fichier</h4></th>
                        <th colspan="4"><h4>Topic</h4></th>
                        <th colspan="2"><h4>Propriétaire</h4></th>
                        <th colspan="2"><h4>Types</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row">
                        <td colspan="4"><a href="./audio/SleepAway.mp3">2 see</a></td>
                        <td colspan="4"><a href="./message.php">You&nbsp;See</td>
                        <td colspan="2">Val</td>
                        <td colspan="2">Audio</td>
                    </tr>
                    <tr class="row">
                        <td colspan="4"><a href="./audio/Kalimba.mp3">Kalimba</a></td>
                        <td colspan="4"><a href="./message.php">To&nbsp;My&nbsp;Dad</td>
                        <td colspan="2">Val</td>
                        <td colspan="2">Audio</td>
                    </tr>
                </tbody>
            </table>
        </div>

<!----------- Tab Topics/Messages ----------->
          <div class="span6">
            <legend>Dernières&nbsp;news</legend>
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
        </div>
      </div>
<?php
    pied();
?>              
