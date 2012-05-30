<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
      <div class="row">  
<!----------- Tab FICHIERS ----------->         
        <div class="span6">
            <table class="table table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th>>&nbsp;Derniers&nbsp;Fichiers</th>
                    </tr>
                    <tr class="row">
                        <th colspan="1">Nom</th>
                        <th colspan="1">Topic</th>
                        <th colspan="3">Type</th>
                    </tr>
                </thead>
                
            </table>
        </div>

<!----------- Tab Topics/Messages ----------->
          <div class="span6">
            <table class="table table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th>>&nbsp;Derniers&nbsp;Fichiers</th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
<?php
    pied();
?>              
