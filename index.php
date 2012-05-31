<?php
    include_once("./includes.php");
    entete("Administration");
?> 

   
  

    <div class="container">
      <div class="row">  
<!----------- Tab FICHIERS ----------->         
        <div class="span6">
            <legend>Derniers&nbsp;Fichiers</legend>
            
            
           
            
            
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
