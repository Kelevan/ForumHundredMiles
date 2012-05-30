<?php
    include_once("./includes.php");
    entete("Administration");
?>   
      <div class="container">
        <div class="form-actions">      
            <label class="control-label"><b>Mot&nbsp;de&nbsp;passe&nbsp;actuel&nbsp;:*</b></label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="inputtactuel" value="" type="text">
            </div>
        </div>
      </div>
      
      
      
      
      <div class="container">  
        <div class="form-actions">
            <label class="control-label"><b>Nouveau&nbsp;mot&nbsp;passe&nbsp;:*</b></label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="inputtnouveau1" value="" type="text">
            </div>
            <label class="control-label"><b>Confirmation&nbsp;du&nbsp;nouveau&nbsp;mot&nbsp;passe&nbsp;:*</b></label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="inputtnouveau2" value="" type="text">
            </div>
            <div class="container">
                <a class="btn btn-primary" href="#">Confirmer</a>
                <a class="btn btn-inverse" href="./modifmdp.php">Réinitialiser</a>
            </div>
        </div>
<?php
    pied();
?>             
      </div>
  </body>
</html>

