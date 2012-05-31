<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
      <div class="row">  
<!----------- Tab FICHIERS ----------->         
        <div class="span3">
            <legend>Derniers&nbsp;Fichiers</legend>
            
            <object type="application/x-shockwave-flash" data="./dewplayer/dewplayer-playlist.swf" width="200" height="20" id="dewplayer" name="dewplayer">
                <param name="wmode" value="transparent" />
                <param name="movie" value="dewplayer.swf" />
                <param name="flashvars" value="showtime=true&autoreplay=true&xml=./dewplayer/playlist.xml" />                
            </object>
        </div>

<!----------- Tab Topics/Messages ----------->
          <div class="span9">
            <legend>Dernières&nbsp;news</legend>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr class="row">
                        <th colspan="6"><h4>Topic</h4></th>
                        <th colspan="3"><h4>Auteur</h4></th>
                        <th colspan="3"><h4>Date</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row">
                        <td colspan="6"><a href="./message.php">Lyrics</a></td>
                        <td colspan="3">Val</td>
                        <td colspan="3">31/05/12</td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
<?php
    pied();
?>              
